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
                    <h3 class='title'> All Events </h3>
                    
                    <section class="hero-section">
                        @foreach ($profil as $p)
                            <div class="wrapper">

                                <div class="card front-face">
                                    <img src="{{ asset('images/' . $p->src) }}" alt="" width="100">
                                </div>
                                <div class="card back-face">
                                    <div class="info">
                                        <div class="title">{{ $p->Eventname }}</div>

                                        <p><br />{{ $p->dateDebut }} {{ $p->dateFin }}</p>
                                    </div>
                                    <a type="submit" href="{{ url('detailsv', ['Eventname' => $p->Eventname]) }}"
                                        class="btn btn-primary">Read More</a>
                                    <ul>
                                        <i class="fab fa-twitter"></i>
                                        <i class="fab fa-instagram"></i>
                                        <i class="fab fa-youtube"></i>
                                    </ul>
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