<!DOCTYPE html>
<!-- saved from url=(0051)job-seekers.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JobInn-Job Directory</title>
 
<link href="css\custom.css" rel="stylesheet" type="text/css">
 
<link href="css\bootstrap.css" rel="stylesheet" type="text/css">
 
<link href="css\color.css" rel="stylesheet" type="text/css">
 
<link href="css\responsive.css" rel="stylesheet" type="text/css">
 
<link href="css\owl.carousel.css" rel="stylesheet" type="text/css">
 
<link href="css\font-awesome.min.css" rel="stylesheet" type="text/css">
 
<link href="css\jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
 
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
 
<link href="css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
    
    
    
    
    
      <?php




$con=mysql_connect("localhost","root","psp1000");
$db=mysql_select_db('easyhire',$con);
if(isset($_GET['signin']))
{
$fname1 = $_GET["uname"];

$pass1  = $_GET["pass"];

echo'<body class="theme-style-1">
 
<div id="wrapper">
 
<header id="header">
 
<div class="cp-burger-nav">
 
<div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><img src="images/menu-icon.png" alt="img"></a></div>
 
 
<div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
<div class="cp-top-bar">
<h4>Welcome to the Portal</h4>

<strong class="logo-2"><img src="images\logo1.png" alt="img"></strong>
<div class="content mCustomScrollbar _mCS_2 mCS_no_scrollbar"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
<div id="content-1" class="content mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
<div class="cp_side-navigation">
<nav>
<ul class="navbar-nav">
<li><a href="">Home</a></li>
<li><a href="showcv.php?loc='.$fname1.'" >Your Resume</a>

</li>

<li><a href="">Find Jobs</a> </li>

<li><a href="">Search Companies</a> </li>

<li><a href="">Edit Resume</a> </li>

</ul>
</nav>
</div>
</div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
</div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><a href="index.html#" class="mCSB_buttonUp" oncontextmenu="return false;"></a><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div><a href="index.html#" class="mCSB_buttonDown" oncontextmenu="return false;"></a></div></div></div>

<strong class="copy">EasyHire © 2016, All Rights Reserved</strong> </div>
 
</div>
 
<div class="container">
 
<div class="navigation-col">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<strong class="logo"><a href="index.html"><img src="images\logo1.png" alt="logo"></a></strong> </div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav" id="nav">








<li><a href="">Home</a>

</li>

    
    
<li><a href="employers.html">Employers</a></li>
<li><a href="jobs.html">Jobs</a>

</li>
    
  



</ul>
</div>
</nav>
</div>
 
</div>';

    

    
    
    
    
    
  




    
    $result = mysql_query("SELECT * FROM clients WHERE username = '$fname1' and Password='$pass1'");
            



if(mysql_num_rows($result)>0)
{
    
    
    echo "<script>alert('Welcome.')</script>";
    
}
else
{
    echo "<script>alert('Sorry, your credentials are not valid, Please try again.')</script>";
echo "<script>window.open('login-client.php','_self')</script>";

}
    
   









    
    



$query=("SELECT photo FROM cvs WHERE username = '$fname1'");
    
    
    $res=mysql_query($query,$con);
    


    
   

while($row=mysql_fetch_array($res)){
        
        
        $photo=$row['photo'];
    
    
    if($photo=='')
    {
    
    
    $photo="images/headshot.jpg";
    
    }
    
}
        
    
    
    
    
    
    
  
    
    
    $query1=("SELECT firstname FROM clients WHERE username = '$fname1'");

$res1=mysql_query($query1,$con);

while($row1=mysql_fetch_array($res1)){
        
        
        $fn=$row1['firstname'];
    
}
    
  echo'  
    <div class="user-option-col">
<div class="thumb">
<div class="dropdown">
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="'.$photo.'" height="60px" width="55px" alt="img"></button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

<li><a href="index.html#">Change Password</a></li>

<li><a href="index.html">Log off</a></li>
</ul>
</div>
</div>



</header>





<section id="inner-banner">
<div class="container">
<h1>Welcome '.$fn.'</h1>
</div>
</section>




<div id="main">
 
<section class="resume-process padd-tb">
<div class="container"> 
<h2>Post your Resume &amp; Apply Online for Jobs in all over the World</h2>
<strong>Create your professional resume with online resume builder and start applying for best jobs in all over the World</strong>
<div class="row">
<div class="col-md-4 col-sm-6"><<a href="cvbuild.php?user='.$fname1.'">
<div class="option-box">
<div class="icon-box icon-colo-1"><i class="fa fa-files-o"></i></div>
<h4>Create Your Resume</h4></a>
<p>Create your professional resume with online resume builder.</p>
</div>
</div>




<div class="col-md-4 col-sm-6"><<a href="view-jobs.php?user='.$fname1.'">
<div class="option-box">
<div class="icon-box icon-colo-2"><i class="fa fa-bell"></i></div>
<h4>Find Jobs</h4></a>
<p>Search and find some potential jobs according to your criteria.</p>
</div>
</div>
<div class="col-md-4 col-sm-6"><<a href="comsearch.php?user='.$fname1.'">
<div class="option-box">
<div class="icon-box icon-colo-3"><i class="fa fa-paper-plane-o"></i></div>
<h4>Search Companies</h4></a>
<p>Search and contact companies that fit your profile and are good for you.</p>
</div>
</div>
</div>
</div>
</section>
 
 
 
</div>


















';
    
    

 
}
    
    
    
  


