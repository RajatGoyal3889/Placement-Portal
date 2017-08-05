<?php
session_start();

if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}
include("database/db_conection.php");

$reg = "SELECT college_id from student where college_id='".$_SESSION['username']."'";
$res =mysqli_query($dbcon,$reg);

if(mysqli_num_rows($res))
{

}
else
{
	 header("Location: registration.php");
}

?>

<html>
<head> 

 <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
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
    <title>
        Welcome
    </title>
	<style>
	.bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  
   footer{

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
<?php
include("database/db_conection.php");

$sql = "select * from student where college_id='".$_SESSION['username']."'";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<br><div class='col-md-6 col-md-offset-3'><table class='table table-bordered table-hover table-striped' border='1'>
		<tr>
			<td>Name</td>
		    <td>".$row["name"]."</td>
		</tr>
		<tr>
			<td>College ID</td>
			<td>".$row["college_id"]."</td>
		</tr>
		<tr>
			<td>Branch</td>
			<td>".$row["branch"]."</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>".$row["gender"]."</td>
		</tr>
		<tr>
			<td>Father's Name</td>
			<td>".$row["father_name"]."</td>
		</tr>
		<tr>
			<td>Mother's Name</td>
			<td>".$row["mother_name"]."</td>
		</tr>
		<tr>
			<td>Date Of Birth</td>
			<td>".$row["dob"]."</td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td>".$row["mobile_number"]."</td>
		</tr>
		<tr>
			<td>Email Address</td>
			<td>".$row["email"]."</td>
		</tr>
		<tr>
			<td>Residential Address</td>
			<td>".$row["address"]."</td>
		</tr>
		<tr>
			<td>City</td>
			<td>".$row["city"]."</td>
		</tr>
		<tr>
			<td>State</td>
			<td>".$row["state"]."</td>
		</tr>
		<tr>
			<td>10th School</td>
			<td>".$row["school_10th"]."</td>
		</tr>
		<tr>
			<td>10th Board</td>
			<td>".$row["board_10th"]."</td>
		</tr>
		<tr>
			<td>10th Percentage</td>
			<td>".$row["percentage_10th"]."</td>
		</tr>
		<tr>
			<td>Year of passing</td>
			<td>".$row["passing_year_10th"]."</td>
		</tr>
		<tr>
			<td>12th School</td>
			<td>".$row["school_12th"]."</td>
		</tr>
		<tr>
			<td>12th Board</td>
			<td>".$row["board_12th"]."</td>
		</tr>
		<tr>
			<td>12th Percentage</td>
			<td>".$row["percentage_12th"]."</td>
		</tr>
		<tr>
			<td>Year of passing</td>
			<td>".$row["passing_year_12th"]."</td>
		</tr>
		<tr>
			<td>Diploma College/University</td>
			<td>".$row["school_dip"]."</td>
		</tr>
		<tr>
			<td>Diploma Aggregate</td>
			<td>".$row["diploma_agg"]."</td>
		</tr>
		<tr>
			<td>Deploma Branch</td>
			<td>".$row["diploma_branch"]."</td>
		</tr>
		<tr>
			<td>Diploma Year of passing</td>
			<td>".$row["passing_year_diploma"]."</td>
		</tr>
		<tr>
			<td>B.tech 1st Sem percentage</td>
			<td>".$row["first_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 1st Sem Re-appear</td>
			<td>".$row["first_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech 2nd Sem percentage</td>
			<td>".$row["second_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 2nd Sem Re-appear</td>
			<td>".$row["second_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech 3rd Sem percentage</td>
			<td>".$row["third_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 3rd Sem Re-appear</td>
			<td>".$row["third_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech 4th Sem percentage</td>
			<td>".$row["fourth_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 4rth Sem Re-appear</td>
			<td>".$row["fourth_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech 5th Sem percentage</td>
			<td>".$row["fifth_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 5th Sem Re-appear</td>
			<td>".$row["fifth_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech 6th Sem percentage</td>
			<td>".$row["sixth_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 6th Sem Re-appear</td>
			<td>".$row["sixth_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech 7th Sem percentage</td>
			<td>".$row["seventh_sem"]."</td>
		</tr>
		<tr>
			<td>B.tech 7th Sem Re-appear</td>
			<td>".$row["seventh_sem_re"]."</td>
		</tr>
		<tr>
			<td>B.tech Aggregate Percentage</td>
			<td>".$row["b_tech_aggregate"]."</td>
		</tr>
		<tr>
			<td>Year of passing</td>
			<td>".$row["passing_year_btech"]."</td>
		</tr>
		<tr>
			<td>Placement Status</td>
			<td>".$row["placement"]."</td>
		</tr>
		<tr>
			<td>Company</td>
			<td>".$row["company"]."</td>
		</tr>
		<tr>
			<td>Package</td>
			<td>".$row["package"]."</td>
		</tr>
		</table></div>";
    }
} else {
    echo "0 results";
}
?>
<br>
<center><h3><a href="edit.php"><button class="btn btn-success btn-lg">Edit details</button></a> </h3>

</center>
<br>
<div class="col-md-12">
<footer class="container-fluid bg-4 text-center">
	<br>
 <center>Developed and Designed by Rajat Goyal (14IT056) & Vikas Samota (14IT053)</center>
 <br>
</footer>
</div>
</body>

</html>

