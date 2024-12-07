<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="reg.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  <body>

    @php
        $user=session()->get('user');
    @endphp
    
    <div class="container">
      <div class="title">Profile</div>
      <div class="content">
        <form method="POST" action="/profileupdate">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" name="fullname" placeholder="Enter your name" value="{{$user->fullname}}" required>
            </div>
            <span>
              @error('fullname')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username" placeholder="Enter your username" value="{{$user->username}}" required>
            </div>
            <span>
              @error('username')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" name="email" placeholder="Enter your email" value="{{$user->email}}" required>
            </div>
            <span>
              @error('email')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" name="mobileno" placeholder="Enter your number" value="{{$user->mobileno}}" required>
            </div>
            <span>
              @error('mobileno')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <span>
              @error('password')
                  {{$message}}
              @enderror
           </span>
           
          </div>
         <span class="address-title">Address</span>
          <div class="textarea">
            <textarea name="address" cols="20" rows="4" class="form-control" placeholder="Address write Here !!">{{$user->address}}</textarea>
          </div>
          <span>
            @error('address')
                {{$message}}
            @enderror
         </span>
          <div class="button">
            <input type="submit" value="Update">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
