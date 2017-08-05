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
    <title>Student List</title>
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
<a href="logout.php"><button class="btn btn-lg btn-success" >Logout Here</button></a>
<a href="welcome_admin.php"><button class="btn btn-lg btn-success">Home</button></a>

<div class="container">
    <div class="row">
	<center><h1><strong>Search Details</strong></h1></center>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="list_student.php" enctype="multipart/form-data">
                        <fieldset>
						   <label class="control-label" >Branch</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <div class="input-group abcc">

                <input type="checkbox" name="branch[]" value="IT">  <b> Information Technology</b><br>
                <input type="checkbox" name="branch[]" value="CSE">  <b> Computer Science & Engineering</b><br>
                <input type="checkbox" name="branch[]" value="ECE">  <b> Electronic & Communication Engineering</b><br>
                <input type="checkbox" name="branch[]" value="FAE">  <b> Fashion & Apparel Engineering</b><br>
				<input type="checkbox" name="branch[]" value="TC">  <b> Textile Chemistry</b><br>
				<input type="checkbox" name="branch[]" value="TT">  <b> Textile Technology</b><br>
				<input type="checkbox" name="branch[]" value="ME">  <b> Mechanical Engineering</b><br>
             
            </div>
            </div>
	<br>
                          	   <label class="control-label" >10th Percentage</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="perc_10" class="form-control ">
               
								<option value="">Select one</option>
								<option value="b60">below 60</option>
								<option value="a60">Above 60</option>
								<option value="b65">Below 65</option>
								<option value="a65">Above 65</option>
								<option value="b70">Below 70</option>
								<option value="a70">Above 70</option>
								<option value="b75">Below 75</option>
								<option value="a75">Above 75</option>
								</select> 
            </div>
			
								<br>
                          	   <label class="control-label" >12h Percentage</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="perc_12" class="form-control ">
               
								<option value="">Select one</option>
								<option value="b60">below 60</option>
								<option value="a60">Above 60</option>
								<option value="b65">Below 65</option>
								<option value="a65">Above 65</option>
								<option value="b70">Below 70</option>
								<option value="a70">Above 70</option>
								<option value="b75">Below 75</option>
								<option value="a75">Above 75</option>
								</select> 
            </div>
													<br>
                          	   <label class="control-label" >Diploma percentage</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="perc_dip" class="form-control ">
               
								<option value="">Select one</option>
								<option value="b60">below 60</option>
								<option value="a60">Above 60</option>
								<option value="b65">Below 65</option>
								<option value="a65">Above 65</option>
								<option value="b70">Below 70</option>
								<option value="a70">Above 70</option>
								<option value="b75">Below 75</option>
								<option value="a75">Above 75</option>
								</select> 
            </div>
													<br>
                          	   <label class="control-label" >B.Tech Aggregate</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="agg_btech" class="form-control ">
               
								<option value="">Select one</option>
								<option value="b60">below 60</option>
								<option value="a60">Above 60</option>
								<option value="b65">Below 65</option>
								<option value="a65">Above 65</option>
								<option value="b70">Below 70</option>
								<option value="a70">Above 70</option>
								<option value="b75">Below 75</option>
								<option value="a75">Above 75</option>
								</select> 
            </div>
													<br>
                          	   <label class="control-label" >Reappering Subject</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="re_btech" class="form-control ">
               
								<option value="">Select one</option>
								<option value="0">UpTo 0</option>
								<option value="1">UpTo 1</option>
								<option value="2">UpTo 2</option>
								<option value="3">UpTo 3</option>
								<option value="4">UpTo 4</option>
								<option value="5">UpTo 5</option>
								<option value="6">UpTo 6</option>
								<option value="7">Above 6</option>
								</select>
            </div>
			<br>
							   <label class="control-label" for="state">Year of Passing B.Tech</label>
           
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>

								 <input class="form-control" placeholder="eg. 1997" name="yop_btech" type="text">
            </div>
										<br>
                          	   <label class="control-label" >Placement Status</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="placement" class="form-control ">
               
								<option value="">Select one</option>
								<option value="placed">Placed</option>
								<option value="not placed">Not Placed</option>
								</select>
            </div>
							
								<br>
							   <label class="control-label" for="state">Company</label>
           
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
								 <select name="company" class="form-control">
								 <option value="">Select one</option>
								 <?php
									include("database/db_conection.php");
									$view_users_query="select * from student";
											$runu=mysqli_query($dbcon,$view_users_query);

											while($row=mysqli_fetch_array($runu))
											{
												$com=$row['company'];
								?> 
								 <option value="<?php echo $com; ?>"><?php echo $com; ?></option>
											<?php } ?>
								 </select>
                            </div>
				<br>
                          	   <label class="control-label" >Placement Pakage</label>
          
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
              <select id="sms" name="package" class="form-control ">
               
								<option value="">Select one</option>
								<option value="99999">Below 1,00,000</option>
								<option value="299999">Between 1,00,000 to 3,00,000</option>
								<option value="499999">Between 3,00,000 to 5,00,000</option>
								<option value="699999">Between 5,00,000 to 7,00,000</option>
								<option value="899999">Between 7,00,000 to 9,00,000</option>
								<option value="1099999">Between 9,00,000 to 11,00,000</option>
								<option value="1299999">Between 11,00,000 to 13,00,000</option>
								<option value="1300000">Above 13,00,000</option>
								</select>
            </div>
							
			<br>
			<br>
							
							

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
		if(isset($_POST['branch']))
		{
			$branch = $_POST['branch'];
		}
		else
		{
			$branch = "";
		}
		$perc_10=$_POST['perc_10'];
		$perc_12=$_POST['perc_12'];
		$perc_dip=$_POST['perc_dip'];
		$agg_btech=$_POST['agg_btech'];
		$re_btech=$_POST['re_btech'];
		$yop_btech=$_POST['yop_btech'];
		$company=$_POST['company'];
		$package=$_POST['package'];
		$placement=$_POST['placement'];
		$greater=">";
		$lesser="<";
		
		if(empty($branch))
		{
			if(empty($perc_10))
			{
				if(empty($perc_12))
				{
					if(empty($perc_dip))
					{
						if(empty($agg_btech))
						{
							if(empty($re_btech))
							{
								if(empty($yop_btech))
								{
									if(empty($company))
									{
										if(empty($package))
										{
											if(empty($placement))
											{
												echo "<script>alert('All fields cannot be empty!!')</script>";
												exit();
											}
										}
									}
								
								}
							}
						}
					}
				}
			}
		}
		$i=0;
		if(!empty($branch))
		{
			$branch_q[0]=$branch_q[1]=$branch_q[2]=$branch_q[3]=$branch_q[4]=$branch_q[5]=$branch_q[6]="";
			foreach($branch as $chk)
			{
				$branch_q[$i]=$chk;
				$i++;
			}
			
		}
		else
		{
			$branch_q[0]=$branch_q[1]=$branch_q[2]=$branch_q[3]=$branch_q[4]=$branch_q[5]=$branch_q[6]="%";
		}
		
		if(!empty($perc_10))
		{
			if($perc_10 == 'b60')
			{
				$perc_10_q1="0";
				$perc_10_q2="60";
			}
			elseif($perc_10 == 'a60')
			{
				$perc_10_q1="60";
				$perc_10_q2="100";
			}
			elseif($perc_10 == 'b65')
			{
				$perc_10_q1="0";
				$perc_10_q2="65";
			}
			elseif($perc_10 == 'a65')
			{
				$perc_10_q1="65";
				$perc_10_q2="100";
			}
			elseif($perc_10 == 'b70')
			{
				$perc_10_q1="0";
				$perc_10_q2="70";
			}
			elseif($perc_10 == 'a70')
			{
				$perc_10_q1="70";
				$perc_10_q2="100";
			}
			elseif($perc_10 == 'b75')
			{
				$perc_10_q1="0";
				$perc_10_q2="75";
			}
			elseif($perc_10 == 'a75')
			{
				$perc_10_q1="75";
				$perc_10_q2="100";
			}
		}
		else
		{
			$perc_10_q1="0";
			$perc_10_q2="100";
		}
		
		if(!empty($perc_12))
		{
			if($perc_12 == 'b60')
			{
				$perc_12_q1="0";
				$perc_12_q2="60";
			}
			elseif($perc_12 == 'a60')
			{
				$perc_12_q1="60";
				$perc_12_q2="100";
			}
			elseif($perc_12 == 'b65')
			{
				$perc_12_q1="0";
				$perc_12_q2="65";
			}
			elseif($perc_12 == 'a65')
			{
				$perc_12_q1="65";
				$perc_12_q2="100";
			}
			elseif($perc_12 == 'b70')
			{
				$perc_12_q1="0";
				$perc_12_q2="70";
			}
			elseif($perc_12 == 'a70')
			{
				$perc_12_q1="70";
				$perc_12_q2="100";
			}
			elseif($perc_12 == 'b75')
			{
				$perc_12_q1="0";
				$perc_12_q2="75";
			}
			elseif($perc_12 == 'a75')
			{
				$perc_12_q1="75";
				$perc_12_q2="100";
			}
		}
		else
		{
			$perc_12_q1="0";
			$perc_12_q2="100";
		}
		
		if(!empty($perc_dip))
		{
			if($perc_dip == 'b60')
			{
				$perc_dip_q1="0";
				$perc_dip_q2="60";
			}
			elseif($perc_dip == 'a60')
			{
				$perc_dip_q1="60";
				$perc_dip_q2="100";
			}
			elseif($perc_dip == 'b65')
			{
				$perc_dip_q1="0";
				$perc_dip_q2="65";
			}
			elseif($perc_dip == 'a65')
			{
				$perc_dip_q1="65";
				$perc_dip_q2="100";
			}
			elseif($perc_dip == 'b70')
			{
				$perc_dip_q1="0";
				$perc_dip_q2="70";
			}
			elseif($perc_dip == 'a70')
			{
				$perc_dip_q1="70";
				$perc_dip_q2="100";
			}
			elseif($perc_dip == 'b75')
			{
				$perc_dip_q1="0";
				$perc_dip_q2="75";
			}
			elseif($perc_dip == 'a75')
			{
				$perc_dip_q1="75";
				$perc_dip_q2="100";
			}
		}
		else
		{
			$perc_dip_q1="0";
			$perc_dip_q2="100";
		}
		
		if(!empty($agg_btech))
		{
			if($agg_btech == 'b60')
			{
				$agg_btech_q1="0";
				$agg_btech_q2="60";
			}
			elseif($agg_btech == 'a60')
			{
				$agg_btech_q1="60";
				$agg_btech_q2="100";
			}
			elseif($agg_btech == 'b65')
			{
				$agg_btech_q1="0";
				$agg_btech_q2="65";
			}
			elseif($agg_btech == 'a65')
			{
				$agg_btech_q1="65";
				$agg_btech_q2="100";
			}
			elseif($agg_btech == 'b70')
			{
				$agg_btech_q1="0";
				$agg_btech_q2="70";
			}
			elseif($agg_btech == 'a70')
			{
				$agg_btech_q1="70";
				$agg_btech_q2="100";
			}
			elseif($agg_btech == 'b75')
			{
				$agg_btech_q1="0";
				$agg_btech_q2="75";
			}
			elseif($agg_btech == 'a75')
			{
				$agg_btech_q1="75";
				$agg_btech_q2="100";
			}
		}
		else
		{
			$agg_btech_q1="0";
			$agg_btech_q2="100";
		}
		
		if(!empty($re_btech))
		{
			if($re_btech == '0')
			{
				$re_btech_q1="0";
				$re_btech_q2="1";
			}
			elseif($re_btech == '1')
			{
				$re_btech_q1="1";
				$re_btech_q2="2";
			}
			elseif($re_btech == '2')
			{
				$re_btech_q1="2";
				$re_btech_q2="3";
			}
			elseif($re_btech == '3')
			{
				$re_btech_q1="3";
				$re_btech_q2="4";
			}
			elseif($re_btech == '4')
			{
				$re_btech_q1="4";
				$re_btech_q2="5";
			}
			elseif($re_btech == '5')
			{
				$re_btech_q1="5";
				$re_btech_q2="6";
			}
			elseif($re_btech == '6')
			{
				$re_btech_q1="6";
				$re_btech_q2="7";
			}
			elseif($re_btech == '7')
			{
				$re_btech_q1="6";
				$re_btech_q2="50";
			}
		}
		else
		{
			$re_btech_q1="0";
			$re_btech_q2="50";
		}
		
		if(!empty($yop_btech))
		{
			$yop_btech_q=$yop_btech;
		}
		else
		{
			$yop_btech_q="%";
		}
		
		if(!empty($company))
		{
			$company_q=$company;
		}
		else
		{
			$company_q="%";
		}
		
		if(!empty($package))
		{
			if($package == '99999')
			{
				$package_q1="0";
				$package_q2="100001";
			}
			elseif($package == '299999')
			{
				$package_q1="100000";
				$package_q2="300001";
			}
			elseif($package == '499999')
			{
				$package_q1="300000";
				$package_q2="500001";
			}
			elseif($package == '699999')
			{
				$package_q1="500000";
				$package_q2="700001";
			}
			elseif($package == '899999')
			{
				$package_q1="700000";
				$package_q2="900001";
			}
			elseif($package == '1099999')
			{
				$package_q1="900000";
				$package_q2="1100001";
			}
			elseif($package == '1299999')
			{
				$package_q1="1100000";
				$package_q2="1300001";
			}
			elseif($package == '1300000')
			{
				$package_q1="1300000";
				$package_q2="5000000";
			}
		}
		else
		{
			$package_q1="0";
			$package_q2="5000000";
		}
		
		if(!empty($placement))
		{
			$placement_q=$placement;
		}
		else
		{
			$placement_q="%";
		}
		echo $perc_10_q1;
		echo $perc_10_q2;
		
		$sql="SELECT * FROM student WHERE (branch like '".$branch_q[0]."' OR branch like '".$branch_q[1]."' OR branch like '".$branch_q[2]."' OR branch like '".$branch_q[3]."' OR branch like '".$branch_q[4]."' OR branch like '".$branch_q[5]."' OR branch like '".$branch_q[6]."')
		AND percentage_10th BETWEEN ".$perc_10_q1." AND ".$perc_10_q2." 
		AND percentage_12th BETWEEN ".$perc_12_q1." AND ".$perc_12_q2." 
		AND diploma_agg BETWEEN ".$perc_dip_q1." AND ".$perc_dip_q2."
		AND	b_tech_aggregate BETWEEN ".$agg_btech_q1." AND ".$agg_btech_q2." 
		AND	total_re BETWEEN ".$re_btech_q1." AND ".$re_btech_q2." 
		AND	passing_year_btech like '".$yop_btech_q."' 
		AND	company like '".$company_q."' 
		AND	package BETWEEN ".$package_q1." AND ".$package_q2." 
		AND	placement like '".$placement_q."'";
		
		$run=mysqli_query($dbcon,$sql);
		
		$_SESSION['query'] = $sql;
		if($run->num_rows > 0){
			echo "<script>window.open('list_student2.php','_self')</script>";
		}
		else{
			echo "<script>alert('No Records founds matching your Search')</script>";
		}
			while($row = $run->fetch_assoc())
			{
				echo $row['name'];
			}
		
}
?>