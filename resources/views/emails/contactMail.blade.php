<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
</head>
<body>
    <h3>Name: {{$mailData['name']}}</h3>
    <h3>Email: {{$mailData['email']}}</h3>
    <h3>Phone Number: {{$mailData['phone_number']}}</h3>
    <h3>Subject: {{$mailData['msg_subject']}}</h3>
    <h3>Message: {{$mailData['message']}}</h3>
</body>
</html>