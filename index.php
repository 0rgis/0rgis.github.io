<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="assets/src/script.js"></script>
</head>

<body>

<?php include('assets/inc/header.php'); ?>

<div style="overflow:auto">
  <!-- <div class="menu"> -->
    <!-- orig menu links -->
    <!-- <a href="#">Link 1</a> -->
    <!-- <a href="#">Link 2</a> -->
    <!-- <a href="#">Link 3</a> -->
    <!-- <a href="#">Link 4</a> -->
    <!-- end links -->
  <div class="left">
    <h2>Our Sponsors</h2>
    <marquee><a href="https://pentest-tools.com"><img src="assets/img/pentools.svg" alt="pentest-tools" style="width:100;height:60px;"></a></marquee>
  </div>

  <div class="main">
    <iframe id="contentFrame" src="https://hackxpert.com" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="right";style="border-radius:10px">
    <h2>Resources</h2>
    <a href="https://portswigger.net">Portswigger</a><br><br>
    <a href="https://labs.hackxpert.com/cybersecurity_news.html">Cybersecurity news</a>
  </div>
</div>
<!-- <div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© copyright thexssrat.com</div> -->
<div style="border-radius:10px;border-style:solid;border-width:1px;border-color:blue;background-color:black;text-align:center;padding:5px;margin-top:7px;">© copyright thexssrat.com</div>

<?php
#include('assets/inc/footer.php');
?> 

</body>
</html>