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
    <title>Set Student Details</title><style>
    .login-panel {
        margin-top: 50px;

	}
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
<a href="welcome_admin.php"><button style="align : center" class="btn btn-lg btn-success">Home</button></a>
<a href="set_detail.php"><button style="align : right" class="btn btn-lg btn-success">Back</button></a>
<br>
<br>
<center>
<h1><strong>Student Details</strong></h1>
<br>
<?php

include("database/db_conection.php");

$sql = "select * from student where college_id='".$_SESSION['id']."'";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<table border='3' width='40%' cellspacing='4'>
		<tr>
			<td style='font-weight:bold' >Name</td>
		    <td align='center'>".$row["name"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >College ID</td>
			<td align='center'>".$row["college_id"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Branch</td>
			<td align='center'>".$row["branch"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Gender</td>
			<td align='center'>".$row["gender"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Father's Name</td>
			<td align='center'>".$row["father_name"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Mother's Name</td>
			<td align='center'>".$row["mother_name"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Date Of Birth</td>
			<td align='center'>".$row["dob"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Mobile Number</td>
			<td align='center'>".$row["mobile_number"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Email Address</td>
			<td align='center'>".$row["email"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Residential Address</td>
			<td align='center'>".$row["address"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >City</td>
			<td align='center'>".$row["city"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >State</td>
			<td align='center'>".$row["state"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >10th School</td>
			<td align='center'>".$row["school_10th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >10th Board</td>
			<td align='center'>".$row["board_10th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >10th Percentage</td>
			<td align='center'>".$row["percentage_10th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Year of passing</td>
			<td align='center'>".$row["passing_year_10th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >12th School</td>
			<td align='center'>".$row["school_12th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >12th Board</td>
			<td align='center'>".$row["board_12th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >12th Percentage</td>
			<td align='center'>".$row["percentage_12th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Year of passing</td>
			<td align='center'>".$row["passing_year_12th"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Diploma College/University</td>
			<td align='center'>".$row["school_dip"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Diploma Aggregate</td>
			<td align='center'>".$row["diploma_agg"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Deploma Branch</td>
			<td align='center'>".$row["diploma_branch"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Diploma Year of passing</td>
			<td align='center'>".$row["passing_year_diploma"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 1st Sem percentage</td>
			<td align='center'>".$row["first_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 1st Sem Re-appear</td>
			<td align='center'>".$row["first_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 2nd Sem percentage</td>
			<td align='center'>".$row["second_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 2nd Sem Re-appear</td>
			<td align='center'>".$row["second_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 3rd Sem percentage</td>
			<td align='center'>".$row["third_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 3rd Sem Re-appear</td>
			<td align='center'>".$row["third_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 4th Sem percentage</td>
			<td align='center'>".$row["fourth_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 4rth Sem Re-appear</td>
			<td align='center'>".$row["fourth_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 5th Sem percentage</td>
			<td align='center'>".$row["fifth_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 5th Sem Re-appear</td>
			<td align='center'>".$row["fifth_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 6th Sem percentage</td>
			<td align='center'>".$row["sixth_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 6th Sem Re-appear</td>
			<td align='center'>".$row["sixth_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 7th Sem percentage</td>
			<td align='center'>".$row["seventh_sem"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech 7th Sem Re-appear</td>
			<td align='center'>".$row["seventh_sem_re"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >B.tech Aggregate Percentage</td>
			<td align='center'>".$row["b_tech_aggregate"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Year of passing</td>
			<td align='center'>".$row["passing_year_btech"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Placement Status</td>
			<td align='center'>".$row["placement"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Company</td>
			<td align='center'>".$row["company"]."</td>
		</tr>
		<tr>
			<td style='font-weight:bold' >Package</td>
			<td align='center'>".$row["package"]."</td>
		</tr>
		</table>";
    }
} else {
    echo "0 results";
}
?>
</center>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="set_detail2.php">
                        <fieldset>
							<div class="form-group">
                                <select name="placed" required>
								<option value="">--Select--</option>
								<option value="placed">Placed</option>
								<option value="not placed">Not Placed</option>
								</select>
                            </div>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Company" name="company" type="text" autofocus required>
                            </div>
							 <div class="form-group"  >
                                <input class="form-control" placeholder="package" name="package" type="text" autofocus required>
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
     $company=$_POST['company'];
	 $package=$_POST['package'];
	 $placement=$_POST['placed'];
	
	$companyErr = trim($company);
	
	if(!preg_match("/^[a-zA-Z ]*$/",$companyErr)) 
    {
        echo "<script>alert('Only letters and white space allowed in Company Name!')</script>";
        exit();
    }
	
	if(!preg_match("/^[0-9]*$/",$package))
	{
		echo "<script>alert('Only Numbers are allowed in Package !!')</script>";
		exit();
	}

    $update="UPDATE student SET placement='".$placement."', company='".$company."', package='".$package."' WHERE college_id='".$_SESSION['id']."'";
    if($run=mysqli_query($dbcon,$update) == TRUE)
	{
		echo "<script>alert('Records updated successfully')</script>";
		
	}
	
}
?>