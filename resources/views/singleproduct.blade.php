<?php
    $a=\App\Models\comment::query()->where('confirmation',1);
    foreach ($a->get() as $item)
        echo $item->comment;
    exit();
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
<style>
    .rating {
        --dir: right;
        --fill: gold;
        --fillbg: rgba(100, 100, 100, 0.15);
        --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
        --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
        --stars: 5;
        --starsize: 3rem;
        --symbol: var(--star);
        --value: 1;
        --w: calc(var(--stars) * var(--starsize));
        --x: calc(100% * (var(--value) / var(--stars)));
        block-size: var(--starsize);
        inline-size: var(--w);
        position: relative;
        touch-action: manipulation;
        -webkit-appearance: none;
    }
    [dir="rtl"] .rating {
        --dir: left;
    }
    .rating::-moz-range-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
    }
    .rating::-webkit-slider-runnable-track {
        background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--symbol);
        -webkit-mask: repeat left center/var(--starsize) var(--symbol);
    }
    .rating::-moz-range-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
    }
    .rating::-webkit-slider-thumb {
        height: var(--starsize);
        opacity: 0;
        width: var(--starsize);
        -webkit-appearance: none;
    }
    .rating, .rating-label {
        display: block;
        font-family: ui-sans-serif, system-ui, sans-serif;
    }
    .rating-label {
        margin-block-end: 1rem;
    }

    /* NO JS */
    .rating--nojs::-moz-range-track {
        background: var(--fillbg);
    }
    .rating--nojs::-moz-range-progress {
        background: var(--fill);
        block-size: 100%;
        mask: repeat left center/var(--starsize) var(--star);
    }
    .rating--nojs::-webkit-slider-runnable-track {
        background: var(--fillbg);
    }
    .rating--nojs::-webkit-slider-thumb {
        background-color: var(--fill);
        box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
        opacity: 1;
        width: 1px;
    }
    [dir="rtl"] .rating--nojs::-webkit-slider-thumb {
        box-shadow: var(--w) 0 0 var(--w) var(--fill);
    }
</style>
<body>
<form action="form" method="post">
    @csrf
    <input class="rating rating--nojs" max="5" step="1" name="star" type="range">
    <input type="hidden" name="id_product" value="<?= $_GET['id_product']?>">
    <input type="text" name="title" id="title">
    <input type="text" name="positive_points" id="">
    <input type="text" name="cons" id="">
    <input type="text" name="comment" id="">
    <input type="radio" name="Unknown" value="Unknown">
    @error('comment')
    {{$message}}
    @enderror
    <input type="submit">
</form>
</div>
</body>
</html>
