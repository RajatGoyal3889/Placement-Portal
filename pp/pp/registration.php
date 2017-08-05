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
    <title>Registration</title>
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
<style>
    .login-panel {
        margin-top: 150px;
	}
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
<a href="logout.php"><button class="btn btn-lg btn-success" >Logout Here</button></a>
		<div class="container">
    <div class="row">
		<center><h1><strong>Registration</strong></h1></center>
        <div class="col-md-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Personal Details</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
						
						<fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Full Name" name="name" type="text"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" value="<?php echo $_SESSION['username']; ?>" name="college_id" type="text"   required readonly >
                            </div>
                            <div class="form-group">
                                <select name="branch" required>
								<option value="">--Branch--</option>
								<option value="IT">Information Technology</option>
								<option value="CSE">Computer Science & Engineering</option>
								<option value="ECE">Electronic & Communication Engineering</option>
								<option value="FAE">Fashion & Apparel Engineering</option>
								<option value="TC">Textile Chemistry</option>
								<option value="TT">Textile Technology</option>
								<option value="ME">Mechanical Engineering</option>
								</select>
                            </div>
							 <div class="form-group">
                                Male<input class="form-control" value="male" name="gender" type="radio"   required>
                            </div>
							<div class="form-group">
                                Female<input class="form-control" value="female" name="gender" type="radio"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Father's Name" name="fname" type="text"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mother's Name" name="mname" type="text" required>
                            </div>
							 <div class="form-group">
                                <input class="form-control" placeholder="Date of Birth" name="dob" type="date"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Mobile Number" name="mobile" type="text" maxlength="10"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email ID" name="email" type="email" required>
                            </div>
							 <div class="form-group">
                                <input class="form-control" placeholder="Residential Address" name="address" type="text"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="City" name="city" type="text"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="State" name="state" type="text" required>
                            </div>

                        </fieldset>
						<br>
						<br><br>
						<br>
						<br>
						*Enter your correct details only.

					
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Acadmic Details</h3>
                </div>
                <div class="panel-body">
                    
						<fieldset>
							 <div class="form-group">
                                <input class="form-control" placeholder="10th School" name="sch_10" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="10th Board" name="board_10" type="text"   required>
                            </div>
							 <div class="form-group">
                                <input class="form-control" placeholder="10th Percentage" name="perc_10" maxlength="5" type="text"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Year of Passing 10th" name="yop_10" type="text" maxlength="4"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="12th School" name="sch_12" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="12th Board" name="board_12" type="text" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="12th Percentage" name="perc_12" type="text" maxlength="5" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Year of Passing 12th" name="yop_12" type="text" maxlength="4"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Diploma College/University" name="sch_dip" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Diploma Aggregate Percentage" name="dip_agg" maxlength="5" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Diploma Branch" name="dip_branch" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Year of Passing Diploma" name="dip_yop" type="text" maxlength="4" >
                            </div>
						
						</fieldset>
							<br>
							<br>
							<br>
							<br>
							<br>
						<input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" required >
						<input class="btn btn-lg btn-success btn-block" type="reset" value="Reset" name="reset" >
						
				

					
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">B.tech Details</h3>
                </div>
                <div class="panel-body">
                    
						
						<fieldset>
						<div class="form-group">
                                <input class="form-control" placeholder="1st Sem Percentage" name="perc_1" maxlength="5" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="1st Sem Reappear(If Any)" name="rep_1" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="2nd Sem Percentage" name="perc_2" maxlength="5" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="2nd Sem Reappear(If Any)" name="rep_2" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="3rd Sem Percentage" name="perc_3" maxlength="5" type="text" required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="3rd Sem Reappear(If Any)" name="rep_3" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="4rth Sem Percentage" name="perc_4" maxlength="5" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="4rth Sem Reappear(If Any)" name="rep_4" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="5th Sem Percentage" name="perc_5" maxlength="5" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="5th Sem Reappear(If Any)" name="rep_5" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="6th Sem Percentage" name="perc_6" maxlength="5" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="6th Sem Reappear(If Any)" name="rep_6" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="7th Sem Percentage" name="perc_7" maxlength="5" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="7th Sem Reappear(If Any)" name="rep_7" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Year of Passing B.tech" name="yop_btech" maxlength="4" type="text" required>
                            </div>
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
 <br>
