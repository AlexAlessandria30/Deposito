<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-slot name='title'>
        lavora con noi
    </x-slot>
</head>
<body>
    <h1>Hai ricevuto un nuovo contatto.</h1>
    <p>Di seguito i dati:</p>
    <ul>
        <li>{{$contact['email']}}</li>
        <li>{{$contact['user']}}</li>
        <li>{{$contact['message']}}</li>
    </ul>
</body>
</html>