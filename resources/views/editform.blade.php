<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form method='post'action='{{url("/update")}}' enctype="multipart/form-data">
    {{csrf_field()}}
<div class="container">
    <div class="jumbotron">
        <h1 style='display:flex; justify-content:center;'>Update your data</h1>
     <input type='hidden' name='id' value='{{$events->id}}'>
        <!-- <input type='hidden' name='_method' value='UPDATE'> -->
    <div class='form-group'>
        <label>Name </label>
        <input type='text' name='title' class='form-control'value='{{$events->title}}'>

        <label>Start date </label>
        <input type='datetime-local' name='start' class='form-control'value='{{$events->start}}'>

        <label>End date </label>
        <input type='datetime-local' name='end' class='form-control'value='{{$events->end}}'>

        </div>

        <button type='submit' class='btn'>Update</button>
        <a href="{{url('fullcalender')}}" class='btn'>Back</a>

    </div>
</div>

    </form>
</body>
</html>