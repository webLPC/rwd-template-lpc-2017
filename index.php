<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Las Positas College (LPC)" />
<meta name="keywords" content="Las Positas College, Las Positas, LPC" />
<?php 
define('root', $_SERVER['DOCUMENT_ROOT'] . '/');
define('blogcategory', ' ');
?>
<title>Website Title</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<link href="/files/css/home/base.css" rel="stylesheet" type="text/css" />
<link href="/files/css/home/lpc-bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/page.css" type="text/css" />
<link rel="stylesheet" href="/files/css/navigation/left.css" type="text/css" />

<style type="text/css">

</style>

<link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,400italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

<?php include_once(root . "files/php/ga/googletags.php"); ?>

<!-- HEADER -->

<?php include_once(root . "files/includes/homepage/header.inc"); ?>

<!-- end of HEADER -->

<div class="container">

    <div class="row">

      <!-- Top Navigation -->
      <?php include_once(root . "files/includes/navigation/top.inc"); ?>
      <!-- End Top Navigation -->

      <div class="col-md-3">
        <?php include_once ("left-nav.php"); ?>
      </div>

      <div class="col-md-6 section-content">

        <span id="content-area" class="sr-only sr-only-focusable"></span>

        <h1>Website Title</h1>

        <div class="row">
          
          <div class="col-sm-12 col-md-12 col-lg-12">
            <p>Aliquam ut aliquet ante. Donec in tellus eget nulla malesuada congue. Mauris quam dui, bibendum vel libero tempor, facilisis faucibus mi. In et ante ac dolor mollis viverra at sodales nisi. Aenean interdum eget est finibus cursus. Aenean pretium ipsum interdum, posuere lacus a, condimentum sapien. Suspendisse sit amet nisl tristique arcu iaculis rutrum ac eget diam. Vivamus tortor elit, tincidunt et cursus a, lobortis vitae risus. Aenean ut enim sem.</p>

            <ul class="ul-lpc">
              <li><a href="#">List Item One</a></li>
              <li><a href="#">List Item Two</a></li>
              <li><a href="#">List Item Three</a></li>
            </ul>

          </div>
        </div>
      </div>

      <div class="col-md-3 section-rightbar">

      <?php include_once ("right-sidebar.php"); ?>
        
      </div>

    </div>

</div>


</div>
 
<!-- Start Footer -->

<?php include_once (root . "files/includes/homepage/footer.inc"); ?>

<!-- End Footer--> 

<!-- <div class="container-fluid">
  Current viewport width:<span id="monitor"></span>
</div> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type='text/javascript'>        
$(document).ready(function() {        
  // $('#monitor').html($(window).width());

  // $(window).resize(function() {
  //     var viewportWidth = $(window).width();
  //     $('#monitor').html(viewportWidth);
  // });
  var linkURL = document.location.pathname.match(/[^\/]+$/);

  if(linkURL === null) {
    $("a[href='index.php']").addClass("active"); 
  } else {
    $("a[href='"+linkURL+"']").addClass("active");
  }
});       
</script>

<?php include_once(root . "files/includes/js/js.inc"); ?>

</body>
</html>