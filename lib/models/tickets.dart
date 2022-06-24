class Tickets {
  int id;
  String qr_code;
  int user_id;
  String name;
  String role;

  Tickets(
      {required this.id,
      required this.qr_code,
      required this.user_id,
      required this.name,
      required this.role});

  static Tickets fromJson(json) => Tickets(
      id: json['id'],
      qr_code: json['qr_code'],
      user_id: json['user_id'],
      name: json['name'],
      role: json['role']);
}
