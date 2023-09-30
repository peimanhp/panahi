<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>وب سایت شخصی عارفه پناهی</title>

  <link rel="stylesheet" href="/panahi/assets/css/courses.css" />
  <link href="/panahi/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link href="/panahi/assets/css/splide.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav dir="rtl" class="navbar navbar-expand-lg navbar-red">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/panahi/index.php"><img class="logo" src="/panahi/assets/img/logo-white.svg" alt="logo" /></a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">لوگو</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/panahi/index.php">صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-active" href="/panahi/view/public/courses.php">دوره ها</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">بلاگ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">درباره من</a>
              </li>
            </ul>
            <form class="d-flex position-relative align-items-center" role="search">
              <input class="form-control me-2 search-bar" type="search" placeholder="جست و جو ..." aria-label="Search" />
              <button class="btn btn-outline-none search-btn" type="submit">
                <img src="/panahi/assets/img/search-white.svg" alt="" />
              </button>
            </form>
          </div>
        </div>
        <div>
          <button class="btn">
            <img src="/panahi/assets/img/bag-2-white.svg" alt="" />
          </button>
          <a href="/panahi/view/public/login.php" class="btn btn-dark-red">ورود / ثبت نام</a>
        </div>
      </div>
    </nav>
  </header>

  <section class="first-section">
    <div class="container my-5 text-center">
      <h1 class="my-5 text-light page-title">دوره های آموزشــــــی</h1>
    </div>
  </section>
  <section class="second-section container mb-5">
  <div class="px-3">
        <h3 class="courses-title mt-5 mb-4 ">دوره های آموزشی</h3>
        <p class="courses-content">
          لورم ایپسوم متن ساختگی با تولید
          سادگی نامفهوم ازصنعت چاپ و با استفاده
          از طراحان گرافیک است.
        </p>        
      </div>
    <div class="row row-gap-4">      
      <div class="col col-12 col-md-6 px-5">
        <div class="d-flex justify-content-center">
          <div class="course-card-content">
            <img class="slider-img" src="/panahi/assets/img/product-sample.png" alt="package-img">
            <div class="d-flex align-items-center gap-1">
              <img src="/panahi/assets/img/profile-circle.svg" alt="author">
              <p class="mb-0">مدرس: عارفه پناهی</p>
            </div>
            <h3 class="course-name">دوره آموزشی شماره یک</h3>
            <h4 class="price">4.000.000 تومان</h4>
            <button class="btn btn-red">مشاهده</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-6 px-5">
        <div class="d-flex justify-content-center">
          <div class="course-card-content">
            <img class="slider-img" src="/panahi/assets/img/product-sample.png" alt="package-img">
            <div class="d-flex align-items-center gap-1">
              <img src="/panahi/assets/img/profile-circle.svg" alt="author">
              <p class="mb-0">مدرس: عارفه پناهی</p>
            </div>
            <h3 class="course-name">دوره آموزشی شماره یک</h3>
            <h4 class="price">4.000.000 تومان</h4>
            <button class="btn btn-red">مشاهده</button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script type="module" src="/panahi/assets/js/main.js"></script>
  <script src="/panahi/assets/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="/panahi/assets/js/splide.min.js"></script>
</body>

</html>