<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry</title>
</head>
<body>
<h1>New Visit Notification</h1>
<p>You have a new visit request with the following details:</p>
<ul>
<h1>New Visit Notification</h1>
<p>You have a new visit request with the following details:</p>
<ul>
    <li><strong>Name:</strong> {{ $visit->name }}</li>
    <li><strong>Number:</strong> {{ $visit->number }}</li>
    <li><strong>Email:</strong> {{ $visit->email }}</li>
    <li><strong>Date:</strong> {{ $visit->date }}</li>
    <li><strong>Time:</strong> {{ $visit->time }}</li>
    <li><strong>Message:</strong> {{ $visit->message }}</li>
</ul>

<p>
    <a
    href="{{ route('accept.visit', ['id' => $visit->id]) }}"
    style="
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    "
>
    Accept Visit
</a>

</p>





</ul>

</body>
</html>