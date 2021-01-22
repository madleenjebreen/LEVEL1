<?php
require_once("includes/connect.php");
require_once("admin/production/functions/getallnurmal.php");

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="rtl">
   <head>
     <meta charset="utf-8">
     <title> لمسات يدوية</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap-rtl.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/Snapshot.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <link rel="icon" href="img/g1.png" type="img/g1.png" sizes="30x30">
   <link rel="stylesheet" href="css/swiper.css">
   </head>
   <body>
     <!-- منطقة رأس اول اشي بالموقع  -->
     <div class="ho" style="background-color:#3c3c3c;text-aling:center;height:50px;">
       <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#3c3c3c;">

         <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link" href="indx.php" style="color:#fff;border-left:" id="qq">الصفحة الرئيسية</a>
             </li>
             <li>
             <li class="nav-item active">
               <li class="nav-item">
        <a class="nav-link" href="Producers.php" style="color:#fff;border-left:" id="qq">قصص المنتجين</a>
               </li>

 <?php
 if(!isset($_SESSION['userID'])){

  ?>
               <li class="nav-item dropdown">
                 <a class="nav-link" href="login.php" style="color:#fff;border-left:" id="qq">تسجيل الدخول</a>

                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link" href="tuser.php" style="color:#fff;border-left:" id="qq">تسجيل</a>

                   </li>
                 <?php }else {
               ?>
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown"data-toggle="dropdown"  href="login.html" style="color:#fff;border-left:"id="qq" >اهلا وسهلا بك  <?php echo $thisuser['userNmae'] ;?> </a>

                     </li>
                     <li class="nav-item dropdown">
                       <a class="nav-link" href="logout.php" style="color:#fff;border-left:" id="qq">تسجيل الخروج </a>
                       </li>

 <?php } ?>

             <!-- <li class="nav-item">
               <a class="nav-link" href="callus.html" style="color:#fff;border-left:" id="qq">تواصل معنا</a>
             </li>


             <li class="nav-item">
               <a class="nav-link" href="we.html" style="color:#fff;border-left:" id="qq">من نحن</a>
             </li> -->

         </div>
       </nav>
     </div>

    <!-- منطقة العنوان وعربة والبحث -->
    <div class="head" style="background-color:#fff;border-bottom: 1px solid #ddd;">
      <nav class="navbar navbar-light  justify-content-between">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <a href="#">
              <img src="img/hag.png" alt="" style="width=30px;height:30px;" id="a1">
              </a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <a href="#">
              <img src="img/hared.png" alt="" style="width=30px;height:30px;" id="a1">
              </a>

            </a>
          </li>
        </ul>
        <a href="indx.html">
    <a class="navbar-brand" id="m" style="color:#000;">
<!-- <img src="img/lansat.jpg" alt="" style="width:490px;height:200px;"> -->
<!-- <h1 style="color:#fd79a8">لمسات يدوية</h1> -->
<img src="img/logo.jpg" alt="" style="width:200px;height:60px;">
     </a>
  </a>
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" style="border:1px solid #fd79a8;" placeholder="ماذا تريد أن تبحث؟" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="bah" style="border:1px solid #fd79a8;">بحث</button>
        </form>
      </nav>
    </div>
    <!-- منطقة الاقسام  -->
  <div class="nav" style="height:50px;border-bottom:1px solid #000" >
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link " href="Normal.html" id="pp">منتجات طبيعية</a>
      </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown" data-toggle="dropdown" href="#" id="pp">الاكسسورات والمجوهرات</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Accessories.html"  id="gg">اكسسورات الصبايا</a>
              <a class="dropdown-item" href="Mirrors.html"  id="gg">مرايا</a>
              <a class="dropdown-item" href="Mobile.html"  id="gg">أغطية جوال</a>
              <a class="dropdown-item" href="#"  id="gg">مداليات</a>
              <a class="dropdown-item" href="#"  id="gg">ألعاب الأطفال</a>


            </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" data-toggle="dropdown" href="#" id="pp">زينة و ديكور المنزل</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#" id="gg">أدوات مطبخ</a>
                  <a class="dropdown-item" href="#" id="gg">كماليات المنزل</a>
                </div>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown" data-toggle="dropdown" href="#" id="pp">اكلات و حلويات شعبية</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#" id="gg">حلويات</a>
          <a class="dropdown-item" href="#" id="gg">معجنات </a>
          <a class="dropdown-item" href="#" id="gg">اكلات شعبية</a>
        </div>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown" data-toggle="dropdown" href="#" id="pp">الملابس والحقائب</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" id="gg">ملابس نسائية</a>
              <a class="dropdown-item" href="#" id="gg">ملابس الأطفال</a>
              <a class="dropdown-item" href="#" id="gg">حقائب </a>
              <a class="dropdown-item" href="#" id="gg">أوشحة وكوفية</a>
              <a class="dropdown-item" href="#" id="gg">نسيج</a>


            </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" data-toggle="dropdown" href="#" id="pp">توزيعات</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#" id="gg">توزيعات  أفراح</a>
                  <a class="dropdown-item" href="#" id="gg">توزيعات ميلاد</a>

              </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" data-toggle="dropdown" href="#" id="pp">مواد تجميل</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" id="gg">خاصة بالبشرة</a>
                      <a class="dropdown-item" href="#" id="gg">خاصة بالشعر</a>
                      <a class="dropdown-item" href="#" id="gg">أدوات الزينة</a>

                    </div>

  </ul>
  </div>
  <br><br>
