<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
            background-color: #fe5d00;
            color: #ffffff;
        }
        .content {
            padding: 20px;
            text-align: center;
            background: #FCF4F2;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #fe5d00;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style = "margin-bottom: 0px; margin-top: 0px;" >Password Reset Request</h1>
        </div>
        <div class="content">
            <p>Hello <?=$name?>,</p>
            <p>You have requested to reset your password. Click the button below to reset your password:</p>
            <a href="<?=base_url()?>reset-password/<?=$token?>" style = "background-color: #fe5d00; color: #FFF;" class="button">Reset Password</a>
          	<br><br>
            <p>If you did not request a password reset, please ignore this email.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 <?=APP_NAME?>. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
