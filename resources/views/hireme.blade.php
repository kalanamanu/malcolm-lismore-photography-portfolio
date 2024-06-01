<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Malcolm Lismore Photography</title>
<link href="{{ asset('css/hireme.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.nav2')
  <section class="container1">
    <header>Make your Reservation</header>
    <form action="{{ route('submit.form') }}" method="POST" class="form">
    @csrf
      <div class="input-box">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" placeholder="Enter full name" name="fullname" required />
      </div>

      <div class="input-box">
        <label for="email">Email Address</label>
        <input type="text" id="email" placeholder="Enter email address" name="email" required />
      </div>

      <div class="column">
        <div class="input-box">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" placeholder="Enter phone number" name="phone" required />
        </div>
        <div class="input-box">
          <label for="eventdate">Event Date</label>
          <input type="date" id="eventdate" placeholder="Enter event date" name="date" required />
        </div>
      </div>
      <div class="plan-box">
        <h3>Slect your plan</h3>
        <div class="select-box">
        <select id="country" name="plan">
                <option hidden>Your Plan</option>
                <option>Wedding</option>
                <option>Special Event</option>
                <option>Portraits</option>
              </select>
            </div>
      </div>
      <div class="input-box address">
        <label for="street">Event Location</label>
        <input type="text" id="street" placeholder="Enter street address" />
        <input type="text" id="street2" placeholder="Enter street address line 2"/>
        <div class="column">
          <input type="text" id="city" placeholder="Enter city" required name="location"/>
        </div>
        <div class="column">
          <input type="number" id="postal" placeholder="Enter postal code"/>
        </div>
      </div>
      <button type="submit">Submit</button>
    </form>
  </section>
  @include('layouts.footer')
</body>
</html>
