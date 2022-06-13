<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading" style="text-shadow: 2px 2px 5px #777;">
        <span class="nero__bold">About</span> us
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" style="margin-top:10px"><!-- box Starts -->

<?php

$get_about_us = "select * from about_us";

$run_about_us = mysqli_query($con,$get_about_us);

$row_about_us = mysqli_fetch_array($run_about_us);

$about_heading = $row_about_us['about_heading'];

$about_short_desc = $row_about_us['about_short_desc'];

$about_desc = $row_about_us['about_desc'];

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #f46892;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us - Our Story</h1>
  <h4>S3.SkinMe, Your Best SkinCare Platform</h4>
  <p>Welcome to S3.SkinMe, your number one source for all skincare products.
    We're dedicated to providing you the very best of platform for skincare, with an
    emphasis on affordable local skincare products, free skin consultation service, low delivery charges and guaranteed authenticity.
    Founded in 2022 by Syafiqa, Sarah and Suraiya, S3.SkinMe has come a long way from
    its beginnings in course SIM4208-1. When Syafiqa, Sarah and Suraiya first started
    out, their passion for user-friendly skincare platform drove them to start their own business.
We hope you enjoy our products as much as we enjoy offering them to you.
If you have any questions or comments, please don't hesitate to contact us.
<br><br>
<em><b>Sincerely - Syafiqa, Sarah and Suraiya</em></b></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/pika.jpg" alt="Syafiqa" style="width:100%">
      <div class="container">
        <h2>Syafiqa (202422)</h2>
        <p class="title">Founder & Developer</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/syafiqa.jpeg" alt="Sarah" style="width:100%">
      <div class="container">
        <h2>Sarah (202376)</h2>
        <p class="title">Founder & Developer</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/suraiya.jpeg" alt="Suraiya" style="width:100%">
      <div class="container">
        <h2>Suraiya (204233)</h2>
        <p class="title">Founder & Developer</p>
      </div>
    </div>
  </div>
</div>

</body>

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->




<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
