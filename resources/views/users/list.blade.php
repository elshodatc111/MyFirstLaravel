<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usersss</h1>
    <ol>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach

        @foreach($plans as $plan)
            <li>{{$plan}}</li>
        @endforeach
    </ol>
</body>
</html>