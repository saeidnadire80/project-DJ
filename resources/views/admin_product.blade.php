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
            <th>name_product</th>
            <th>price</th>
            <th>discount_price</th>
            <th>color</th>
            <th>description</th>
            <th>Weight</th>
            <th>plan</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product['name_product']}}</td>
            <td>{{$product['price']}}</td>
            <td>{{$product['discount_price']}}</td>
            <td>{{$product->description[0]['color']}}</td>
            <td>{{$product->description[0]['description']}}</td>
            <td>{{$product->description[0]['weight']}}</td>
            <td>{{$product->description[0]['plan']}}</td>
            <td><a href="{{route('edit_product',$product['id'])}}" class="text-success">edit</a></td>
            <td><a href="#" class="text-danger">delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

