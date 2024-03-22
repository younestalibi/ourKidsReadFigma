<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <style>
        *{
            text-align: center;
        }
        .logo {
            width: 100px;
            height: 100px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div style="text-align: center;">
        <img src="{{asset('assets/images/logo/logo.png')}}" alt="Our Kids Reading Logo" class="logo">
    </div>
    
    <p>Hello,</p>
    
    <p>Your password has been reset. Here is your current password:</p>
    
    <p><strong>{{ $password }}</strong></p>
    
    {{--<p>We recommend that you change your password immediately after logging in for security purposes.</p>--}}
    
    <p>If you did not request this password reset or have any concerns, please contact our support team.</p>
    
    <p>Thank you.</p>
</body>
</html>
