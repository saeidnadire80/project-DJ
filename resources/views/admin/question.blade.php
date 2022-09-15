<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet" />
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap-rtl.css"/>
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <title>Document</title>
</head>
<body>
<form action="">
    <input type="hidden" name="approved" value="approved">
    <button type="submit">تایید نشده ها</button>
</form>
<form action="">
    <input type="text" placeholder="search..." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr class="table-secondary">
            <th>آیدی</th>
            <th>آیدی کاربر</th>
            <th>آیدی والد</th>
            <th>آیدی مدل</th>
            <th>مدل</th>
            <th>سوال</th>
            <th>جواب</th>
            <th>تایید شده</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question as $item)
            <tr>
                <td>
                    {{$item->id}}
                </td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->parent_id}}</td>
                <td>{{$item->commentable_id}}</td>
                <td>{{$item->commentable_type}}</td>
                <td>{{$item->Question}}</td>
                <td>{{$item->answer}}</td>
                <td>@if($item->approved == 0)
                        <form action="{{route('update_approved_question')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="submit" value="تایید">
                        </form>@else {{$item->approved}}  @endif</td>
                <td>
                    <div class="btn-group">
                        <form action="{{route('delete_question')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
    crossorigin="anonymous"
></script>
<script src="js/holder.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
