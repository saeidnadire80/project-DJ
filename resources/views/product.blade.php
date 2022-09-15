<?php
use App\Models\Product;
?>
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

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
        </tr>
        @foreach(Product::all() as $item)
        <tr>
            <td><?= $item->price ?></td>
            <td>
                <form action="single/product" method="get">
                    @csrf
                    <input type="hidden" name="id_product" value="<?=$item->id?>">
                    <input type="submit" value="send">
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
