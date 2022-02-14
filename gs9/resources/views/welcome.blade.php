<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Home page</h1>
        <hr>
        @php
            $desc = "Card Descripton 1";
        @endphp
        <x-card title="Card Title 1" sub-title='Card SubTitle 1' :description=$desc />

        <x-card title="Card Title 2" sub-title='Card SubTitle 2' :description=$desc />
</body>
</html>