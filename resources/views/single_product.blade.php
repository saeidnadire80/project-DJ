<?php
$i=$product->comments->where('approved',true);
    $avr=$i->avg('Score');
    $sum=$i->sum('Score');


    ?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/product.css">
      <!-- Latest compiled and minified CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/all.css">
    <link rel="icon" type="image/x-icon"
      href="https://www.digikala.com/logo192.png">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>product introduction</title>
  </head>
  <body>
    <body class="">
      <!--=========================================== navbar ============================================-->
      <div class="container-fluid cont-fix ">
        <section class="header-nav product.pag">
          <div class="row"><img src="/img/top-header-img.jpg" alt=""></div>
          <div class="row pt-3 ">
            <div class="col-lg-1 col-12 d-flex justify-content-center"><a
                href="#"><img class="px-3 py-2" src="/img/logo.svg"
                  alt=""></a></div>
            <div class="col-md-5 col-6">
              <div class="input-group ">
                <input type="search" class="form-control
                  rounded-3 border-0 pb-md-3" id="search-form" placeholder="
                  جستجو"
                  aria-label="Search" aria-describedby="" />
              </div></div>

            <div class="col-md-6 col-6 d-flex justify-content-end ">

              <a class="text-black fw-bold text-decoration-none login-btn
                text-center
                rounded-3 justify-content-center align-content-center px-md-3
                py-md-2"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi
                  bi-box-arrow-in-left ms-1 mt-2 me-3 d-none d-sm-inline"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0
                    0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0
                    .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1
                    0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0
                    12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1
                    11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                    <path fill-rule="evenodd" d="M4.146
                      8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1
                      .708.708L5.707 7.5H14.5a.5.5 0 0 1 0
                      1H5.707l2.147 2.146a.5.5 0 0
                      1-.708.708l-3-3z"/>
                    </svg>
                    <span class="ps-1">ورود</span>
                    <span class="d-none d-lg-inline"> | ثبت نام</span>
                  </a>
                  <i class="bi bi-cart px-3 mx-4 mt-2 icon-shop fw-bolder"></i>
                </div>

              </div>

              <div class="row pt-4 position-sticky">
                <div class=" col-xl-10 col-md-12 col-4">
                  <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">

                      <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse"
                        id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <p class="nav-item nav-link text-dark fw-bolder "><i
                              class="ps-2 fa-thin fa-bars d-none d-lg-inline"></i>دسته
                            بندی کالاها</p>
                          <a class="nav-item nav-link " href="#"> <i class="ps-2
                              fa-thin fa-basket-shopping-simple"></i>سوپرمارکت</a>
                          <a class="nav-item nav-link " href="#"><i class="ps-2
                              fa-thin fa-fire-flame-curved"></i>پرفروش ترینها</a>
                          <a class="nav-item nav-link " href="#"><i class="ps-2
                              fa-thin fa-percent"></i>تخفیفها و پیشنهادها</a>
                          <a class="nav-item nav-link " href="#"><i class="ps-2
                              fa-thin fa-badge-percent"></i>شگفت انگیزها </a>
                          <a class="nav-item nav-link " href="#">سوالی دارید؟</a>
                          <a class="nav-item nav-link " href="#">فروشنده شوید</a>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
                <div class="col-8 col-xl-2 col-md-12 d-flex
                  justify-content-center
                  align-content-end justify-content-md-end">
                  <ul>
                    <li class="list-unstyled"><a class="text-decoration-none
                        text-nav " href="#"><i class="fa-thin fa-location-dot "></i>لطفا
                        شهر خود را وارد کنید</a></li>
                  </ul>
                </div>
              </div>
            </section>
            <hr>
          </div>
          <!--============================= navbar text-muted==================================-->
          <div class="container-fluid">
            <section class="py-3 product.pag">
              <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-wrap flex-lg-nowrap
                  justify-content-center justify-content-lg-start">
                  <a class="text-decoration-none text-muted ps-3 " href=""><p>دیجی
                      کالا</p> </a>
                  <a class="text-decoration-none text-muted ps-3 " href=""><p>\
                      خانه و آشپزخانه</p> </a>
                  <a class="text-decoration-none text-muted ps-3 " href=""><p> \
                      لوازم خانگی و برقی</p> </a>
                  <a class="text-decoration-none text-muted ps-3 " href=""><p>\
                      نوشیدنی ساز</p> </a>
                  <a class="text-decoration-none text-muted ps-3 " href=""><p>\
                      آب
                      مرکبات گیر</p> </a>
                </div>
                <div class="col-lg-6 d-none d-lg-flex justify-content-end">
                  <a class="text-decoration-none text-muted ps-3 d-flex "
                    href=""><p
                      class="ps-3">ثبت آگهی در پیندو</p><i class="fa-thin
                      fa-megaphone"></i> </a>
                  <a class="text-decoration-none text-muted ps-3 d-flex "
                    href=""><p
                      class="ps-3"> فروش در دیجی کالا </p><i class="fa-light
                      fa-shop"></i></a>

                </div>
              </div>
            </section>
            <!--==================================== product select ==============================-->
            <section class="p-3">
              <div class="row d-flex flex-row">
                <!--============================================ part1 ======================================-->
                <div class="col-lg-4 col-12 d-flex
                  mt-2 d-flex flex-column">
                  <div class="row1 d-flex">
                    <div class="col-1 d-flex flex-column justify-content-start">
                      <i class="fa-light fa-heart fw-bolder h3 "></i>
                      <i class="fa-solid fa-share-nodes fw-bolder h3 revers"></i>
                      <i class="fa-light fa-bell fw-bolder h3 "></i>
                      <i class="fa-light fa-chart-line fw-bolder h3 "></i>
                      <i class="fa-light fa-compress-wide fw-bolder h3 "></i>
                      <i class="fa-light fa-list fw-bolder h3 "></i>
                    </div>


                    <div class="col-11 mt-2 img-product-pad">
                      <a href="#">
                        <img class="img-fluid" src="/img/product select1.jpg"
                          alt="">
                      </a>
                    </div>
                  </div>
                  <!--=== row2 ==-->
                  <div class="row2 d-flex">
                    <a class="p-3 m-2 rounded-4 border" href="#"><img
                        class="img-fluid" src="/img/selected-negetiv1.jpg"
                        alt=""></a>
                    <a class="p-3 m-2 rounded-4 border" href="#"><img
                        class="img-fluid" src="/img/selected-negativ2.jpg"
                        alt=""></a>
                    <a class="p-3 m-2 rounded-4 border" href="#"><img
                        class="img-fluid" src="/img/selected-negetiv1.jpg"
                        alt=""></a>
                    <a class="p-3 m-2 rounded-4 border" href="#"><img
                        class="img-fluid" src="/img/selected-negetiv3.jpg"
                        alt=""></a>
                  </div>
                  <div class="row3"><a href="#" class="text-decoration-none
                      text-muted"><i
                        class="fa-light fa-circle-info pt-3 ps-2 "></i>گزارش
                      نادرستی مشخصات</a></div>
                </div>

                <!--================================== ===========part2 =======================================-->
                <div class="col-lg-5 col-12">
                  <a href="#" class="text-decoration-none text-info">ساتیا <span
                      class="text-danger px-2 span1">/</span>آب مرکبات گیر ساتیا</a>
                  <p class="h3 py-2 border-bottom">آب مرکبات گیر ساتیا مدل
                    CJS-4045</p>
                  <p class="h3 pt-4">رنگ: سفید</p>
                  <div class="d-flex">
                    <div class="form-check px-4">
                      <input type="radio" class="form-check-input h1 "
                        id="radio1"
                        name="optradio" value="option1" checked>
                    </div>
                    <div class="form-check px-4">
                      <input type="radio" class="form-check-input h1 "
                        id="radio2"
                        name="optradio" value="option2">

                    </div>
                  </div>
                  <p class="py-4 h3">ویژگی‌ها</p>
                  <ul class="border-bottom">
                    <li class="h5"><span class="text-muted">جنس بدنه :</span>
                      استیل</li>
                    <li class="h5"><span class="text-muted"> محفظه :</span>
                      محفظه ی تیغه</li>
                    <li class="h5"><span class="text-muted">امکانات :</span>
                      تفکیک قطعات</li>
                  </ul>
                  <div class="d-flex d-none d-lg-inline"><i
                      class="fa-light fa-circle-info pt-3 ps-2 "></i>
                    <p>درخواست مرجوع کردن کالا در گروه آب مرکبات گیر با دلیل
                      "انصراف
                      از خرید" تنها در صورتی قابل تایید است که کالا در شرایط
                      اولیه
                      باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).

                    </p></div>
                  <div class="d-flex justify-content-between border rounded">
                    <div class="m-2"><p class="h3">ارسال رایگان</p>
                      <p class="text-muted">برای سفارش‌ بالای ۵۰۰ هزار تومان</p></div>
                    <div class="m-2">
                      <img src="/img/img 2 in product select.svg" alt="">
                    </div>
                  </div>

                </div>
                <!--================================================== part3 =======================================-->
                <div class="col-lg-3 col-12 bg-lg-white mt-4 ">
                  <div class=" mt-5 rounded-4 p4-pruduct-select">
                    <div class="m-4">
                      <p class="h3 ">فروشنده</p>
                      <div class="">
                        <a href="#" class="text-decoration-none text-dark d-flex
                          p-2">
                          <i class="fa-light fa-shop ps-3"></i>
                          <p class="lead">بازرگانی شاکری </p>
                        </a>
                        <a href="#" class="text-decoration-none text-muted
                          me-4">عملکرد
                          <span class="text-warning">خیلی خوب</span></a>
                        <hr>
                      </div>
                      <p class="pt-3"><i class="fa-light fa-shield-check ps-3"></i>گارانتی
                        ۱۸ ماهه سیما</p>
                      <hr>
                      <div>
                        <a href="#ّ" class="text-decoration-none text-dark
                          d-flex
                          justify-content-between">

                          <p class="d-flex"><i class="fa-light
                              fa-list-dropdown ps-2"></i>موجود
                            در انبار فروشنده</p>
                          <i class="fa-light fa-chevron-left text-muted"></i>
                        </a>
                        <a href="#" class="text-decoration-none text-muted"><i
                            class="fa-light fa-user-tie text-danger"></i>
                          ارسال فروشنده</a>
                      </div>
                      <hr>
                      <div class="coin"><a href="#" class=" text-decoration-none
                          text-dark"><i class="fa-light
                            fa-coin-front text-warning ps-3"></i>150 امتیازدیجی
                          کلاب<i
                            class="fa-light fa-circle-info pe-2 text-muted"></i></a>
                        <hr>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted"><i
                            class="fa-light fa-circle-info ps-2 "></i>قیمت
                          فروشنده</p>
                        <p class="h3 fw-normal span1">3500000 تومان</p>
                      </div>
                      <div class=" d-flex justify-content-center pb-1"> <a
                          href="#" class="btn btn-danger bascketbtn">افزودن به
                          سبد</a></div>

                    </div>
                  </div>
                  <div class="py-3 d-flex justify-content-end"><a href="#"
                      class="text-muted">قیمت بهتری سراغ دارید؟<i
                        class="fw-bolder fa-thin fa-tag"></i></a></div>
                  <div class="border rounded-2">
                    <a href="#" class="d-flex align-content-center
                      justify-content-between pt-2">
                      <p class=" text-dark"><i
                          class="fa-light fa-circle-info text-muted px-2"></i>فرایند
                        قیمت گذاری و نظارت بر قیمت</p>
                      <i class="fa-light fa-chevron-left text-muted ps-1 pt-2"></i></a>
                  </div>
                </div>
              </div>
              <hr>
            </section>
            <!--=========================== Facilities Goods امکانات کالا-===================-->
            <section>
              <div class="row py-4">

                <!-- =====delivery express تحویل اکسپرس===-->
                <div class="col text-center"><a href="#" class="text-muted"><i
                      class="fa-light fa-truck-fast"></i>امکان تحویل اکسپرس</a></div>
                <!-- ========== suport 24 hours 24ساعته ========-->
                <div class="col text-center"><a href="#" class="text-muted"><i
                      class="fa-light fa-headset"></i>24ساعته ,هفت روز هفته</a></div>
                <!-- ==========cash-on-delivery پرداخت در محل========-->
                <div class="col text-center"><a href="#" class="text-muted"><i
                      class="fa-light fa-money-check-pen">پرداخت در محل</i></a></div>
                <!-- ==========days-return هفت روز ضمانت بازگشت=======-->
                <div class="col text-center"><a href="#" class="text-muted"><i
                      class="fa-light fa-calendar"></i>هفت روز ضمانت بازگشت کالا</a></div>
                <!-- ==========original-product اصل بودن کالا=======-->
                <div class="col text-center"><a href="#" class="text-muted"><i
                      class="fa-thin fa-calendar-week"></i>اصل بودن کالا</a></div>
              </div>
              <hr>
            </section>
            <section>
              <div class="container-fluid">
                <div class="border rounded-3">
                  <div class="row1">
                    <p class="fw-bold pe-4 pt-3">کالاهای مشابه</p>
                  </div>
                  <div class="row2">
                    <div class="owl-carousel">
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4"> <img src="/img/product12.jpg"
                            alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a></div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>
                      <div style="max-width:158px ;" class="border-end d-flex
                        justify-content-center">
                        <div class="pe-4">
                          <img src="/img/product12.jpg" alt="">
                          <a href="#" class="text-dark ps-2">
                            <p>آب مرکبات گیری پارس خزر مدل Limonade
                            </p>
                            <p class="text-danger">تنها یک عدد در انبار باقی
                              مانده</p>
                            <div class="d-flex justify-content-between"><span
                                class="badge badge-pill badge-danger">20%</span><p
                                class="fw-bolder span1">تومان120000</p></div>
                            <p class="text-start text-muted "><del
                                class="span1">71000</del></p>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </section>
            <!--=============================مشخصات دیدگاه  پرسش===========================-->
            <div class=" d-flex pt-4 pb-2">
              <a href="#Specifications" class="text-dark px-3">مشخصات</a>
              <a href="#View" class="text-dark px-3">دیدگاهها</a>
              <a href="#Questions" class="text-dark px-3">پرسشها</a>

            </div>
            <hr>
            <section id="Specifications">
              <div class="row ">

                <div class="col-lg-3 d-flex flex-column justify-content-between
                  border-bottom">
                  <div><p class="fw-bolder px-2">مشخصات</p>
                    <div style="height:4px; width:80px; background-color: red;"></div>
                    <p class="pt-5">مشخصات</p>
                  </div>
                  <a href="#" class="text-decoration-none text-info
                    h5 fw-bolder ">مشاهده ی
                    بیشتر<i class="fa-thin fa-angle-left"></i></a>
                </div>
                <div class="col-6 d-flex pt-5 border-bottom ">
                  <div class="text-muted">
                    <p class="Specifications-c6">ابعاد</p>
                    <p class="Specifications-c6">بازه توان دستگاه</p>
                    <p class="Specifications-c6">جنس صافی</p>
                    <p class="Specifications-c6">نحوه عملکرد</p>
                    <p class="Specifications-c6">امکانات شست‌وشوی لوازم <br>
                      جانبی در ماشین ظرفشویی</p>
                  </div>
                  <div class="pe-5">
                    <p class="Specifications-c6">۳۶x۳۰x۱۹ سانتی‌متر</p>
                    <p class="Specifications-c6">۱۵۱ تا ۲۰۰

                    </p>
                    <p class="Specifications-c6">پلاستیک</p>
                    <p class="Specifications-c6">اهرم فشاری

                    </p>
                    <p class="Specifications-c6">قابلیت شست‌وشوی لوازم جانبی در
                      ماشین ظرفشویی

                    </p>
                  </div>


                </div>

                <div class="col-lg-3">
                  <div class=" rounded-4 p4-pruduct-select basket-posi">
                    <div class="m-4">
                      <p class="h3 ">فروشنده</p>
                      <div class="">
                        <a href="#" class="text-decoration-none text-dark d-flex
                          ">
                          <i class="fa-light fa-shop ps-3"></i>
                          <p class="lead">بازرگانی شاکری </p>
                        </a>
                      </div>
                      <p class="pt-3"><i class="fa-light fa-shield-check ps-3"></i>گارانتی
                        ۱۸ ماهه سیما</p>

                      <div>
                        <p class="text-decoration-none text-dark
                          d-flex
                          justify-content-between">

                          <p class="d-flex"><i class="fa-light
                              fa-list-dropdown ps-2"></i>موجود
                            در انبار فروشنده</p>
                          <i class="fa-light fa-chevron-left text-muted"></i>
                        </p>
                        <p class="text-decoration-none text-muted"><i
                            class="fa-light fa-user-tie text-danger"></i>
                          ارسال فروشنده</p>
                      </div>


                      <div class="d-flex justify-content-end">

                        <p class="h3 fw-normal span1">3500000 تومان</p>
                      </div>
                      <div class=" d-flex justify-content-center pb-1"> <a
                          href="#" class="btn btn-danger bascketbtn">افزودن به
                          سبد</a></div>

                    </div>
                  </div>
                </div>
              </div>

            </section>

            <!--====================================== دیدگاهها =================================-->
            <section id="View">
              <div class="views">
