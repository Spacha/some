<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Works</title>

    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/printable.css') }}"/>
  </head>
  <body>

    <div class="printable-wrapper">

      <h1>Work log</h1>

      <div class="ingress">
        <table>
          <tr><th>Company:</th> <td>Ninjami</td></tr>
          <tr><th>Employee:</th> <td>Miika Sikala</td></tr>
          <tr><th>Project:</th> <td>Cloqqa</td></tr>
          <tr><th>Timespan:</th> <td>{{ date('F \o\f Y', strtotime($works->toArray()[count($works->toArray())-1]['created_at'])) }} - {{ date('F \o\f Y', strtotime($works->toArray()[0]['created_at'])) }}</td></tr>
          <tr><td>&nbsp;</td><td></td></tr>
          <tr><th>Hours in total:</th><td>{{ $totalHours }}</td></tr>
        </table>
      </div>

      <table class="table table-bordered works-table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Work name</th>
            <th>Hours</th>
          </tr>
        </thead>
        <tbody>
          @foreach($works as $work)
            <tr>
              <th scope="row">{{ date('d.m.Y', strtotime($work->created_at)) }}</th>
              <td>{{ $work->name }}</td>
              <td>{{ $work->hours }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>