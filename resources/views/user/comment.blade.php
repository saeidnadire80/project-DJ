<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/comment.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./fonts/fontawesome/css/all.css">
        <link rel="icon" type="image/x-icon"
            href="https://www.digikala.com/logo192.png">
        <title>comment</title>
    </head>
    <body>
        <!-- =====================head & close icon ======================-->
   <div class="container-lg">
    <section>
        <header class="container-fluid pt-3 mx-2 px-3 border-bottom
            position-sticky">
            <div class="row1 d-flex ">
                <div class="col d-flex flex-column">
                    <p class="fw-bolder">دیدگاه شما</p>
                    <p class="text-muted">در مورد آب مرکبات گیر ساتیا مدل
                        CJS-4045</p>
                </div>
                <div class="col d-flex justify-content-end ">
                    <i class="fa fa-window-close "></i>
                </div>
            </div>
        </header>
    </section>


<div class="d-flex border-1 discription">
    <div class="col-6 m-3">
        <form action="" method="post">
            @csrf
        <div class="text-center"><label for="customRange1"
                class="form-label text-center">امتیاز دهید!: <span>عالی</span></label></div>
        <input name="Score" type="range" class="form-range" min="1" max="5"
            step="1" id="customRange1">
            <option value="0"></option>
            <option value="10"></option>
            <option value="20"></option>
            <option value="30"></option>
            <option value="40"></option>

        <p class="h4 me-5">دیدگاه خود را شرح دهید</p>
        <p class="pt-5 h5 me-5">عنوان نظر</p>
        <input type="hidden" name="id_product" value="{{$product->id}}">
        <input type="text" name="title" class="w-75 me-4 py-3 rounded-4
            titl-comment">
        <p class="pt-5 h5 me-5">نکات مثبت</p>
        <input type="text" name="positive_points" class="w-75 me-4 py-3 rounded-4
            titl-comment">
        <p class="pt-5 h5 me-5">نکات منفی</p>
        <input type="text" name="cons" class="w-75 me-4 py-3 rounded-4
            titl-comment">
        <p class="pt-5 h5 me-5">متن نظر<span class="text-danger">*</span></p>
        <input type="tel" name="comment" class="w-75 me-4 py-3 rounded-4
            titl-comment pb-5 d-flex text-end" placeholder="برای ما بنویسید...">
        <div class="d-flex p-4">
            <input type="checkbox" name="Unknown" style="width:20px; height: 20px;"
                class="pe-4"><p class="pe-3 lead">ارسال دیدگاه به
                صورت ناشناس</p>
        </div>
            <input class="col-6 d-flex align-content-center btn btn-danger w-100 py-3" type="submit" value="ثبت دیدگاه">
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
    <div class="col-6 p-4 border rounded-4 mt-3">
<div class=" p-4 ">
<p>دیگران را با نوشتن نظرات خود، برای انتخاب این محصول
    راهنمایی کنید.</p>
<p class="text-info">لطفا پیش از ارسال نظر، خلاصه قوانین زیر را مطالعه کنید:</p>
<p>لازم است محتوای ارسالی منطبق برعرف و شئونات جامعه و با
    بیانی رسمی و عاری از لحن تند، تمسخرو توهین باشد.
    از ارسال لینک‌ سایت‌های دیگر و ارایه‌ی اطلاعات شخصی نظیر
    شماره تماس، ایمیل و آی‌دی شبکه‌های اجتماعی پرهیز کنید.
</p>
<p class="h5 fw-bold">در نظر داشته باشید هدف نهایی از ارائه‌ی نظر درباره‌ی کالا
    ارائه‌ی اطلاعات مشخص و مفید برای راهنمایی سایر کاربران
    در فرآیند انتخاب و خرید یک محصول است.

</p>
<p>
    با توجه به ساختار بخش نظرات، از پرسیدن سوال یا درخواست
    راهنمایی در این بخش خودداری کرده و سوالات خود را در بخش
    «پرسش و پاسخ» مطرح کنید.
</p>
<p class="text-danger fw-bolder">
    افزودن عکس و ویدیو به نظرات:
</p>
<p>با مطالعه‌ی <a href="#" class="text-info">این لینک</a> می‌توانید مفید‌ترین الگوی عکاسی از کالایی که خریداری کرده‌اید را مشاهده کنید.</p>
<p class="text-info">پیشنهاد می‌شود قوانین کامل ثبت نظر را در این <a href="#" class="text-info">صفحه </a> مطالعه کنید.
</p>
<p>
هرگونه نقد و نظر در خصوص سایت دیجی‌کالا، مشکلات دریافت خدمات و درخواست کالا و نیز گزارش تخلف فروش (نظیر گزارش کالای غیراصل یا مغایر) را با ایمیل <a href="#"> info@digikala.com </a> یا با شماره‌ی <a href="#"> ۶۱۹۳۰۰۰۰ - ۰۲۱ </a> در میان بگذارید و از نوشتن آن‌ها در بخش نظرات خودداری کنید.
</p>
</div>
    </div>

</div>
<hr>
<!---================= کلید ثبت دیدگاه===================== -->
<div class="row py-4">

<div class="col-6 d-flex align-content-center text-center justify-content-center py-3"><p>ثبت دیدگاه به معنی موافقت با <a href="#">قوانین انتشار دیجی‌کالا</a> است.</p></div>
</div>
   </div>

    </body>
</html>
