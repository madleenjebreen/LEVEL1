<?php session_start();
if(isset( $_SESSION['userID'])){ // عشان اذا مش مسجل عادي اعرض
  require_once("admin/production/functions/getAlltuser.php");
} ?>
<?php
require_once("includes/connect.php");
require_once("admin/production/functions/getallprodection.php");

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
  <div class="nav" style="height:50px;" >
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link " href="Normal.php" id="pp">منتجات طبيعية</a>
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
  <!-- منطقة الصور المتحركة -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/ci.gif" alt="First slide" style="height:400px;">
      <div class="carousel-caption d-none d-md-block">
        <p style="" id="p1">موقعنا الأكثر تميزاً</p>
        <p  id="p2">في مكان واحد ,تجد كل الأعمال اليدوية المتميزة </p>
        <a href="#"> <button type="button" class="btn btn-danger" id="po" style="background-color:#; margin-right: 150px;" >معلومات أكثر</button>

      </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/as.png" alt="Second slide" style="height:400px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/ci.gif" alt="Third slide" style="height:400px;">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<!-- الحدود -->
<center>


<br><br>





<p id="p4">أفضل العروض لدينا</p>
</center>

<div class="container">
  <div class="row">
    <?php

    while($prodect=mysqli_fetch_assoc($getallprodectsilat)){

     ?>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <img src="admin/production/images/<?php echo $prodect['imgProdect']; ?>" alt="" class="img-fluid" style="width:220px;height:180px;"></a>

          <div class="card-body" >
        <a href="prodectr.php?IDprodect=<?php echo $prodect['IDprodect'];?>"> <p class="card-text" style="text-align:right;" id="o2"><?php echo $prodect['nameProdect']; ?></p></a>
            <p class="card-text" style="text-align:right;" id="oo"><?php echo $prodect['pProdect']; ?></p>
            <p class="card-text" style="text-align:right;" id="oo"><?php echo $prodect['sProdect']; ?>₪</p>

          </div>
        </div>
        </a>
      </div>
<?php

} ?>
<br>
<br>
<center>

<br><br>
<center>
<p id="p4">منتجات مميزة لدينا</p>
</center>

<div class="container">
  <div class="row">
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/o9.png" alt="Card image" style="width:220px;height:180px;"></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2">فواصل</p></a>
            <p class="card-text" style="text-align:right;" id="oo">فواصل صور بكافة الأشكال وحسب ذوق الزبون</p>

          </div>
        </div>
        </a>
      </div>

      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/w1.png" alt="Card image" style="width:220px;height:180px;"></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2">إيمان ملحم</p></a>
            <p class="card-text" style="text-align:right;" id="oo">صنع المخلل البلدي بجميع أصنافه</p>

          </div>
        </div>
        </a>
      </div>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/w2.png" alt="Card image" style="width:220px;height:180px;"></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2">صابون طبيعي</p></a>
            <p class="card-text" style="text-align:right;" id="oo">مجموعة من قطع الصابون الطبيعي بمواد طبيعية </p>

          </div>
        </div>
        </a>
      </div>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/w3.png" alt="Card image" style="width:220px;height:180px;" id="mom"  ></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2"> تراثي</p></a>
            <p class="card-text" style="text-align:right;" id="oo">صواني الشاي والقهوة المصنوعة من الخزف والخشب </p>

          </div>
        </div>
        </a>
      </div>
</div>
<br>
<br>
<center>
<p id="p4">أجدد المنتجات لدينا</p>
</center>

