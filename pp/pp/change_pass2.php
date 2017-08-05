<?php
session_start();
if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}
?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Change Password</title>
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
<style>
    .login-panel {
        margin-top: 50px;

</style>

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
<br><br><br><br>
<br><br><br>
<?php
echo "<b>Welcome </b> ";
echo $_SESSION['username'];
?>
<br>
<a href="logout.php"><input class="btn btn-lg btn-success" type="logout" value="Logout Here" name="logout" required ></a>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
		<center><h1><strong>Change Password</strong></h1></center>
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Enter Details</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="change_pass2.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Old Password" name="old_pass" type="password"  >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="New Password" name="new_pass" type="password" value="">
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Re-Enter New Password" name="new_pass_2" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="login" >
							<br><br>							

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

if(isset($_POST['login']))
{
    $old_pass=$_POST['old_pass'];
    $new_pass=$_POST['new_pass'];
	$new_pass_2=$_POST['new_pass_2'];

    $check_user="select * from login WHERE username='".$_SESSION['username']."' AND password='$old_pass'";
	
    $run=mysqli_query($dbcon,$check_user);
    if(mysqli_num_rows($run))
    {
			if($new_pass == $new_pass_2)
			{
				$sql="UPDATE login SET password='".$new_pass."' WHERE username='".$_SESSION['username']."'";
				if($runn=mysqli_query($dbcon,$sql) == TRUE)
				{
					echo "<script>alert('Password Changed Successfully!')</script>";
					
				}
				
		
			}
			else
			{
				echo "<script>alert('Password Mis-Matched')</script>";
			}


    }
    else
    {
        echo "<script>alert('Old password is incorrect')</script>";
    }
}
?>