import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:provider/provider.dart';
import 'package:tubes_abp/screens/login_screen.dart';
import 'package:tubes_abp/services/auth.dart';
import 'package:tubes_abp/screens/home_screen.dart';
import 'package:dio/dio.dart' as Dio;
import 'package:tubes_abp/services/dio.dart';
import 'package:tubes_abp/models/tickets.dart';
import 'package:http/http.dart' as http;

class TicketScreen extends StatefulWidget {
  final String token;
  const TicketScreen({Key? key, required this.token}) : super(key: key);

  @override
  State<TicketScreen> createState() => _TicketScreenState();
}

class _TicketScreenState extends State<TicketScreen> {
  final storage = new FlutterSecureStorage();
  late Tickets _ticket;
  Tickets get ticket => _ticket;
  bool loading = false;
  bool error = false;
  var listTickets;
  late Future<List<Tickets>> ticketsFuture = getTickets();
  @override
  TicketScreen get widget => super.widget;

  @override
  void initState() {
    super.initState();
    readToken();
    ticketsFuture = getTickets();
    getTickets();
  }

  Future<List<Tickets>> getTickets() async {
    List<Tickets> ticketList = [];

    String userToken = widget.token;
    const url = "http://182.158.1.100:8000/api/tickets";
    final response = await http.get(Uri.parse(url), headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'Authorization': 'Bearer $userToken',
    });
    final body = json.decode(response.body);
    var listTickets = body.map<Tickets>(Tickets.fromJson).toList();
    return listTickets;
//refresh UI
  }

  void readToken() async {
    String? token = await storage.read(key: 'token');
    String keyToken = token!;
    Provider.of<Auth>(context, listen: false).tryToken(token: keyToken);
    print(token);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(title: Text('Ticket List')),
        body: Center(
          child: FutureBuilder<List<Tickets>>(
            future: ticketsFuture,
            builder: (context, snapshot) {
              if (snapshot.connectionState == ConnectionState.waiting) {
                return const CircularProgressIndicator();
              } else if (snapshot.hasError) {
                return Text('${snapshot.error}');
              } else if (snapshot.hasData) {
                final tickets = snapshot.data!;
                return buildTickets(tickets);
              } else {
                return const Text('No Data!');
              }
            },
          ),
        ));
  }
}

Widget buildTickets(List<Tickets> tickets) => ListView.builder(
      itemCount: tickets.length,
      itemBuilder: (context, index) {
        final ticket = tickets[index];
        return Card(
          child: ListTile(
            title: Text('Guest Name : ' + ticket.name),
            subtitle: Text('Ticket Code: ' + ticket.qr_code),
          ),
        );
      },
    );
