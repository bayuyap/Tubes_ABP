<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 py-5">
                @if($tickets->count())
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">QRCode</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket )
                        <tr>
                            <td>{{ $ticket['user_id'] }}</td>
                            <td>
                                {!! QrCode::size(200)->generate( $ticket['qr_code'] ); !!}
                            </td>
                            <td>{{ $ticket['name'] }}</td>
                            <td>{{ $ticket['role'] }}</td>
                            <td>{{ $ticket['created_at'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <a href="/scan" class="btn btn-primary" type="submit">Okay</a>
            </div>
        </div>
    </div>
    @else
    <p class="text-center fs-4 text-dark" style="padding-bottom: 600px;  font-weight:500">No Data Found</p>

    @endif

</body>
</html>



