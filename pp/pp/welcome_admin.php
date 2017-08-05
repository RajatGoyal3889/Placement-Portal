<?php
session_start();
if(!$_SESSION['username'])
{
	header("Location: index.php");
}
?>

<html>
<head>
<title>Welcome Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge">


<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/responsiveslides.css">

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<style>
	.bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  
  footer{
    position:fixed;
    height:50px;
    bottom:0px;
    left:0px;
    right:0px;
    margin-bottom:0px;
}
  </style>
</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top ">
      <div class="container-fluid" >
   
		<a href="#"><img src="img/titlogo.png" height="130" class="img-fluid" alt="Responsive image"></a>
		<div id="jsn-headerright" class="pull-right">
              <div id="jsn-pos-top" class="pull-left">
          <div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
<div>
	<table>
	<tbody>
		<tr>
			<td colspan="2" style="text-align: center;">
				<span style="font-family: arial black,avant garde;"><strong>Our Founders</strong></span>&nbsp;&nbsp;</td>
			<td>
				&nbsp;</td>
		</tr>
		<tr>
			<td>
				<center>&nbsp;<img alt="Sh GD Birla Ji" src="img/sh_gd_birla_ji.jpg" style="width: 64px; height: 80px;" /></td>
			</center><td>
			<center>	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img alt="sh bk birla ji"  src="img/sh_bk_birla_ji.jpg" style="width: 64px; height: 80px;" />&nbsp;</td>
			</tr>
		<tr>
			<td>
				<h6>Sh. GD Birla Ji </td></h6>
				
			<td><h6>
				&nbsp&nbsp&nbsp&nbsp&nbsp;Sh. BK Birla Ji</td></h6>
			<td>
				&nbsp;</td>
		</tr>
	</tbody>
</table>
</div></div></div></div>
		<div class="collapse navbar-collapse">

           </div>
       </div>
    </div></div></div>
		
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<?php
echo "<b>Welcome </b> ";
echo $_SESSION['username'];
?>

<br>
<a href="logout.php"><button class="btn btn-lg btn-success" >Logout Here</button></a>
<center><h1><strong>Welcome Admin</strong></h1>
<br>
<br>
<br>
<a href="set_detail.php"><button class="btn btn-lg btn-success" >Set Placement details of students</button></a><br><br>
<a href="single_search.php"><button class="btn btn-lg btn-success" >Search Single Student</button></a><br><br>
<a href="list_student.php"><button class="btn btn-lg btn-success" >List of students</button></a><br><br>

<br><br><br><br><br><br>
</center>
	<footer class="container-fluid bg-4 text-center">
	<br>
 <center>Developed and Designed by Rajat Goyal (14IT056) & Vikas Samota (14IT053)</center>
 <br>
</footer>
</body>
</html>