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
<div id="question" class="modal">
    <form class="modal-content animate" action="" method="post">
        @csrf
        <label for="answer"><b>question</b></label>
        <input type="text" placeholder="Enter question" name="question">
        <input type="hidden" name="id_product" value="{{$product->id}}">
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
