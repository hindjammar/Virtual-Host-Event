<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/styles/form.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        
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
</head>

<body>


    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <h1 class="form-title">The basics Infos:</h1>

        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div> --}}

            {{-- <img src="{{ asset('images/' . Session::get('src')) }}" />
        @endif --}}


        <form method="post" action="{{ url('creator/home/save') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="Eventname">Event Name</label>
                    <input type="text" id="Eventname" name="Eventname" required placeholder="Event name"
                        value="{{old('Eventname')}}" />
                </div>
                <div class="user-input-box">
                    <label for="name">Organisator name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name"
                        value="{{old('name')}}" />
                </div>
                <div class="user-input-box">
                    <label for="dateDebut">Starts at:</label>
                    <input type="date" id="dateDebut" rows=10 name="dateDebut" value="{{old('dateDebut')}}" />

                    <label for="dateFin">End at:</label>
                    <input type="date" id="dateFin" name="dateFin" rows=10 value="{{old('dateFin')}}" />
                </div>
                <!-- Time -->


                <div class="user-input-box">
                    <label for="heureD">Starts at:</label>
                    <input type="time" id="heureD" rows=10 name="heureD" value="{{old('heureD')}}" />

                    <label for="heureF">End at:</label>
                    <input type="time" id="heureF" rows=10 name="heureF" value="{{old('heureF')}}" />
                </div>

                <div class="user-input-box">
                    <label for="src">Image:</label>
                    <input type="file" id="src" name="src" placeholder="Choose ...."
                        value="{{old('src')}}" />

                </div>

            </div>
            <div class="gender-details-box">
                <label for="payement">Payement</label>
                <select name="payement" id="payement" value="{{old('payement')}}">
                <option value="free">Free</option>
                    <option value="payed">Payed</option>
                   
                </select>
            </div>


            <div class="gender-details-box">
                <label for="type">Type</label>
                <select name="type" id="type" value="{{old('type')}}">
                    <option value="conference">conference</option>
                    <option value="webainire">webainire</option>
                    <option value="training">training</option>
                </select>
            </div>


            <div class="user-input-box">
                <label for="details">Event description</label>
                <input type="textarea" id="details" name="details" placeholder="Descripe your event"
                    value="{{old('details')}}" />
            </div>
            <div class="user-input-box">
                <label for="linkEvent">Link</label>
                <input type="url" id="linkEvent" name="linkEvent" placeholder="Paste link"
                    value="{{old('linkEvent')}}" />
            </div>
            <div class="form-submit-btn">
                <button class="button-73" role="button">Ajouter</button>
              <a class="button-73" href="{{url('/creator/home')}}" style="color:black;">Back</a>    
            </div>
    </div>

    </form>
    </div>
</body>

</html>

