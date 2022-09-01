@foreach($categories as $category)
    <div>
        {{$category}}
    </div>
    <div>
        @include('categrories',['categrories'=>$category->child])
    </div>
@endforeach
