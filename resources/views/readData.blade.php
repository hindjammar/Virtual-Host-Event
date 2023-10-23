<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="{{ url('hh/ajouter') }}">Ajouter</a>
        <table class="table table-striped">
            <tr>
                <th>Eventname</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>HeureDebut</th>

                <th>HeureFin</th>

                <th>Details</th>

                <th>LinkEvent</th>
                <th>img</th>
                <th>Payement</th>
                <th>**</th>


            </tr>

            @foreach ($data as $event)
                <tr>

                    <td>{{ $event->Eventname }}</td>
                    <td>{{ $event->dateDebut }}</td>
                    <td>{{ $event->dateFin }}</td>

                    <td>{{ $event->heureD }}</td>

                    <td>{{ $event->heureF }}</td>

                    <td>{{ $event->details }}</td>

                    <td>{{ $event->linkEvent }}</td>
                    <td>
                        @if ($event->src)
                            <img src="{{ asset('images/' . $event->src) }}" alt="" width="100">
                        @else
                            Aucune photo
                        @endif
                    </td>
                    <td>{{ $event->payement }}</td>
                    <td>

                        <a href="{{url('hh/edit/'.$event->idE)}}"> <button>Update</button></a>

                    </td>




                </tr>
            @endforeach

            
        </table>
<a class='btn btn-primary btn-submit m-3' href="{{url('creator/home')}}">Back To Profil</a>
    </div>

</body>

</html>
