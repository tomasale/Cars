<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
     integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
      crossorigin="anonymous">

    <!-- fa CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- css file -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/tikras.css') }}" />

    <!-- gallery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-left">
                <h2>Car List</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('upload.create') }}">
                 Upload</a>
            </div>

        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
        </tr>

    @foreach ($carlists as $carlist)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $carlist->title }}</td>
        <td>{{ $carlist->content }}</td>
        <td>
        <a href='{{ asset("images/$carlist->image") }}'>{{ $carlist->image }}</a>
        </td>
    </tr>
    @endforeach
    
    </table>

    {!! $carlists->render() !!}

<br>
    <div class="pull-left">
        <a class="btn btn-primary" href="{{ url('/') }}">
            Back
        </a>
    </div>

</body>

</html>