
@foreach($comments as $item)
    <div class="card">
        <h1>{{$item->comment}}</h1>
        <p>
        <form action="s" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$id_product}}">
            <input type="hidden" name="id" value="{{$item->id}}">

        </form>
        </p>

        @include('layouts.comment',['comments' => $item->child]);
    </div>
@endforeach
