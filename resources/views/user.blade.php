<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tokoku</title>
    <link rel="stylesheet" href="{{asset('css/user-style.css')}}">
    <link rel="icon" href="https://pbs.twimg.com/profile_images/1831456038098198528/jAnQxBc3_400x400.jpg">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h1>User Profile</h1>
        </div>
        <div class="wrapper">
            <h4>ID : {{$id}}</h4>
        </div>
        <div class="wrapper">
            <h4>Nama: {{$name}}</h4>
        </div>
    </div>
</body>
</html>