<!-- منطقة العروض -->
<div class="container">
  <div class="row">
    <?php

    while($prodect=mysqli_fetch_assoc($getallnurmalus)){

     ?>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <img src="admin/production/images/<?php echo $prodect['normalimg']; ?>" alt="" class="img-fluid" style="width:220px;height:180px;"></a>

          <div class="card-body" >
            <a href=> <p class="card-text" style="text-align:right;" id="o2"><?php echo $prodect['normalName']; ?></p></a>
            <p class="card-text" style="text-align:right;" id="oo"><?php echo $prodect['nnormalde']; ?></p>
            <p class="card-text" style="text-align:right;" id="oo"><?php echo $prodect['normalpas']; ?>₪</p>

          </div>
        </div>
      </div>

      <?php

      } ?>

      </div>
    </div>
</div>
</div>
<br><br><!-- منطقة <footer></footer> -->
<br><br><br>
<div class="footor" style="background-color:#191919;width:100%">
  <!-- Footer -->
  <footer class="page-footer font-small stylish-color- pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left" style="">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->

        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:#fff;text-align:right;">التصنيفات</h5>

          <ul class="list-unstyled"style="text-align:right;">
            <li>
              <a href="#!" id="f">&#8827; هدايا</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; منتجات طبيعية</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; أكلات شعبية</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; الملابس والحقائب</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"style="color:#fff;text-align:right;">معلومات </h5>

          <ul class="list-unstyled"  style="text-align:right;">
            <li>
              <a href="#!" id="f">&#8827; عن السوق</a>
            </li>
            <li>
              <a href="#!"id="f" >&#8827; انشئ متجرك الخاص</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; تواصل معنا</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; الاسئلة الاكثر تكراراً</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; شروط الخدمة</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; سياسة الخصوصية</a>
            </li>
            <li>
              <a href="#!"id="f">&#8827; الشحن</a>
            </li>
            <li>
              <a href="#!"id="f"  >&#8827; سياسة الارجاع</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:#fff;text-align:right;">تواصل معنا</h5>

          <ul class="list-unstyled"style="text-align:right;">
            <li>
              <p id="ff" style="color:#fff;"> سوق كراكيب عبارة عن منصة لبيع منتجات فريدة من نوعها ومميزة جميع المنتجات صنعت من قبل حرفيين كراكيب</p>

            </li>
            <li>
              <p id="f">  &#128222; 050316085</p>

            </li>
            <li>

              <p id="f"> &#127760;Madleenjebreen@gmail.com</p>

            </li>

          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
</div>
<div class="footor2"style="background-color:#111111;" >
  <!-- Footer -->
  <footer class="page-footer font-small special-color- pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f">
  <a href="#"><img src="img/fac.png" alt="" style="width:30px;height:30px;"></a>
             </i>
          </a>
        </li>


        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
              <a href="#"><i class="fab fa-linkedin-in"><img src="img/int.png" alt="" style="width:50px;height:50px;" id="cq"></a>
 </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble">
              <a href="#">  <i class="fab fa-linkedin-in"><img src="img/wa.png" alt="" style="width:36px;height:36px;" id="cq"></a>
</i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble">
            <a href="#"></a>  <i class="fab fa-linkedin-in"><img src="img/yo.png" alt="" style="width:47px;height:36px;" id="cq"></a>
</i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->


    <!-- Footer -->
    <footer class="page-footer font-small mdb-color darken-3 pt-4">

      <!-- Footer Elements -->
      <div class="container">

        <!--Grid row-->
        <div class="row d-flex justify-content-center">

          <!--Grid column-->
          <div class="col-md-6">

            <!-- Video -->
            <div class="embed-responsive embed-responsive-16by9 mb-4">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=ecqDA3XrD60"
                allowfullscreen></iframe>
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center ">

        <p style="text-align:center;color:#fff;" id="fff">© جميع الحقوق محفوظة لموقع سوق كراكيب</p>
        <p style="text-align:center;color:#fff;" id="fff">برمجة:مادلين الجبارين</p>

      </div>

      <!-- Copyright -->

    </footer>
    <!-- Footer -->



</div>
</div>
</div>

  </head>
  <body>

  </body>
</html>
