
<?php require_once $_SERVER['DOCUMENT_ROOT']."/pizza/media/include/header.php"; ?>
<br><br><br>
<div class="home-heading-div">
    <h1 class="home-heading">
      Ab's Pizza
    </h1>
</div>
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">    
      <div class="item active">
      <img src="media/images/banner/banner-1.jpg" alt="off" style="width:100%;">
    </div>

    <div class="item">
      <img src="media/images/banner/banner-2.jpg" alt="Chicago" style="width:100%;">
    </div>
  
    <div class="item">
      <img src="media/images/banner/banner-3.jpg" alt="New york" width="1140" height="325">
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 

    </body>
</html>