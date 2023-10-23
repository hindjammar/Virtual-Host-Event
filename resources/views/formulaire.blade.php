<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title></title>
    <Link rel='stylesheet' href="{{asset('styles/form.css')}}">
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">The basics Infos:</h1>
      <form method="POST" action="{{ route('formulaire') }}" >
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Event Name</label>
            <input type="text"
                    id="fullName"
                    name="fullName"
                    required
                    placeholder="Event name"/>
          </div>
          <div class="user-input-box">
            <label for="username">Organisator name:</label>
            <input type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your name"/>
          </div>
          <div class="user-input-box">
            <label for="date">Starts at:</label>
            <input type="date"
                    id="date"
                    name="date"
                    />

                    <label for="date">End at:</label>
            <input type="date"
                    id="date"
                    name="date"
                    />
          </div>
          <div class="user-input-box">
            <label for="image">Image:</label>
            <input type="file"
                    id="image"
                    name="image"
                    placeholder="Choose ...."/>
          </div>
          <!-- <div class="user-input-box">
            <label for="">Payment</label>
            <input type="text"
                    id="payment"
                    name="password"
                    placeholder="Enter Password"/>
          </div> -->
          <!-- <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm Password"/>
          </div> -->
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Payment</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="free">
            <label for="male">Free</label>
            <input type="radio" name="gender" id="paid">
            <label for="female">Paid</label>
            <!-- <input type="radio" name="gender" id="other">
            <label for="other">Other</label> -->
          </div>

          <div class="user-input-box">
            <label for="">Event theme</label>
            <input type="text"
                    id="event"
                    name="password"
                    placeholder="Theme"/>
          </div>
          <div class="user-input-box">
            <label for="">Event description</label>
            <input type="textarea"
                    id="eventtext"
                    name="eventtext"
                    placeholder="Descripe your event"/>
          </div>
          <div class="user-input-box">
            <label for="">Link</label>
            <input type="text"
                    id="link"
                    name="link"
                    placeholder="Paste link"/>
          </div>

        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Ajouter">
        </div>
      </form>
    </div>
  </body>
</html>