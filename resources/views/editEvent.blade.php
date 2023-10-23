<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/styles/form.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <h1 class="form-title">The basics Infos:</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>

            <img src="{{ asset('images/' . Session::get('src')) }}" />
        @endif
        <form method="post" action="{{url('creator/home/update')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="idE" value="{{$data->idE}}">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="Eventname">Event Name</label>
                    <input type="text" id="Eventname" name="Eventname" required placeholder="Event name" value="{{$data->Eventname}}" />
                </div>
                <div class="user-input-box">
                    <label for="name">Organisator name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" value="{{$data->name}}" />
                </div>
                <div class="user-input-box">
                    <label for="dateDebut">Starts at:</label>
                    <input type="date" id="dateDebut" rows=10 name="dateDebut" value="{{$data->dateDebut}}" />

                    <label for="dateFin">End at:</label>
                    <input type="date" id="dateFin" name="dateFin" rows=10 value="{{$data->dateFin}}" />
                </div>
                <!-- Time -->


                <div class="user-input-box">
                    <label for="heureD">Starts at:</label>
                    <input type="time" id="heureD" rows=10 name="heureD" value="{{$data->heureD}}" />

                    <label for="heureF">End at:</label>
                    <input type="time" id="heureF" rows=10 name="heureF" value="{{$data->heureF}}" />
                </div>

            </div>
            <div class="gender-details-box">
                <label for="payement">Payement</label>
                <select name="payement" id="payement" value="{{$data->payement}}">
                    <option value="payed">Payed</option>
                    <option value="free">Free</option>
                </select>
            </div>


            <div class="gender-details-box">
                <label for="type">Type</label>
                <select name="type" id="type" value="{{$data->type}}">
                    <option value="conference">conference</option>
                    <option value="webainire">webainire</option>
                    <option value="training">training</option>
                </select>
            </div>


            <div class="user-input-box">
                <label for="details">Event description</label>
                <input type="textarea" id="details" name="details" placeholder="Descripe your event" value="{{$data->details}}" />
            </div>
            <div class="user-input-box">
                <label for="linkEvent">Link</label>
                <input type="url" id="linkEvent" name="linkEvent" placeholder="Paste link" value="{{$data->linkEvent}}" />
            </div>
            <div class="form-submit-btn">
                <button type="submit">Update</button>
                <a href="{{url('creator/home')}}">Back</a>
            </div>
    </div>

    </form>
    </div>
</body>

</html>