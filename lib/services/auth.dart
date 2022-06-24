import 'package:flutter/material.dart';
import 'package:dio/dio.dart' as Dio;
import 'package:tubes_abp/models/user.dart';
import 'package:tubes_abp/services/dio.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';

class Auth extends ChangeNotifier {
  bool _isLoggedin = false;

  late User _user;
  String? _token;
  final storage = new FlutterSecureStorage();
  bool get authenticated => _isLoggedin;
  User get user => _user;

  void login({required Map creds}) async {
    print(creds);

    try {
      Dio.Response response = await dio().post('sanctum/token', data: creds);
      print(response.data.toString());

      String token = response.data.toString();
      this.tryToken(token: token);
      _isLoggedin = true;

      notifyListeners();
    } catch (e) {
      print(e);
    }
  }

  void tryToken({required String token}) async {
    if (token == null) {
      return;
    } else {
      try {
        Dio.Response response = await dio().get('/profile',
            options: Dio.Options(headers: {'Authorization': 'Bearer $token'}));
        this._isLoggedin = true;
        this._user = User.fromJson(response.data);
        this._token = token;
        notifyListeners();
        this.storeToken(token: token);
        print(_user);
      } catch (e) {
        print(e);
      }
    }
  }

  void storeToken({required String token}) async {
    this.storage.write(key: 'token', value: token);
  }

  void logout() async {
    try {
      Dio.Response response = await dio().post('logout',
          options: Dio.Options(
              headers: {'Authorization': 'Bearer $_token'},
              followRedirects: false,
              validateStatus: (status) {
                return status! <= 500;
              }));
      this._isLoggedin = false;
      cleanUp();
      notifyListeners();
    } catch (e) {
      print(e);
    }
  }

  void cleanUp() async {
    this._user.name = '';
    this._user.email = '';
    this._isLoggedin = false;
    this._token = null;
    await storage.delete(key: 'token');
  }
}
