<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Link rel="stylesheet" href="{{asset('styles/session.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <div className="diwibinar">
           
           <h1 className="h1">Hi-Hello</h1>
           <h7 className="h3">Your next event </h7>
           <div className="d1">You don't have any events yet.Let's create one!</div>
           <div class="container">
     <a type="submit" class="button" href="{{route('formulaire')}}">
       <span>Create event </span>
     </a>
   </div>
        </div>
       
       
  
</section>
</body>
</html>