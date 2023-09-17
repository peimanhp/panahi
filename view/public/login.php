<?php include_once '../header.php' ?>

<section class="position-relative">
    <img class="red-circle-login" src="../../assets/img/red-circle.svg" alt="">
    <img class="girl-photo" src="../../assets/img/girl-login.svg" alt="">
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







<?php include_once '../footer.php' ?>