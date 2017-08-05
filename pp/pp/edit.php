<?php
session_start();

if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}
include("database/db_conection.php");
        $view_users_query="select * from student where college_id='".$_SESSION['username']."'";
        $run=mysqli_query($dbcon,$view_users_query);

        while($row=mysqli_fetch_array($run))
        {
            $user_name=$row["name"];
            $user_branch=$row["branch"];
            $user_gender=$row["gender"];
			$user_fname=$row["father_name"];
			$user_mname=$row["mother_name"];
			$user_dob=$row["dob"];
			$user_mobile=$row["mobile_number"];
			$user_email=$row["email"];
			$user_address=$row["address"];
			$user_city=$row["city"];
			$user_state=$row["state"];
			$user_sch_10th=$row["school_10th"];
			$user_board_10th=$row["board_10th"];
			$user_perc_10th=$row["percentage_10th"];
			$user_yop_10th=$row["passing_year_10th"];
			$user_sch_12=$row["school_12th"];
			$user_board_12=$row["board_12th"];
			$user_perc_12=$row["percentage_12th"];
			$user_yop_12=$row["passing_year_12th"];
			$user_sch_dip=$row["school_dip"];
			$user_diploma_agg=$row["diploma_agg"];
			$user_diploma_branch=$row["diploma_branch"];
			$user_yop_diploma=$row["passing_year_diploma"];
			$user_1=$row["first_sem"];
			$user_1_re=$row["first_sem_re"];
			$user_2=$row["second_sem"];
			$user_2_re=$row["second_sem_re"];
			$user_3=$row["third_sem"];
			$user_3_re=$row["third_sem_re"];
			$user_4=$row["fourth_sem"];
			$user_4_re=$row["fourth_sem_re"];
			$user_5=$row["fifth_sem"];
			$user_5_re=$row["fifth_sem_re"];
			$user_6=$row["sixth_sem"];
			$user_6_re=$row["sixth_sem_re"];
			$user_7=$row["seventh_sem"];
			$user_7_re=$row["seventh_sem_re"];
			$user_yop_btech=$row["passing_year_btech"];
			

		}
        

