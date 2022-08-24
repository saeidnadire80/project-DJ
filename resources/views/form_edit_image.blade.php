<!doctype html>
<html lang="en">
<head>
    <title>Edit_Product </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-primary" style="
        height: 300px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Add Product</h2>
                    @foreach($errors->all() as $error)
                        <div class="card border-3 text-danger">
                            {{$error}}
                        </div>
                    @endforeach
                    @if(isset($successful))
                        <div class="card border-3">
                            {{$successful}}
                        </div>
                    @endif
                    <form action="{{route('operation_form_edit_image',$image)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <b><p class="card border-4" style="font-size: 20px;">Images</p></b>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <img src="image/{{$image['image']}}">{{$image['image']}}>
                                <label class="form-label" for="form3Example4">edit Image</label>
                                <input type="file" name="image" class="form-control bg-success" >
                            </div>

                            <!-- Submit button -->
                            <!--                        <button type="submit" class="btn btn-primary btn-block mb-4" name="send" value="send">-->
                            <!--                            Sign up-->
                            <!--                        </button>-->
                            <input type="submit" class="bg-primary border-secondary"><br>
                            <!--                        <div class="card bg-primary border-56">-->
                            <!--                            --><?php //$errors=$validation->get_errors() ?>
                                <!--                            --><?php //foreach ($errors as $key=>$item){ ?>
                                <!--                                <h4 style="text-align: left; color: red;">--><?php //echo $key . " " . $item . "<br>"?><!--</h4>-->
                            <!--                            --><?php //}?>
                                <!--                        </div>-->
                            <!--                        --><?php //if (isset($successful)){ ?>
                                <!--                            <div class="card text-success">-->
                            <!--                                --><?php //echo $successful ?>
                                <!--                            </div>-->
                            <!--                        --><?php //} ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->
</body>
</html>
