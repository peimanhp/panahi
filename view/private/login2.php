<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>وب سایت شخصی عارفه پناهی</title>

    <link rel="stylesheet" href="/panahi/assets/css/style.css" />
    <link rel="stylesheet" href="/panahi/assets/css/style.css" />
    <link href="/panahi/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link href="/panahi/assets/css/splide.min.css" rel="stylesheet">
</head>

<body class="body-login">
    <div class="desktop-view">
        <div class="login-wrapper">
            <section class="container sms-wrapper">
                <form class="form-sms mx-auto mt-4" action="#">
                    <h1 class="text-center login-title">تایید رمز</h1>
                    <div class="row mb-3">
                        <div class="col-6 d-flex justify-content-end"><button class="btn btn-red btn-resend">ارسال مجدد</button></div>
                        <div class="col-6"><input class="input input-time" type="text" value="120 ثانیه" disabled></div>
                    </div>
                    <input class="input input-code mb-3" type="text" placeholder="کد دریافتی 4 رقمی">
                    <button class="btn btn-red btn-sms mb-3">ادامه</button>
                    <p>شماره را اشتباه وارد کردید؟ <a class="red-link" href="#">ویرایش شماره</a></p>
                </form>
            </section>
            <section class="girl-wrapper">
                <img class="" src="/panahi/assets/img/girl-login.svg" alt="">
            </section>
        </div>
    </div>
    <div class="mobile-view">
        <section class="position-relative">
            <img class="red-circle-login" src="/panahi/assets/img/red-circle.svg" alt="">
            <img class="girl-photo" src="/panahi/assets/img/girl-login.svg" alt="">
        </section>
        <section class="container">
            <form class="form-sms mx-auto" action="#">
                <h1 class="text-center login-title">تایید رمز</h1>
                <div class="row mb-3">
                    <div class="col-6 d-flex justify-content-end"><button class="btn btn-red btn-resend">ارسال مجدد</button></div>
                    <div class="col-6"><input class="input input-time" type="text" value="120 ثانیه" disabled></div>
                </div>
                <input class="input input-code mb-3" type="text" placeholder="کد دریافتی 4 رقمی">
                <button class="btn btn-red btn-sms mb-3">ادامه</button>
                <p>شماره را اشتباه وارد کردید؟ <a class="red-link" href="#">ویرایش شماره</a></p>
            </form>
        </section>
    </div>

    <script type="module" src="/panahi/assets/js/main.js"></script>
    <script src="/panahi/assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="/panahi/assets/js/splide.min.js"></script>
</body>
</html>