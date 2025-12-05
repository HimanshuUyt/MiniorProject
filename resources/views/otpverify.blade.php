<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification Form</title>
    <link rel="stylesheet" href="otpverify.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="otpverify.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <p id="message_error" style="color:red;"></p>
      <p id="message_success" style="color:green;"></p>
      <h4>Enter OTP Code</h4>
      <form action="#" method="POST" id="verificationForm">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">
        <div class="input-field">
          <input type="number" />
          <input type="number" disabled />
          <input type="number" disabled />
          <input type="number" disabled />
        </div>
        <button type="submit">Verify OTP</button>
      </form>
      <p class="time"></p>

      <button id="resendOtpVerification">Resend Verification OTP</button>
    </div>
  </body>
  <script>

    $(document).ready(function()
    {
      $('#verificationForm').submit(function(e)
      {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
        url:"{{ route('verifiedOtp') }}",
        type:"POST",
        data: formData,
        success:function(res)
        {
          if(res.success){
            alert(res.msg);
            window.open("/","_self");
          }
          else{
            $('#message_error').text(res.msg);
            setTimeout(() => {
              $('#message_error').text('');
            }, 3000);
          }
        }});
      });

      $('#resendOtpVerification').click(function()
      {
        $(this).text('Wait...');
        var userMail = @json($email);

        $.ajax({
          url:"{{ route('resendOtp') }}",
          type:"GET",
          data: {email:userMail },
          success:function(res)
          {
            $('#resendOtpVerification').text('Resend Verification OTP');
            if(res.success)
            {
              timer();
              $('#message_success').text(res.msg);
              setTimeout(() => {
                $('#message_success').text('');
              }, 3000);
            }
            else
            {
              $('#message_error').text(res.msg);
              setTimeout(() => {
                $('#message_error').text('');
              }, 3000);
            }
          }
        });
      }
    );
  });
  function timer()
  {
    var seconds = 30;
    var minutes = 1;

    var timer = setInterval(() => {

    if(minutes < 0){
      $('.time').text('');
      clearInterval(timer);
    }
    else{
        let tempMinutes = minutes.toString().length > 1? minutes:'0'+minutes;
        let tempSeconds = seconds.toString().length > 1? seconds:'0'+seconds;

        $('.time').text(tempMinutes+':'+tempSeconds);
    }

    if(seconds <= 0){
        minutes--;
        seconds = 59;
    }

    seconds--;

    }, 1000);
  }
  timer();
  </script>
</html>
