<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href="{{ asset('styles/profil.css') }}">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-16">
                    <h3 class='title'> Your Profil </h3>
                    <div class="text-center">
                    <a class='btn btn-primary btn-submit m-5' href="{{ url('creator/home/ajouter') }}">Create Your Event</a>
                    </div>
                    <section class="hero-section">
                        @foreach ($data as $p)
                            <div class="wrapper">

                                <div class="card front-face">
                                    <img src="{{ asset('images/' . $p->src) }}" alt="" width="100">
                                </div>
                                <div class="card back-face">
                                    <div class="info">
                                        <div class="title">{{ $p->Eventname }}</div>

                                        <p><br />{{ $p->dateDebut }} {{ $p->dateFin }} {{$p->name}}</p>
                                    </div>
                                    <a type="submit" href="{{ url('details', ['Eventname' => $p->Eventname]) }}"
                                        class="btn btn-primary">Read More</a>
                                 
                                </div>
                            </div>
                        @endforeach
                    </section>
                    <div class="text-center">
                        <a class='btn btn-primary btn-submit m-3' href="{{ url('/') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
