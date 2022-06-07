<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap_html_cut_css/bootstrapWork_pg_login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        /* Snippets Prevent Quick Suggestions close*/

    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div id="login" class="row">

                <div id="login_left" class="col-lg-6">
                    <div id="text-left">
                        <h1>Keep it special</h1>
                        <h3>Capture your personal memory in unique way, anywhere.</h3>
                    </div>
                    <div id="OC-icon" class="d-flex">
                        <div>
                            <i class="bi bi-twitter"></i>
                        </div>
                        <div>
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div>
                            <i class="bi bi-instagram"></i>
                        </div>
                    </div>
                </div>



                <div id="login_right" class="col-lg-6 col-12 d-flex align-items-center">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-center my-3">
                            <img src="{{ asset('Bootstrap_html_cut_image/數位方塊LOGO.png') }}" width="70" alt="">
                            <h1>數位方塊</h1>
                        </div>

                        <div id="fake-icon" class="d-flex justify-content-center align-items-center">
                            <div>
                                <p>f</p>
                            </div>
                            <div>
                                <p>G+</p>
                            </div>
                            <div>
                                <p>in</p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <p style="color: white;">or use email your account</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div id="email-Pass-input">
                                <div class="">
                                    <!-- input變成block的狀態下可以設定Width%數的寬度 -->
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div class="py-4">
                                    <input type="password" name="password" placeholder="Password">
                                </div>


                                <div class="d-flex  justify-content-between mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <input id="remember_me" type="checkbox" name="remember">
                                        <label for="remember_me" style="color: white; width:100px">記住我</label>

                                    </div>
                                    <a href="" style="margin: 0">
                                        <p style="margin: 0">Forgot your password?</p>
                                    </a>
                                    <a href="/register">新註冊</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">Button</button>
                            </div>
                        </form>

                        <div id="OC-icon-2" class="">
                            <div>
                                <i class="bi bi-twitter"></i>
                            </div>
                            <div>
                                <i class="bi bi-facebook"></i>
                            </div>
                            <div>
                                <i class="bi bi-instagram"></i>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- @if (session('NoLogin')) --}}
    @if (session('NoLogin'))
        <script>
            alert("{{ session('NoLogin') }}");
        </script>
    @endif

</body>

</html>
