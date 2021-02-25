<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail</title>
</head>

<body>
   <p>Dear {{$details['name']}},</p>
   <p> Here below are your following details.</p>
   <p>Your ID: {{$details['body']}}</p>
   <p>Your PASSWORD: {{$details['body']}}</p>
   <p>Kindly change your <strong>PASSWORD</strong> to ensure that no one can access your account.</p>
   <p>Best Regards,</p>
   <p>IUT Admin,</p>
</body>

</html>