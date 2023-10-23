<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Link rel='stylesheet' href='{{asset("styles/addevent.css")}}'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {

 margin-top:10px;

 display:block;

 }

input{

 padding: 3px;

 border:1px solid #F5C5C5;

 border-radius:5px;

width:200px;

 box-shadow:1px 1px 2px #C0C0C0 inset;

} 

input[type=submit], input[type=reset] {

 width:100px;
 margin-left:50px;

 box-shadow:1px 1px 1px #D83F3D;

 cursor:pointer;


 }



fieldset {

 padding:0 20px 20px 20px;
 margin-bottom:10px;

 border:1px solid #DF3F3F;



 }

legend {

color:#201e1e;

font-weight:bold

 }

form {

background-color:#FAFAFA;

padding:10px;

width:400px;

display: flex;

justify-content: center;



 }


.container{

 display: flex;

 justify-content: center;

 margin-top: 80px;

}
    </style>
</head>
<body>

   <div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset">
 
    <form method='post' action='{{url("/store")}}'>
        {{ csrf_field() }}


<fieldset>
    <legend>Add Event Activite </legend>


    <label for="idE">Event</label><br><br>
<select name="idE" id="idE">
    @foreach ($events as $event)
        <option value="{{ $event->idE }}"> {{ $event->Eventname }} </option>
    @endforeach
</select><br><br>


<label for='title'>Title</label><br>
<input type='text' name='title[]' id='title'><br><br>



<label for='start'>Start date</label><br>
<input type='datetime-local' class='date' name='start[]' id='start'><br><br>



<label for='end'>End date</label><br>
<input type='datetime-local'   class='date' name='end[]' id='end'><br><br>




<input type="submit" name='submit' value='Add Activite'><br>
    </form>

        </div>
    </div>
   </div>
   </fieldset>
</body>
</html>