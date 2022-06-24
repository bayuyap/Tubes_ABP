import 'package:dio/dio.dart';

Dio dio() {
  BaseOptions options = new BaseOptions(
    baseUrl: "http://182.158.1.100:8000/api/",
    connectTimeout: 5000,
    receiveTimeout: 3000,
  );
  Dio dio = new Dio(options);

  dio.options.headers['accept'] = 'Application/json';
  return dio;
}
