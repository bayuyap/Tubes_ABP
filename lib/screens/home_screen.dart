import 'package:flutter/material.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:provider/provider.dart';
import 'package:tubes_abp/screens/login_screen.dart';
import 'package:tubes_abp/screens/ticket_screen.dart';
import 'package:tubes_abp/services/auth.dart';

class HomeScreen extends StatefulWidget {
  const HomeScreen({Key? key}) : super(key: key);

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  final storage = new FlutterSecureStorage();
  String? _userToken;
  @override
  void initState() {
    super.initState();
    bacaToken();
    readToken();
  }

  void readToken() async {
    String? token = await storage.read(key: 'token');
    String keyToken = token!;
    Provider.of<Auth>(context, listen: false).tryToken(token: keyToken);
    print(token);
  }

  Future<String> bacaToken() async {
    var token = await storage.read(key: 'token');
    String keyToken = token!;
    return keyToken;
  }

  @override
  Widget build(BuildContext context) {
    bacaToken().then((value) {
      _userToken = value;
    });
    return Scaffold(
      appBar: AppBar(
        title: Text('Tubes ABP Kelompok 6'),
      ),
      body: Center(
        child: Text('Home Screen'),
      ),
      drawer: Drawer(
        child: Consumer<Auth>(builder: (context, auth, child) {
          if (!auth.authenticated) {
            return ListView(
              children: [
                ListTile(
                  title: Text('Login'),
                  leading: Icon(Icons.login),
                  onTap: () {
                    Navigator.of(context).push(
                        MaterialPageRoute(builder: (context) => LoginScreen()));
                  },
                ),
              ],
            );
          } else {
            return ListView(
              children: [
                DrawerHeader(
                  child: Column(
                    children: [
                      CircleAvatar(
                        backgroundColor: Colors.white,
                        radius: 50,
                      ),
                      SizedBox(
                        height: 5,
                      ),
                      Text(
                        auth.user.name,
                        style: TextStyle(color: Colors.white),
                      ),
                      SizedBox(
                        height: 0,
                      ),
                      Text(
                        auth.user.email,
                        style: TextStyle(color: Colors.white),
                      ),
                    ],
                  ),
                  decoration: BoxDecoration(color: Colors.blueAccent),
                ),
                ListTile(
                  title: Text('Logout'),
                  leading: Icon(Icons.logout),
                  onTap: () {
                    Provider.of<Auth>(context, listen: false).logout();
                  },
                ),
                ListTile(
                  title: Text('Tickets'),
                  leading: Icon(Icons.temple_buddhist),
                  onTap: () {
                    Navigator.push(
                        context,
                        MaterialPageRoute(
                          builder: (context) => TicketScreen(
                            token: _userToken!,
                          ),
                        ));
                  },
                ),
              ],
            );
          }
        }),
      ),
    );
  }
}
