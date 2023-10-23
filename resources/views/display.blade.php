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
    <div class="container">
        <div class="jumbotron"> 
          <table class='table'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Edit/Update</th>
                    

                </tr>

            </thead>

            @foreach($events as $event)
            <tbody>
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->start}}</td>
                    <td>{{$event->end}}</td>
                      <th>
                        <a href="{{url('/edit/'.$event->id)}}" class='btn btn-success'>Edit</a>
                      </th>
                </tr>
            </tbody>
            @endforeach
          </table>
        </div>
    </div>
</body>
</html>