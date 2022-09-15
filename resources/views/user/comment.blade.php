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
<p>comment</p>
<form action="form/send" method="POST">
    @csrf
    <input class="rating rating--nojs" max="5" step="1" name="star" type="range">
    <input type="hidden" name="id_product" value="{{$id_product}}">
    <input type="text" name="title" id="title">
    <input type="text" name="positive_points" id="">
    <input type="text" name="cons" id="">
    <input type="text" name="comment" id="">
    <input type="radio" name="Unknown" value="Unknown">
    @error('comment')
    {{$message}}
    @enderror
    <input type="submit">
</form>
</body>
</html>