</footer>
</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $college_id=$_POST['college_id'];
    $branch=$_POST['branch'];
	$gender=$_POST['gender'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$sch_10=$_POST['sch_10'];
	$board_10=$_POST['board_10'];
	$perc_10=$_POST['perc_10'];
	$yop_10=$_POST['yop_10'];
	$sch_12=$_POST['sch_12'];
	$board_12=$_POST['board_12'];
	$perc_12=$_POST['perc_12'];
	$yop_12=$_POST['yop_12'];
	$sch_dip=$_POST['sch_dip'];
	$dip_agg=$_POST['dip_agg'];
	$dip_branch=$_POST['dip_branch'];
	$dip_yop=$_POST['dip_yop'];
	$perc_1=$_POST['perc_1'];
	$rep_1=$_POST['rep_1'];
	$perc_2=$_POST['perc_2'];
	$rep_2=$_POST['rep_2'];
	$perc_3=$_POST['perc_3'];
	$rep_3=$_POST['rep_3'];
	$perc_4=$_POST['perc_4'];
	$rep_4=$_POST['rep_4'];
	$perc_5=$_POST['perc_5'];
	$rep_5=$_POST['rep_5'];
	$perc_6=$_POST['perc_6'];
	$rep_6=$_POST['rep_6'];
	$perc_7=$_POST['perc_7'];
	$rep_7=$_POST['rep_7'];
	$yop_btech=$_POST['yop_btech'];
	
	
	$nameErr = trim($name);
	if(!preg_match("/^[a-zA-Z ]*$/",$nameErr))
	{
		echo "<script>alert('Only Letters and WhiteSpace is allowed in Name Field!!') </script>";
		exit();
	}
	
	$fnameErr=trim($fname);
    if(!preg_match("/^[a-zA-Z ]*$/",$fnameErr)) 
    {
		echo "<script>alert('Only letters and white space allowed in Father's Name!!')</script>";
		exit();
    }
	
	$mnameErr=trim($mname);
    if(!preg_match("/^[a-zA-Z ]*$/",$mnameErr)) 
    {
		echo "<script>alert('Only letters and white space allowed in Mother's Name!!')</script>";
		exit();
    }
	
	if(!preg_match("/^[0-9]*$/",$mobile))
	{
		echo "<script>alert('Only Numbers are allowed in Mobile number!!..... Length must be 10 numbers only.<br> For Eg:-0000000000')</script>";
		exit();
	}
	
	$cityErr = trim($city);
	
	if(!preg_match("/^[a-zA-Z ]*$/",$cityErr)) 
    {
        echo "<script>alert('Only letters and white space allowed in City Name!')</script>";
        exit();
    }
	
	$stateErr = trim($state);
	
	if(!preg_match("/^[a-zA-Z ]*$/",$stateErr)) 
    {
        echo "<script>alert('Only letters and white space allowed in State Name!')</script>";
        exit();
    }
	
	$sch_10Err = trim($sch_10);
	
	if(!preg_match("/^[a-zA-Z ]*$/",$sch_10Err)) 
    {
        echo "<script>alert('Only letters and white space allowed in 10th School Name!')</script>";
        exit();
    }
	
	$board_10Err = trim($board_10);
	
	if(!preg_match("/^[a-zA-Z ]*$/",$board_10Err)) 
    {
        echo "<script>alert('Only letters and white space allowed in 10th Board Name!')</script>";
        exit();
    }
	
	$sch_12Err = trim($sch_12);
	if(!empty($sch_12)){
	if(!preg_match("/^[a-zA-Z ]*$/",$sch_12Err)) 
    {
        echo "<script>alert('Only letters and white space allowed in 12th school Name!')</script>";
        exit();
    }}
	
	$board_12Err = trim($board_12);
	if(!empty($board_12)){
	if(!preg_match("/^[a-zA-Z ]*$/",$board_12Err)) 
    {
        echo "<script>alert('Only letters and white space allowed in 12th Board Name!')</script>";
        exit();
    }}
	
	$sch_dipErr = trim($sch_dip);
	if(!empty($sch_dip)){
	if(!preg_match("/^[a-zA-Z ]*$/",$sch_dipErr)) 
    {
        echo "<script>alert('Only letters and white space allowed in Diploma School Name!')</script>";
        exit();
    }}
	
	$dip_branchErr = trim($dip_branch);
	if(!empty($dip_Branch)){
	if(!preg_match("/^[a-zA-Z ]*$/",$dip_branchErr)) 
    {
        echo "<script>alert('Only letters and white space allowed in Diploma Branch Name!')</script>";
        exit();
    }}
	
	if($perc_10 < 0 || $perc_10 >100)
    {
        echo "<script>alert('Please enter a valid percentage value in Class 10th percentage')</script>";
        exit();
    }
	if(!empty($perc_12)){
	if($perc_12 < 0 || $perc_12 >100)
    {
        echo "<script>alert('Please enter a valid percentage value in Class 12th percentage')</script>";
        exit();
    }}
	
	if(!empty($dip_agg)){
	if($dip_agg < 0 || $dip_agg >100)
    {
        echo "<script>alert('Please enter a valid percentage value in Diploma percentage')</script>";
        exit();
    }
	}
	
	if(!preg_match("/^[2][0][0-9][0-9]$/",$yop_10)) 
    {
        echo "<script>alert('Wrong Input Format in Year Of Passing 10th')</script>";
        exit();
    }
	if(!empty($yop_12)){
	if(!preg_match("/^[2][0][0-9][0-9]$/",$yop_12)) 
    {
        echo "<script>alert('Wrong Input Format in Year Of Passing 12th')</script>";
        exit();
    }}
	if(!empty($dip_yop)){
	if(!preg_match("/^[2][0][0-9][0-9]$/",$dip_yop)) 
    {
        echo "<script>alert('Wrong Input Format in Year Of Passing Diploma')</script>";
        exit();
    }}
	
	if($perc_1 < 0 || $perc_1 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }
	
	if($perc_2 < 0 || $perc_2 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }
	
	if($perc_3 < 0 || $perc_3 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }
	
	if($perc_4 < 0 || $perc_4 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }
	
	if($perc_5 < 0 || $perc_5 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }
	if(!empty($perc_6)){
	if($perc_6 < 0 || $perc_6 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }}else{$perc_6 = 0;}
	if(!empty($perc_7)){
	if($perc_7 < 0 || $perc_7 >100)
    {
        echo "<script>alert('Invalid percentage value!')</script>";
        exit();
    }}else{$perc_7 = 0;}
	
	$agg_sem1 = ($perc_1+$perc_2+$perc_3+$perc_4+$perc_5)/5;
	$agg_sem2 = ($perc_1+$perc_2+$perc_3+$perc_4+$perc_5+$perc_6)/6;
	$agg_sem3 = ($perc_1+$perc_2+$perc_3+$perc_4+$perc_5+$perc_6+$perc_7)/7;
	if($perc_6 == 0 && $perc_7 == 0)
	{$agg_sem = $agg_sem1;}
	else if($perc_7 == 0)
	{$agg_sem = $agg_sem2;}
	else
	{$agg_sem = $agg_sem3;}
	
	if(!preg_match("/^[2][0][0-9][0-9]$/",$yop_btech)) 
    {
        echo "<script>alert('Wrong Input Format in Year Of Passing B.tech')</script>";
        exit();
    }
	
	if(empty($rep_1))
	{
		$rep_1 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_1))
	{
		echo "<script>alert('Undefined Input in First Semester Reappear')</script>";
		exit();
	}
	
	if(empty($rep_2))
	{
		$rep_2 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_2))
	{
		echo "<script>alert('Undefined Input in Second Semester Reappear')</script>";
		exit();
	}
	
	if(empty($rep_3))
	{
		$rep_3 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_3))
	{
		echo "<script>alert('Undefined Input in Third Semester Reappear')</script>";
		exit();
	}
	
	if(empty($rep_4))
	{
		$rep_4 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_4))
	{
		echo "<script>alert('Undefined Input in Fourth Semester Reappear')</script>";
		exit();
	}
	
	if(empty($rep_5))
	{
		$rep_5 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_5))
	{
		echo "<script>alert('Undefined Input in Fifth Semester Reappear')</script>";
		exit();
	}
	
	if(empty($rep_6))
	{
		$rep_6 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_6))
	{
		echo "<script>alert('Undefined Input in Sixth Semester Reappear')</script>";
		exit();
	}
	
	if(empty($rep_7))
	{
		$rep_7 = 0;
	}
	elseif(!preg_match("/^[0-9]*$/",$rep_7))
	{
		echo "<script>alert('Undefined Input in Seventh Semester Reappear')</script>";
		exit();
	}
	
		$total_re=$rep_1+$rep_2+$rep_3+$rep_4+$rep_5+$rep_6+$rep_7;

    $insert_user="INSERT INTO student(name,college_id,branch,gender,father_name,mother_name,dob,mobile_number,email,address,city,state,school_10th,board_10th,percentage_10th,passing_year_10th,school_12th,board_12th,percentage_12th,passing_year_12th,school_dip,diploma_agg,diploma_branch,passing_year_diploma,first_sem,first_sem_re,second_sem,second_sem_re,third_sem,third_sem_re,fourth_sem,fourth_sem_re,fifth_sem,fifth_sem_re,sixth_sem,sixth_sem_re,seventh_sem,seventh_sem_re,b_tech_aggregate,passing_year_btech,total_re) VALUE ('$name','$college_id','$branch','$gender','$fname','$mname','$dob','$mobile','$email','$address','$city','$state','$sch_10','$board_10','$perc_10','$yop_10','$sch_12','$board_12','$perc_12','$yop_12','$sch_dip','$dip_agg','$dip_branch','$dip_yop','$perc_1','$rep_1','$perc_2','$rep_2','$perc_3','$rep_3','$perc_4','$rep_4','$perc_5','$rep_5','$perc_6','$rep_6','$perc_7','$rep_7','$agg_sem','$yop_btech','$total_re')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>