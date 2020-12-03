<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>
<body>
    <div style="text-align: center">
        <h1>Classes</h1>
        <br>
        @foreach ($classes as $class)
        <p>{{ $class->classname }} <a href="{{ route('singleclass',[$class->id]) }}">See The Class Members</a> </p>
        @endforeach
    </div>
</body>
</html>