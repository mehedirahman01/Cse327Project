<<<<<<< HEAD
@extends('layouts.app')
@section('content')



<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Online Pharmacy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <form class="navbar-form navbar-right" action="">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search medicines">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/images/med2.jpg" style="width: 50%; height: 60%;" alt="Image">
        <div class="carousel-caption">
          <h3>get your daily need medicines at 10% discount</h3>
          <p>Save Money</p>
        </div>      
      </div>
      <div class="item">
        <img src="/images/med.jpg" style="width: 50%; height: 60%" alt="Image">
        
        <div class="carousel-caption">
          <h3>Get Vitamins at 25% discount</h3>
          <p></p>
        </div>      
      </div>
      
      <div class="item">
        <img src="/images/doctor.jpg" style="width: 50%; height: 60%" alt="Image">
        
        <div class="carousel-caption">
          <h3>Need Doctors? </h3>
          <p>Coming soon..</p>
        </div>      
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br>
<br>
<br>
<div class="container"> 
    
    
  <div class="row">
      
      
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Our top selling products</div>
        <div class="panel-body"><img src="/images/med3.jpg" class="img-responsive" style="width:100%; height:30%" alt="Image"></div>
        
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Best Deal</div>
        <div class="panel-body"><img src="/images/med4.jpg"" class="img-responsive" style="width:100%; height:30%" alt="Image"></div>
        
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Offered products</div>
        <div class="panel-body"><img src="/images/med5.jpg"" class="img-responsive" style="width:100%; height:30%" alt="Image"></div>
       
      </div>
    </div>
  </div>
</div><br>
<br>
<br>
<br>


<footer class="container-fluid text-center">
  <p>Online Pharmacy Copyright</p>  
  
</footer>
<br>
<br>


</body>
=======
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    LARAVEL 2020
  </body>
>>>>>>> master
</html>
