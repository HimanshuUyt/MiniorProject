<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Popup Login Form Design | CodingNepal</title>
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <div class="container">
            
            <div class="text">
               Login Form
            </div>
            <form action="/login_user" method="POST">
               @csrf
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email">
               </div>
               <span>
                  @error('username')
                      {{$message}}
                  @enderror
               </span>

               <div class="data">
                  <label>Password</label>
                  <input type="password" name="password">
               </div>
               <span>
                  @error('password')
                      {{$message}}
                  @enderror
                </span>

               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">login</button>
               </div>
               <div class="signup-link">
                  Not a member? <a href="/register">Register</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>