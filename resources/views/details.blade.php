<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('styles/details.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
#social-links ul li {
    display: inline-block;
    
   
    
}
#social-links ul li a{
    padding: 10px;
    margin: 2px;
    font-size:20px ;
    color: blue;
   
  
}
.button-73 {
  appearance: none;
  background-color: white;
  border-radius: 25em;
  border-style: none;
  box-shadow: #ADCFFF 0 -12px 3px inset;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,sans-serif;
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: -.24px;
  margin: 0;
  outline: none;
  padding: 1rem 1.3rem;
  quotes: auto;
  text-align: center;
  text-decoration: none;
  transition: all .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-73:hover {
  background-color: plum;
  box-shadow:  0 -6px 8px inset;
  transform: scale(1.125);
}

.button-73:active {
  transform: scale(1.025);
}

@media (min-width: 768px) {
  .button-73 {
    font-size: 1rem;
    padding: .75rem 2rem;
  }
}
 
    </style>
    <title>Document</title>
</head>

<body>
  @extends('layouts.app')

    @section('content')
    
    <h1>Event Details</h1>
    <div class="card-image" >

<img src="{{asset('images/'.$event->src)}}" alt="" width="100">
</div>

<div class="nine">
  <h1>{{ $event->Eventname }}<span>{{$event->name }}</span></h1>
</div>
 
<p class="title2">
  <img src="{{asset('images/calendrier.png')}}" alt="" width="33" class="im">
  <b class="info">{{$event->dateDebut}}&nbsp&nbsp|&nbsp&nbsp{{$event->dateFin}}</b>
</p>

<p class="title2">
  <img src="{{asset('images/clock.png')}}" alt="" width="33" class="im">
  <b class="info">{{$event->heureD}}&nbsp&nbsp|&nbsp&nbsp{{$event->heureF}}</b>
</p>
<p class="title2">
  <img src="{{asset('images/ty.png')}}" alt="" width="33" class="im">
  <b class="info">{{$event->type}}</b>
</p>
<div class="dt">
  <p>{{$event->details}}</p>
</div>
 <!-- <p><span>{{$event->payement}}</span></p> -->
<p class="title2">
  <img src="{{asset('images/link.png')}}" alt="" width="33" class="im" >
  <b class="info">{{$event->linkEvent}}</b>
</p>

    <div style="display: flex; justify-content: center;">
        {!! $events !!}
    </div>
    <div class="text-center">
      <a class="button-73" href="{{url('creator/home/edit/'.$event->idE)}}">Update</a>
    </div>
    <div class="text-center">
      <a class="button-73" href="{{ url('creator/home') }}">Back</a>
      <a class="button-73" href="{{ url('/fullcalender') }}">More activities</a>
      </div>
      
      @endsection
</body>

</html>
