<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equive="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{csrf_token()}}">
 
<!--Bootstrap Css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!--Jquery CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--Font Awesome-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--Goggle Font-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
<!-- end Goggle Font-->
<!--costom CSS-->
<link rel="stylesheet" href="{{asset('css/style.css') }}" />
<link rel="stylesheet" href="{{asset('css/owl.carousel.css') }}" />
<!--costom JavaScript-->

<script>
  $(document).ready(function(){
        
        //For 1st Course
         $("#show").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#hide").css("display","inline");
         });

          $("#hide").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#show").css("display","inline");
         });

        //2nd First Course
          $("#show2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#hide2").css("display","inline");
         });

          $("#hide2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#show2").css("display","inline");
         });

         //3rd First Course
          $("#show3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#hide3").css("display","inline");
         });

          $("#hide3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#show3").css("display","inline");
         });

        //4th First Course
          $("#show4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#hide4").css("display","inline");
         });

          $("#hide4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#show4").css("display","inline");
         });

         //5th First Course
          $("#show5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#hide5").css("display","inline");
         });

          $("#hide5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#show5").css("display","inline");
         });

        
        //6th First Course
          $("#show6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#hide6").css("display","inline");
         });

          $("#hide6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#show6").css("display","inline");
         });
});

  $(document).ready(function(){
     
     $('.LR').click(function(){
        $('#SignUP').show();
        $('#Login').hide();
     });

     $('.haveaccount').click(function(){
        $('#SignUP').hide();
        $('#Login').show();
     });

     $('.donthaveaccount').click(function(){
        $('#SignUP').show();
        $('#Login').hide();
     });

  });
       
</script>

<style type="text/css">
  .pera
   {
     display: none;
   }
   .pera2
   {
     display: none;
   }
   .pera3
   {
     display: none;
   }
   .pera4
   {
     display: none;
   }
   .pera5
   {
     display: none;
   }
    .pera6
   {
     display: none;
   }
   #hide
   {
     display: none;
   }
   #hide2
   {
     display: none;
   }
   #hide3
   {
     display: none;
   }
   #hide4
   {
     display: none;
   }
   #hide5
   {
     display: none;
   }
   #hide6
   {
     display: none;
   }
 .main
   {
     display: inline;
   }
   .contact{
     height: 250px;
   }
    .footer-section{
      background-color: #000;
      color: #fff;
      height: 300px;
   }
   .footer{
     padding: 40px;
   } 
   .footer-copywrite{
    margin-top: 40px;
   }
   .course-detail{
      margin-top: 70px;
   }
   .course-detail .sec1{
    background-image: url('images/cd.jpg');
    height: 90vh;
    background-repeat: no-repeat;
    width: 100%;
    size: cover;
   }
   .course-detail .sec2 h1{
      color: #000;
      font-weight: bold;
   }
   .course-detail .sec2 p{
      text-align: center;
   }
   .course-detail .container{
     padding:40px;
   }
   .course-detail .container img{
     margin-left: -80px;
     margin-top: 10px;
   }
</style>

<link rel="icon" href="public/images/Versatile.png" type="image/png" sizes="16x16">
<title>VERSATILE</title>
</head>
<body>