@extends('layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 py-5">
                <table class="table text-light">
                    <thead>
                      <tr>
                        <th scope="col">ID_User</th>
                        <th scope="col">QRCode</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                      </tr>
                    </thead>
                    <div class="isi">
                        <tbody>
                            @foreach ($tickets as $ticket )
                            <tr>
                                <td>{{ $ticket['user_id'] }}</td>
                                <td>
                                    {!! QrCode::size(200)->generate( $ticket['qr_code'] ); !!}
                                </td>
                                <td>{{ $ticket['name'] }}</td>
                                <td>{{ $ticket['role'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>
                  </table>
            </div>
        </div>
    </div>
@endsection


