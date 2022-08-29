<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@guest()
    <h2 style="text-align:center">Product Card</h2>
@endguest
@auth()
    @include('layouts.comment',['comments' => \App\Models\Question::query()->where('approved',true)->get(),'id_product' => $_GET['id_product']])
@endauth
</body>
</html>
