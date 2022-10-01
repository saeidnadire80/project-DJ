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
<div id="answer" >
    <form class=" animate" action='' method="post">
        @csrf
        <div class="imgcontainer">
            <p class="me-4">به این پرسش پاسخ دهید

            </p><p class="me-4">{{$question->Question}}

            </p>
            <br>
            <i class="fa-light fa-xmark px-5"></i>

            <hr>
        </div>
        <div class="container">
            <textarea name="answer" type="text"class="w-100 pb-5 rounded-4">{{old('answer')}}</textarea>
            <hr>
            <input type="submit" class="btn btn-light py-4" value="ثبت پاسخ">
        </div>
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
