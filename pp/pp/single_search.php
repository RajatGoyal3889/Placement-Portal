<?php
session_start();//session starts here
if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}
?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Search Student Details</title><style>
    .login-panel {
        margin-top: 50px;
	}
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

<?php
echo "<b>Welcome </b> ";
echo $_SESSION['username'];
?>
<br>
<a href="logout.php"><button class="btn btn-lg btn-success" >Logout Here</button></a>
<a href="welcome_admin.php"><button class="btn btn-lg btn-success">Home</button></a>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="single_search.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="College ID" name="college_id" type="text"  >
                            </div>

                                <input class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit" >

                           
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

	<footer class="container-fluid bg-4 text-center">
	<br>
 <center>Developed and Designed by Rajat Goyal (14IT056) & Vikas Samota (14IT053)</center>
</footer>
</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['submit']))
{
    $college_id=$_POST['college_id'];

    $check_user="select * from student WHERE college_id='$college_id'";
    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
			echo "<script>window.open('single_search2.php','_self')</script>";
			$_SESSION['id']=$college_id;
    }
    else
    {
        echo "<script>alert('Student record not found!')</script>";
    }
}
?>