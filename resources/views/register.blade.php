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
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form method="POST" action="/register_user">
          @csrf
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" name="fullname" placeholder="Enter your name" required>
            </div>
            <span>
              @error('fullname')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username" placeholder="Enter your username" required>
            </div>
            <span>
              @error('username')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <span>
              @error('email')
                  {{$message}}
              @enderror
           </span>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" name="mobileno" placeholder="Enter your number" required>
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
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="password" name="con_password" placeholder="Confirm your password" required>
            </div>
            <span>
              @error('con_password')
                  {{$message}}
              @enderror
           </span>
          </div>
         <span class="address-title">Address</span>
          <div class="textarea">
            <textarea name="address" cols="20" rows="4" class="form-control" placeholder="Address write Here !!"></textarea>
          </div>
          <span>
            @error('address')
                {{$message}}
            @enderror
         </span>
          <div class="button">
            <input type="submit" value="Register">
            <p style="text-align: center;margin-top:15px">Already Have An Account? <a href="/login" class="my-3">Login Now..</a></p>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
