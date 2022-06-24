import 'package:flutter/material.dart';
import 'package:dio/dio.dart' as Dio;
import 'package:tubes_abp/services/dio.dart';
import 'package:tubes_abp/models/tickets.dart';

class Ticket {
  late Tickets _ticket;

  Tickets get ticket => _ticket;
  void getTickets({required String token}) async {
    if (token == null) {
      return;
    } else {
      try {
        Dio.Response response = await dio().get('/tickets',
            options: Dio.Options(headers: {'Authorization': 'Bearer $token'}));
        this._ticket = Tickets.fromJson(response.data);
        print(_ticket);
      } catch (e) {
        print(e);
      }
    }
  }
}
