<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-rtl.css" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>bootstrap</title>
  </head>
  <body>
    <nav class="navbar sticky-top bg-white navbar-expand-md navbar-light p-0">
      <div class="d-flex align-items-center">
        <a href="#" class="navbar-brand bg-light m-0 py-3 px-5"
          >پنل مدیریت راکت</a
        >
        <span
          class="oi oi-menu mr-4"
          data-toggle="collapse"
          data-target="#sidebar"
        ></span>
      </div>

      <div class="collapse navbar-collapse justify-content-between">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="#" class="nav-link">داشبورد</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">اعضا</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">تنظیمات</a>
          </li>
        </ul>

        <div class="ml-3">
          <button type="button" class="btn btn-sm btn-primary">
            ایمیل های جدید <span class="badge badge-light">9</span>
          </button>
          <button type="button" class="btn btn-sm btn-success">
            نظرات جدید <span class="badge badge-light">9</span>
          </button>
          <button type="button" class="btn btn-sm btn-danger">
            خروج <span class="badge badge-light">9</span>
          </button>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div
          class="col-12 col-md-2 bg-dark text-light collapse show"
          id="sidebar"
        >
          <div class="py-2">منو اصلی</div>
          <ul class="nav flex-column px-3">
            <li class="nav-item d-flex align-items-center">
              <span class="oi oi-dashboard"></span>
              <a href="#" class="nav-link my-1 w-100">داشبورد</a>
            </li>
            <li class="nav-item">
              <div class="d-flex align-items-center">
                <span class="oi oi-book"></span>
                <a
                  href="#"
                  class="nav-link my-1 w-100 collapsed"
                  data-toggle="collapse"
                  data-target="#articlesSubmenu"
                  >مقالات
                  <span class="oi oi-chevron-left float-left"></span>
                </a>
              </div>
              <div class="collapse" id="articlesSubmenu">
                <ul class="nav px-3">
                  <li class="nav-item">
                    <a href="#" class="nav-link my-1 w-100">مشاهده همه</a>
                  </li>
                  <li class="nav-item w-100">
                    <a
                      href="#"
                      class="nav-link my-1 w-100 collapsed"
                      data-toggle="collapse"
                      data-target="#articlesSubmenu2"
                      >ارسال مقاله
                      <span class="oi oi-chevron-left float-left"></span>
                    </a>
                    <div class="collapse" id="articlesSubmenu2">
                      <ul class="nav px-3">
                        <li class="nav-item">
                          <a href="#" class="nav-link my-1 w-100"
                            >مقاله کوتاه</a
                          >
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link my-1 w-100">مقاله بلند</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item d-flex align-items-center">
              <span class="oi oi-video"></span>
              <a href="#" class="nav-link my-1 w-100">دوره ها</a>
            </li>
          </ul>
          <div>متفرقه</div>
          <ul class="nav flex-column px-3">
            <li class="nav-item d-flex align-items-center">
              <span class="oi oi-person"></span>
              <a href="#" class="nav-link my-1 w-100">اعضا</a>
            </li>
              <li class="nav-item w-100">
                  <a
                      href="#"
                      class="nav-link my-1 w-100 collapsed"
                      data-toggle="collapse"
                      data-target="#articlesSubmenu2"
                  >نظرات
                      <span class="oi oi-chevron-left float-left"></span>
                  </a>
                  <div class="collapse" id="articlesSubmenu2">
                      <ul class="nav px-3">
                          <li class="nav-item">
                              <a href="{{ route('admin.comment') }}" class="nav-link my-1 w-100"
                              >نظر ها</a
                              >
                          </li>
                          <li class="nav-item">
                              <a href="{{route('admin.question')}}" class="nav-link my-1 w-100">سوال ها</a>
                          </li>
                      </ul>
                  </div>
              </li>
            </li>
            <li class="nav-item d-flex align-items-center">
              <span class="oi oi-dashboard"></span>
              <a href="#" class="nav-link my-1 w-100">تنظیمات</a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-md-10 mr-md-auto p-4 bg-light" id="main">
          <div class="card-deck">
            <div class="card text-white bg-success mb-3">
              <div class="card-header">
                <h4>75200</h4>
                <p class="card-text blockquote-footer text-white">
                  اعضای ثبت نام کرده
                </p>
              </div>
              <div class="card-body p-0">
                <canvas
                  class="w-100"
                  height="100%"
                  id="registeredUsers"
                ></canvas>
              </div>
            </div>
            <div class="card text-white bg-primary mb-3">
              <div class="card-header">
                <h4>75200</h4>
                <p class="card-text blockquote-footer text-white">
                  اعضای ثبت نام کرده
                </p>
              </div>
              <div class="card-body p-0"></div>
            </div>
            <div class="card text-white bg-warning mb-3">
              <div class="card-header">
                <h4>75200</h4>
                <p class="card-text blockquote-footer text-white">
                  اعضای ثبت نام کرده
                </p>
              </div>
              <div class="card-body p-0"></div>
            </div>
            <div class="card text-white bg-dark mb-3">
              <div class="card-header">
                <h4>75200</h4>
                <p class="card-text blockquote-footer text-white">
                  اعضای ثبت نام کرده
                </p>
              </div>
              <div class="card-body p-0"></div>
            </div>
          </div>

          <div
            class="d-flex justify-content-between align-items-center my-3 border-bottom pb-2"
          >
            <h1 class="h2">داشبورد</h1>
            <div class="btn-toolbar">
              <div class="btn-group ml-2">
                <button class="btn btn-sm btn-outline-secondary">
                  اشتراک گذاری
                </button>
                <button class="btn btn-sm btn-outline-secondary">
                  خروجی گرفتن
                </button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                این هفته
              </button>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h5>آمار بازدید</h5>
            </div>
            <div class="card-body"></div>
            <div class="card-footer">
              <div class="row">
                <div class="text-center col-md-3">
                  <h5>همه بازدید ها</h5>
                  <p><strong>23600 بازدید (40%)</strong></p>
                  <div class="progress">
                    <div
                      class="progress-bar bg-warning"
                      style="width: 40%"
                    ></div>
                  </div>
                </div>
                <div class="text-center col-md-3">
                  <h5>بازدیدهای یکتا</h5>
                  <p><strong>23600 بازدید (10%)</strong></p>
                  <div class="progress">
                    <div
                      class="progress-bar bg-primary"
                      style="width: 10%"
                    ></div>
                  </div>
                </div>
                <div class="text-center col-md-3">
                  <h5>صفحات بازدید شده</h5>
                  <p><strong>23600 بازدید (30%)</strong></p>
                  <div class="progress">
                    <div
                      class="progress-bar bg-success"
                      style="width: 30%"
                    ></div>
                  </div>
                </div>
                <div class="text-center col-md-3">
                  <h5>نرخ برش</h5>
                  <p><strong>23600 بازدید (80%)</strong></p>
                  <div class="progress">
                    <div
                      class="progress-bar bg-danger"
                      style="width: 80%"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center my-4">
            <h1 class="h2">آخرین مقالات</h1>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr class="table-secondary">
                  <th>عنوان مقالات</th>
                  <th>تعداد نظرات</th>
                  <th>مقدار بازدید</th>
                  <th>تنظیمات</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                  </td>
                  <td>0</td>
                  <td>30</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary">ویرایش</button>
                      <button class="btn btn-sm btn-danger">حذف</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
