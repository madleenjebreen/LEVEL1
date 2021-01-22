<?php
session_start();
if(isset( $_SESSION['userID'])){ // عشان اذا مش مسجل عادي اعرض
  require_once("admin/production/functions/getAlltuser.php");
}
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
                 <a class="nav-link dropdown"data-toggle="dropdown"  href="login.php" style="color:#fff;border-left:"id="qq" >تسجيل الدخول</a>

                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown"data-toggle="dropdown"  href="login.php" style="color:#fff;border-left:"id="qq" >تسجيل </a>

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

 <div class="col-md-8" >
     <form action="admin\production\functions\addtuser.php" method="post" name="form1" id="form1" dir="rtl" enctype="multipart/form-data">
       <table align="center" class="table ">
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">الاسم الكامل</td>
           <td><input class="form-control" required="required"  type="text" name="user_name" value="" size="32" /></td>
         </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">البريد الالكتروني:</td>
           <td><input class="form-control" required="required"  type="text" name="user_email" value="" size="32" /></td>
         </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">كلمة المرور</td>
           <td><input  class="form-control" required="required"  type="password" name="user_password" value="" size="32" /></td>
         </tr>

         <tr valign="baseline">
           <td nowrap="nowrap" align="right">موبايل</td>
           <td><input class="form-control" required="required"  type="text" name="user_tel" value="" size="32" /></td>
         </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">تاريخ الميلاد </td>
           <td><input class="form-control" required="required"  type="date" name="user_date" value="" size="32" /></td>
         </tr>
         <tr valign="baseline">
           <td nowrap="nowrap" align="right">الصورة  </td>
           <td><input class="form-control" required="required"  type="file" name="user_img" value="" size="32" /></td>
         </tr>
 <td>
 <input type="submit" name="" value="ارسال">

 </td>


         </div>
       </div>
     </div>
   </div>
