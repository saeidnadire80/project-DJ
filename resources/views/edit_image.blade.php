<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>admin_product</h2>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>image</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product->images as $image)
            <tr>
                <td><img src="/image/{{$image['image']}}" width="70px" height="70px"> {{$image['image']}} </td>
                <td><a href="{{route('form_edit_image',$image['id'])}}">edit</a></td>
            </tr>
        @endforeach

        </tbody>

    </table>
    <a href="{{route('add_new_image',$product)}}" style="text-align: center;">add new image</a>
</div>

</body>
</html>