?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Update Details</title>
</head>
<style>
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
	<center><h1><strong>Update Record</strong></h1></center>
        <div class="col-md-4 ">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Personal Details</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="edit.php">
						
						<fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Full Name" value="<?php echo $user_name;  ?>" name="name" type="text"   required>
                            </div>
                            <div class="form-group">
                                <select name="branch" value="<?php echo $user_branch;  ?>" required>
								<option value="">--Branch--</option>
								<option value="IT">Information Technology</option>
								<option value="CSE">Computer Science & Engineering</option>
								<option value="ECE">Electronic & Communication Engineering</option>
								<option value="FAE">Fashion & Apparel Engineering</option>
								<option value="TC">Textile Chemistry</option>
								<option value="TT">Textile Technology</option>
								<option value="ME">Mechnical Engineering</option>
								</select>
                            </div>
							 <div class="form-group">
                                Male<input class="form-control" value="male" name="gender" type="radio"   required>
                            </div>
							<div class="form-group">
                                Female<input class="form-control" value="female" name="gender" type="radio"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Father's Name" value="<?php echo $user_fname;  ?>" name="fname" type="text"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mother's Name" value="<?php echo $user_mname;  ?>" name="mname" type="text" required>
                            </div>
							 <div class="form-group">
                                <input class="form-control" placeholder="Date of Birth" value="<?php echo $user_dob;  ?>" name="dob" type="date"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Mobile Number" value="<?php echo $user_mobile;  ?>" maxlength="10" name="mobile" type="text"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email ID" value="<?php echo $user_email;  ?>" name="email" type="email" required>
                            </div>
							 <div class="form-group">
                                <input class="form-control" placeholder="Residential Address" value="<?php echo $user_address;  ?>" name="address" type="text"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="City" value="<?php echo $user_city;  ?>" name="city" type="text"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="State" value="<?php echo $user_state;  ?>" name="state" type="text" required>
                            </div>

                        </fieldset>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						

                    
                </div>
            </div>
        </div>
		 <div class="col-md-4 ">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Acadmic Details</h3>
                </div>
                <div class="panel-body">
                    
						
						
						<fieldset>
							 <div class="form-group">
                                <input class="form-control" placeholder="10th School" value="<?php echo $user_sch_10th;  ?>" name="sch_10" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="10th Board" value="<?php echo $user_board_10th;  ?>" name="board_10" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="10th Percentage" value="<?php echo $user_perc_10th;  ?>" maxlength="5" name="perc_10" type="text"   required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Year of Passing 10th" value="<?php echo $user_yop_10th;  ?>" maxlength="4" name="yop_10" type="text"   required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="12th School" value="<?php echo $user_sch_12;  ?>" name="sch_12" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="12th Board" value="<?php echo $user_board_12;  ?>" name="board_12" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="12th Percentage" value="<?php echo $user_perc_12;  ?>" maxlength="5" name="perc_12" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Year of Passing 12th" value="<?php echo $user_yop_12;  ?>" maxlength="4" name="yop_12" type="text"   >
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Diploma College/University" value="<?php echo $user_sch_dip;  ?>" name="sch_dip" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Diploma Aggregate Percentage" value="<?php echo $user_diploma_agg;  ?>" name="dip_agg" maxlength="5" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Diploma Branch" value="<?php echo $user_diploma_branch;  ?>" name="dip_branch" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Year of Passing Diploma" value="<?php echo $user_yop_diploma;  ?>" maxlength="4" name="dip_yop" type="text" >
                            </div>
						
						</fieldset>
					

						<button class="btn btn-lg btn-success btn-block" name="update" >Update</button>
						<input class="btn btn-lg btn-success btn-block" type="reset" value="Reset" name="reset" required >
                    
                </div>
            </div>
        </div> <div class="col-md-4 ">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">B.tech Details</h3>
                </div>
                <div class="panel-body">
                  
						
						
						<fieldset>
						<div class="form-group">
                                <input class="form-control" placeholder="1st Sem Percentage" value="<?php echo $user_1;  ?>" maxlength="5" name="perc_1" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="1st Sem Reappear(If Any)" value="<?php echo $user_1_re;  ?>" name="rep_1" type="text"   >
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="2nd Sem Percentage" value="<?php echo $user_2;  ?>" maxlength="5" name="perc_2" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="2nd Sem Reappear(If Any)" value="<?php echo $user_2_re;  ?>" name="rep_2" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="3rd Sem Percentage" value="<?php echo $user_3;  ?>" maxlength="5" name="perc_3" type="text" required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="3rd Sem Reappear(If Any)" value="<?php echo $user_3_re;  ?>" name="rep_3" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="4rth Sem Percentage" value="<?php echo $user_4;  ?>" maxlength="5" name="perc_4" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="4rth Sem Reappear(If Any)" value="<?php echo $user_4_re;  ?>" name="rep_4" type="text"   >
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="5th Sem Percentage" value="<?php echo $user_5;  ?>" maxlength="5" name="perc_5" type="text"   required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="5th Sem Reappear(If Any)" value="<?php echo $user_5_re;  ?>" name="rep_5" type="text"   >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="6th Sem Percentage" value="<?php echo $user_6;  ?>" maxlength="5" name="perc_6" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="6th Sem Reappear(If Any)" value="<?php echo $user_6_re;  ?>" name="rep_6" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="7th Sem Percentage" value="<?php echo $user_7;  ?>" maxlength="5" name="perc_7" type="text" >
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="7th Sem Reappear(If Any)" value="<?php echo $user_7_re;  ?>" name="rep_7" type="text"   >
                            </div>
							<div class="form-group">
                                <input class="form-control" value="<?php echo $user_yop_btech;  ?>" name="yop_btech" maxlength="4" type="text" required>
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
</footer>
</body>

</html>

<?php

include("database/db_conection.php");
if(isset($_POST['update']))
{
    $name=$_POST['name'];
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
		echo "<script>alert('Only Numbers are allowed in Mobile number!!')</script>";
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

    $update_user="UPDATE student
	SET name='$name',
	branch='$branch',
	gender='$gender',
	father_name='$fname',
	mother_name='$mname',
	dob='$dob',
	mobile_number='$mobile',
	email='$email',
	address='$address',
	city='$city',
	state='$state',
	school_10th='$sch_10',
	board_10th='$board_10',
	percentage_10th='$perc_10',
	passing_year_10th='$yop_10',
	school_12th='$sch_12',
	board_12th='$board_12',
	percentage_12th='$perc_12',
	passing_year_12th='$yop_12',
	school_dip='$sch_dip',
	diploma_agg='$dip_agg',
	diploma_branch='$dip_branch',
	passing_year_diploma='$dip_yop',
	first_sem='$perc_1',
	first_sem_re='$rep_1',
	second_sem='$perc_2',
	second_sem_re='$rep_2',
	third_sem='$perc_3',
	third_sem_re='$rep_3',
	fourth_sem='$perc_4',
	fourth_sem_re='$rep_4',
	fifth_sem='$perc_5',
	fifth_sem_re='$rep_5',
	sixth_sem='$perc_6',
	sixth_sem_re='$rep_6',
	seventh_sem='$perc_7',
	seventh_sem_re='$rep_7',
	b_tech_aggregate='$agg_sem',
	total_re='$total_re',
	passing_year_btech='$yop_btech'
	WHERE college_id='".$_SESSION['username']."'";
    if(mysqli_query($dbcon,$update_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>