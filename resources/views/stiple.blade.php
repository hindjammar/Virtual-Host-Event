<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="{{ asset('styles/sl.css') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    </style>
</head>

<body>

    <section class="banner" id="home">
        <div class="container md-6">
            <span class="tagline">Welcome to EventsVibes</span>

            <h1>Hi! Pick Up an Event<span className="txt-rotate" dataPeriod="1000"
                    data-rotate='[ "Webinars", "Conferences", "Training" ]'></span></h1>
            <img src="{{ asset('images/regi.png') }}" alt="" class="im" />
            <p>Event Vibes is simply an innovative platform that<br />
                allows its users to create events as well as participate in any event.<br />
                This platform was created to facilitate
                access to daily events as well as communication between creators and visitors.</p>
            <a href="{{ url('prof')}}"><button class="btnH">Create Event </button> </a>
            <a href="{{ url('profv') }}"><button class="btnH nnn">View Events </button></a>


        </div>



    </section>

</body>

</html>