<div class="row d-flex">
                  <div class="col-12 col-lg-3 sticky posi border-bottom">
                  <p class="fw-bolder pe-3 pt-4">دیدگاه ها</p>
                  <div style="height:4px; width:80px; background-color: red;"></div>



                    <div>
                        <p class="text-muted">{{$avr}}از5</p>
                        @if($avr == 1 || $avr == 0.5)
                            <i>&#11088;</i>
                            <i class="fa fa-star rating-color rat"></i>
                            <i class="fa fa-star rating-color rat"></i>
                            <i class="fa fa-star rating-color rat"></i>
                            <i class="fa fa-star rating-color rat"></i>
                        @elseif($avr == 1.5||$avr == 2)
                            <i>&#11088;&#11088;</i>
                            <i class="fa fa-star rating-color rat"></i>
                            <i class="fa fa-star rating-color rat"></i>
                            <i class="fa fa-star rating-color rat"></i>

                        @elseif($avr == 2.5||$avr == 3)
                            <i>&#11088;&#11088;&#11088;</i>
                            <i class="fa fa-star rating-color rat"></i>
                            <i class="fa fa-star rating-color rat"></i>

                        @elseif($avr == 3.5||$avr == 4)
                            <i>&#11088;&#11088;&#11088;&#11088;</i>
                            <i class="fa fa-star rating-color rat"></i>

                        @elseif($avr == 4.5||$avr == 5)
                            <i>&#11088;&#11088;&#11088;&#11088;&#11088;</i>
                        @endif
                        <i> از مجموع {{$sum}}امتیاز </i>

                      <p class="pt-5">ایمنی</p>
                      <div class="progress px-2 mx-2" style="height: 15px;">
                        <div class="progress-bar rounded text-bg-info"
                          role="progressbar" style="width: 75%"
                          aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <p>کارایی</p>
                      <div class="progress px-2 mx-2" style="height: 15px;">
                        <div class="progress-bar rounded text-bg-info"
                          role="progressbar" style="width: 75%"
                          aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <p>طراحی</p>
                      <div class="progress px-2 mx-2" style="height: 15px;">
                        <div class="progress-bar rounded text-bg-info"
                          role="progressbar" style="width: 75%"
                          aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <p>ارزش خرید</p>
                      <div class="progress px-2 mx-2" style="height: 15px;">
                        <div class="progress-bar text-bg-info rounded"
                          role="progressbar" style="width: 75%"
                          aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>
                    <p class="text-muted pt-5">شما هم درباره ی این کالا دیدگاه
                      ثبت کنید</p>
                      @guest()
                          <input style="width:auto;" type="button" value="ثبت دیدگاه" onclick="comment()">
                      @endguest
                      @auth()
                      <a onclick="document.getElementById('comment').style.display='block'" style="width:auto;" href="{{route('comment',[$product->id])}}">ثبت دیدگاه</a>
                      @endauth
                    <p class="text-muted"><i
                        class="fa-light fa-circle-info pt-3 ps-2 "></i>۵ امتیاز
                      دیجی‌کلاب
                      پس از تایید نظر، با مراجعه به صفحه‌ی ماموریت‌های کلابی
                      امتیاز خود را دریافت کنید.</p>
                  </div>
                  <!-- <hr class="d-none d-lg-inline"> -->
                  <div class="col-12 col-lg-6 me-5">
                    <div class="ttr">
                      <!--=============== دیدگاههاو تصاویر ارسالی مشتریان =============-->
                      <p><i class="fa-light fa-thumbs-up text-success "></i>۹۱%
                        (۴۰) نفر از خریداران، این کالا را پیشنهاد کرده اند
                        <i class="fa-light fa-circle-info pt-3 ps-2 "></i></p>
                      <div class="d-flex">
                        <a href="#" class="m-1"><img style="width:5rem"
                            class="card-img border p-3 rounded-4"
                            src="/img/product12.jpg" alt=""></a>
                        <a href="#" class="m-1"><img style="width:5rem"
                            class="card-img border p-3 rounded-4"
                            src="/img/product12.jpg" alt=""></a>
                        <a href="#" class="m-1 d-none d-md-inline"><img style="width:5rem"
                            class="card-img border p-3 rounded-4"
                            src="/img/product12.jpg" alt=""></a>
                        <a href="#" class="m-1 d-none d-md-inline"><img style="width:5rem"
                            class="card-img border p-3 rounded-4"
                            src="/img/product12.jpg" alt=""></a>
                      </div>
                      <div class="pb-3">
                        <a href="#" class="text-info fw-bold">مشاهده ی همه</a>
                      </div>
                      <hr>
                    </div>
                    <div class="d-none d-md-flex"><i class="fa-light fa-list-ul"></i>
                      <p class="fw-bold px-3">مرتب سازی بر اساس </p>
                      <a href="#" class="text-danger">جدیدترین</a>
                      <a href="#" class="text-muted px-3">مفیدترین</a>
                      <a href="#" class="text-muted">دیدگاه خریداران</a>
                    </div>
                      @foreach($product->comments->where('approved',true) as $item)
                    <div class="pt-3 d-flex">
                      <p class="badge bade-sucsessg">@if(!$item->Score == 0)<span class=" span1
                          text-white p-2 fw-bolder">{{$item->Score}}</span>@endif</p>
                      <p class="text-muted span1 px-3">{{\Morilog\Jalali\Jalalian::forge($item->created_at)->format('%A %d %B %y')}}

                      </p>
                        @if(!$item->Unknown)
                      <p class="text-muted ">{{$item->user->name}}

                      </p>
                        @else<p class="text-muted ">کاربر دیجی کالا

                        </p>
                        @endif
                        @if(!$item->Purchase_status == 0)
                            <p class="text-muted ">خریدار

                            </p>
                        @endif
                    </div>

                    <hr>
                    <div class="comm ">
                      <p class="text-dark">{{$item->comment}}</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                      <p class="text-muted ps-5">آیا این دیدگاه مفید بود؟</p>

                      <a href="#" class="text-muted"><i class="fa-light
                          fa-thumbs-up px-2"></i></a>
                      <p><span class="span1 px-1">4</span></p>
                      <a href="#" class="text-muted"> <i class="fa-light
                          fa-thumbs-down px-2"></i></a>
                      <p><span class="span1 px-1">0</span></p>
                    </div>
                      @endforeach
                    <hr>
                    <hr>
                  </div>
                </div>
                </div>
            </section>
            <!--====================== پرسشها =======================-->
            <section id="Questions">
                @guest()
                    <input style="width:auto;" type="button" value="ثبت سوال" onclick="question()">
                @endguest
                @auth()
                    <a onclick="document.getElementById('question').style.display='block'" style="width:auto;" href="{{route('question',[$product->id])}}">ثبت سوال</a>
                @endauth
              <p class="px-2">پرسشها</p>
              <div style="height:4px; width:80px; background-color: red;"></div>
              <div class="p-5 ">
                <p>درباره این کالا چه پرسشی دارید؟</p>
                <div class="col-10">
                  <form action="#">
                    <textarea name="massage" id="" style="width:96% ;"></textarea>
                    <div class="d-flex justify-content-between">
                      <p class="text-lead">ثبت پاسخ به معنی موافقت با<a href="#"
                          class="text-info">قوانین انتشار دیجی‌کالا</a> است.</p>
                      <input type="button" class="
                        text-white mt-2 ms-5" value="ثبت پرسش">
                    </div>

                  </form>
                </div>
              </div>
                <div class="d-none d-md-flex"><i class="fa-light fa-list-ul"></i>
                    <p class="fw-bold px-3">مرتب سازی بر اساس </p>
                    <a href="#" class="text-danger">جدیدترین</a>
                    <a href="#" class="text-muted px-3">مفیدترین</a>
                    <a href="#" class="text-muted">دیدگاه خریداران</a>
                </div>
                @foreach($product->question->where('approved',true) as $item)
                    <hr>
                    @if($item->Question)
                    <div class="comm ">
                        <p class="text-dark">{{$item->Question}}</p>
                    </div>
                    @foreach($product->question->where('approved',true)->where('parent_id',$item->id) as $i)
                        <div class="comm ">
                            <p class="text-dark">پاسخ:{{$i->answer}}</p>

                        </div>
                        <div class="pt-3 d-flex">
                            <p class="text-muted ">{{$i->user->name}}
                            </p>
                        </div>
                            <div class="d-flex justify-content-end">
                                <p class="text-muted ps-5">آیا این دیدگاه مفید بود؟</p>


                                <a href="#" class="text-muted"><i class="fa-light
                          fa-thumbs-up px-2"></i></a>
                                <p><span class="span1 px-1">4</span></p>
                                <a href="#" class="text-muted"> <i class="fa-light
                          fa-thumbs-down px-2"></i></a>
                                <p><span class="span1 px-1">0</span></p>
                            </div>
                    @endforeach
                            @guest()
                                <input style="width:auto;" type="button" value="ثبت پاسخ ->" onclick="answer()">
                            @endguest
                            @auth()
                        <a onclick="document.getElementById('answer').style.display='block'" style="width:auto;" href="{{route('question.answer', [$product->id,$i->id])}}">جواب</a>
                            @endauth

                        <hr>
                    <hr>
                    @endif
                @endforeach
                <hr>
                <hr>
            </section>
          </div>

          <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
          <script src="https://kit.fontawesome.com/aaa6b9c8c0.js"
            crossorigin="anonymous"></script>
          <script src="/js/scriptproduct.js"></script>
      <script>
        // Get the modal
        var comment_form = document.getElementById('comment');

// When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == comment_form) {
                comment_form.style.display = "none";
            }
        }
        var question_form = document.getElementById('question');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == question_form) {
                question_form.style.display = "none";
            }
        }

        var answer_form = document.getElementById('answer');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == answer_form) {
                answer_form.style.display = "none";
            }
        }
        function comment() {
            window.location.assign("http://localhost:8000/register")
        }
        function question() {
            window.location.assign("http://localhost:8000/register")
        }
        function answer() {
            window.location.assign("http://localhost:8000/register")
        }

      </script>
        </body>
      </html>
