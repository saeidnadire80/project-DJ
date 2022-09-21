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
<div id="comment" class="modal">

    <form class="modal-content animate" action="" method="post">
        @csrf
        <label for="comment"><b>comment</b></label>
        <input type="text" placeholder="Enter answer" name="answer">
        <input type="hidden" name="id_product" value="{{$product->id}}">
        <input type="text" name="title" id="title">
        <input type="text" name="positive_points" id="">
        <input type="text" name="cons" id="">
        <input type="text" name="comment" id="" value="{{old('comment','comment')}}">
        <input type="radio" name="Unknown" value="Unknown">
        <button type="submit">send</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>



</div>
</body>
</html>