<div class="container">
  <div class="row">
    <div class="col" >
      <a href="#"></a>
      <div class="card" style="width:220px;height:340px;">
      <a href="#">  <img class="card-img-top" src="img/w4.png" alt="Card image" style="width:220px;height:180px;"></a>
      <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

        <div class="card-body" >
      <a href="#"><p class="card-text" style="text-align:right;" id="o2">لين</p></a>
          <p class="card-text" style="text-align:right;" id="oo">كوفية الأسود والأبيض مزينة بزهور الكروشيه</p>

        </div>
      </div>
      </a>
    </div>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/w6.png" alt="Card image" style="width:220px;height:180px;"></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2">نجمة</p></a>
            <p class="card-text" style="text-align:right;" id="oo">رسم على الأكواب كافة الأشكال برسم اليدوي بكل دقة وأبداع </p>

          </div>
        </div>
        </a>
      </div>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/w7.png" alt="Card image" style="width:220px;height:180px;"></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2">أكياسي</p></a>
            <p class="card-text" style="text-align:right;" id="oo">اكياس حفظ الطعام من القماس المناسب للخضروات والفواكه  </p>

          </div>
        </div>
        </a>
      </div>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:220px;height:340px;">
        <a href="#">  <img class="card-img-top" src="img/w8.png" alt="Card image" style="width:220px;height:180px;" id="mom"  ></a>
        <a href="#"><img src="img/har.png" alt="" style="width:20px;height:20px;" id="qw"></a>

          <div class="card-body" >
        <a href="#"><p class="card-text" style="text-align:right;" id="o2"> دق ع الخشب</p></a>
            <p class="card-text" style="text-align:right;" id="oo">إعادة تدوير الخشب بكل ما هو مفيد ومناسب للمنزل في كافة المجالات</p>

          </div>
        </div>
        </a>
      </div>
</div>
</div></div>
</div></div></div></div></div></div>




<br><br>


<div class="img">
<div class="container1">
  <img src="img/mad.jpg" alt="Snow" style="width:100%;">
    <p style="text-align:center;margin-top:-190px;color:#fff;" id="al" > المتجر الأول على مستوى فلسطين لتسويق العمل اليدوي</p>
    <p style="text-align:center;:color:#fff;" id="al">إنضم إلى متجرنا وقم بتسويق عملك اليدوي في كافة المناطق الفلسطينية </p>
    <button type="button" class="btn btn-warning"style="text-align:center;margin-top:-10px;margin-left:600px;background-color:"id="ak" >انشئ متجرك الأن</button>

    </button>

</div>
</div>
<br><br>
<br>
<center>
<div class="mobdian">
<p  id="uu">تعرف على البائعين المبدعين على سوق</p>
<div class="d-inline-block g-width-35 g-height-2 text-center g-bg-primary mb-2"></div>
<p  id="u1">القصة وراء منتجاتنا </p>
</center>
</div>
<div class="container">
  <div class="row">
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:260px;height:250px;">
        <a href="#">  <img class="card-img-top" src="img/ja.png" alt="Card image" style="width:260px;height:250px;"></a>

          <div class="card-body" >
        <p class="card-text" style="text-align:right;" id="o22">لمسة إبرة</p>

          </div>
        </div>
        </a>
      </div>
      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:260px;height:250px;">
        <a href="#">  <img class="card-img-top" src="img/dg.jpg" alt="Card image" style="width:260px;height:250px;"></a>

          <div class="card-body" >
        <p class="card-text" style="text-align:right;" id="o22">الدق ع الخشب</p>

          </div>
        </div>
        </a>
      </div>

      <div class="col" >
        <a href="#"></a>
        <div class="card" style="width:260px;height:250px;">
        <a href="#">  <img class="card-img-top" src="img/ka.png" alt="Card image" style="width:260px;height:250px;"></a>

          <div class="card-body" >
        <p class="card-text" style="text-align:right;" id="o22">الخيط الذهبي</p>

          </div>
        </div>
        </a>
      </div>

</div></div>
</div></div>
</div></div>
<br>
<button type="button" class="btn btn-outline-danger"style="margin-left:20px" id="vv">المزيد من العروض</button>
<br>




<!-- منطقة <footer></footer> -->
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

      </div>

      <!-- Copyright -->

    </footer>
    <!-- Footer -->



</div>
</div>
</div>

  </body>
</html>
