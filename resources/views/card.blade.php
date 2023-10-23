<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <Link rel="stylesheet" href="{{asset('styles/style.css')}}" />  
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
  <style>
   
    h3 {

position: relative;
font-family: Geneva, sans-serif;
font-size: 60px;
text-transform: uppercase;
letter-spacing: 2px;
background: linear-gradient(90deg, #79a2bc, #fff, #4a8acb);
background-repeat: no-repeat;
color: rgb(115, 71, 156);
background-size: 80%;
animation: animate 2s infinite;


}

@keyframes animate {
0% {
  background-position: -500%;
}

100% {
  background-position: 500%;
}
}

.title {

display: flex;
justify-content: center;
margin-top: 2%;
font-size: 40px;
font-family: serif;

}
  </style>
</head>
<body>
   


<h3 class="title">all event</h3>



    <section  class="hero-section">

    @foreach ($cart as  $c) 
    <div class="wrapper">  
    
    <div class="card front-face">  
    <img src="{{asset('images/'.$c->src)}}" alt="" width="100">
    </div>  
    <div class="card back-face">   
     <div class="info">  
      <div class="title">{{$c->Eventname}}</div>  
       
      <p><br />{{$c->dateDebut}} {{$c->dateFin}}</p>  
     </div>  
     <a  type="submit" href='{{url("detailsv" ,["Eventname" => $c->Eventname])}}' class="btn btn-primary">Read More</a>
     <ul>  
      
     </ul>  
    </div>  
   </div>  
  

   </div>
  
   @endforeach
   
   </section>
{{-- Pagination --}}

 <div class="d-flex justify-content-center mx-auto ">

{!! $cart->links() !!}

 </div>
  
</body>
</html>