if(isset($_GET['signup123']))
{
    
    
    
    $con=mysql_connect("localhost","root","psp1000");
$db=mysql_select_db('easyhire',$con);
    
    
$fname1 = $_GET["fname"];
$lname1 = $_GET["lname"];
$uname1 = $_GET["uname"];
$pass1  = $_GET["pass"];
    
    $que=("insert into clients (firstname,Password,username,lastname) VALUES ('$fname1','$pass1','$uname1','$lname1')");
            
        
    
    
    if(mysql_query($que)){
    
    
      $que2=("insert into cvs (username) VALUES ('$uname1')");
        
        $res=mysql_query($que2,$con);
    
    echo "<script>alert('Welcome.')</script>";
    
    }
    
  
    
        
    
    else
{
    echo "<script>alert('Sorry, your credentials are not valid, Please try again.')</script>";
echo "<script>window.open('reg-client.php','_self')</script>";

}
    
   









    
    




    
   

        
        $photo="images/headshot.jpg";

        
    
    
    
  
    
    
    $query1=("SELECT firstname FROM clients WHERE username = '$uname1'");

$res1=mysql_query($query1,$con);

while($row1=mysql_fetch_array($res1)){
        
        
        $fn=$row1['firstname'];
    
}
    
  echo'  
    <div class="user-option-col">
<div class="thumb">
<div class="dropdown">
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="'.$photo.'" height="60px" width="55px" alt="img"></button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a href="index.html#">Manage Account</a></li>
<li><a href="index.html#">Change Password</a></li>
<li><a href="index.html#">Edit Profile</a></li>
<li><a href="index.html#">Log off</a></li>
</ul>
</div>
</div>



</header>





<section id="inner-banner">
<div class="container">
<h1>Welcome '.$fn.'</h1>
</div>
</section>




<div id="main">
 
<section class="resume-process padd-tb">
<div class="container"> 
<h2>Post your Resume &amp; Apply Online for Jobs in all over the World</h2>
<strong>Create your professional resume with online resume builder and start applying for best jobs in all over the World</strong>
<div class="row">
<div class="col-md-4 col-sm-6"><<a href="cvbuild.php?user='.$fname1.'">
<div class="option-box">
<div class="icon-box icon-colo-1"><i class="fa fa-files-o"></i></div>
<h4>Create Your Resume</h4></a>
<p>Create your professional resume with online resume builder.</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="option-box">
<div class="icon-box icon-colo-2"><i class="fa fa-bell"></i></div>
<h4>Find Jobs</h4>
<p>Search and find some potential jobs according to your criteria.</p>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="option-box">
<div class="icon-box icon-colo-3"><i class="fa fa-paper-plane-o"></i></div>
<h4>Search Companies</h4>
<p>Search and contact companies that fit your profile and are good for you.</p>
</div>
</div>
</div>
</div>
</section>
 
 
 
</div>


















';
    
    
    
      
    
    
    
    
    
    
    
    
    
    
        
        
       
	
    
}
    
    
 
    
    
    














    
 

 
 
  ?>


    
    

 
 

 
 
<footer id="footer">
<div class="text-box box">
<h4>About EasyHire</h4>
<p>EasyHire is a platform where jobseekers and employers will get closer and they will experience the best services ever by our intelligent software systems</p>
</div>
<form action="index.html#">
  <h4>Subscribe for Latest Jobs Alerts</h4>
<input type="text" placeholder="Name" required="">
<input type="text" placeholder="Email" required="">
<input type="submit" value="Subscribe Alerts">
</form>
<div class="container"></div>
</footer>
 
</div>
 
 
 <script src="js\jquery-1.11.3.min.js"></script>
 
<script src="js\bootstrap.min.js"></script>
 
<script src="js\owl.carousel.min.js"></script>
 
<script src="js\jquery.velocity.min.js"></script>
<script src="js\jquery.kenburnsy.js"></script>
 
<script src="js\jquery.mCustomScrollbar.concat.min.js"></script>
 
<script src="js\custom.js"></script>
 

 
<script src="js/editor.js"></script>
 
<script src="js/jquery.accordion.js"></script>
 


</body></html>