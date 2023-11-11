<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/display.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>

    <style>
        .go-back-button {
      font-size: 18px;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-weight: 700;
      color: #fff;
      background-color: #005aaa;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px; /* Adjust this value as needed */
    }
    </style>
</head>
<body>
    <table id="example" class="display" cellspacing="0" width="100%">
      
      <thead>
        <tr>
            <th>Electoral Area</th>
            <th>Polling Stations</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Positions</th>
            <th>Decision</th>
        </tr>
      </thead>
     
      <tbody>
        @foreach($registrations as $registration)
                <tr>
                    <td>{{ $registration->electoral_area }}</td>
                    <td>{{ $registration->polling }}</td>
                    <td>{{ $registration->first_name }}</td>
                    <td>{{ $registration->last_name }}</td>
                    <td>{{ $registration->categories }}</td>
                    <td>{{ $registration->decisions }}</td>
                </tr>
            @endforeach
      </tbody>
    </table>

    <a href="{{ route('home') }}" class="go-back-button">HomePage</a>
    <a href="{{ route('pie-chart') }}" class="go-back-button">View Data Percentages</a>
    <script src="{{asset('js/display.js')}}"></script>
  </body>
</html>