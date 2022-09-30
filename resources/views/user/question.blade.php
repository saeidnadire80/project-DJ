<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/quest-style.css">
    <link rel="icon" type="image/x-icon" href="https://www.digikala.com/logo192.png">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="./fonts/fontawesome/css/all.css">
    <title>qustion</title>
</head>
<body>
    <section>
     <div class="parent p-3">
    <header class="d-flex justify-content-between pt-4">
        <p class="me-4">پرسش خود را درباره ی این کالا ثبت کنید</p>
        <i class="fa-light fa-xmark px-5"></i>

    </header>
    <hr>
<form action="" method="post" class="d-flex flex-column justify-content-center align-content-center">
    @csrf
    <input name="question" type="text"class="w-100 pb-5 rounded-4">
    <input type="hidden" name="id_product" value="{{$product->id}}">
    <hr>
    <input type="submit" class="btn btn-light py-4" value="ثبت پرسش">
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
    </section>
</body>
</html>
