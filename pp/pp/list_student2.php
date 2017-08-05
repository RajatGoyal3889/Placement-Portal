<?php
session_start();//session starts here
if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}
include("database/db_conection.php");
$sql = $_SESSION['query'];



?>

<html>
<head>
 <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
<title>
List Of Students
</title>
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
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="./jquery.tabletoCSV.js" type="text/javascript" charset="utf-8"></script>
    <script>
        $(function(){
            $("#export").click(function(){
                $("#export_table").tableToCSV();
            });
        });
    </script>
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
<br><br><br><br>
<br><br><br>
<?php
echo "<b>Welcome </b> ";
echo $_SESSION['username'];
?>
<br>
<a href="logout.php"><button class="btn btn-lg btn-success" >Logout Here</button></a>
<a href="welcome_admin.php"><button style="align : center" class="btn btn-lg btn-success">Home</button></a>
<a href="list_student.php"><button style="align : right" class="btn btn-lg btn-success">Back</button></a><br><br>
<table class="table table-bordered table-hover table-striped" id="export_table">
        <thead>

        <tr>

            <th>Full Name</th>
            <th>Branch</th>
			<th>College ID</th>
            <th>Gender</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
			<th>Date Of Birth</th>
			<th>Mobile Number</th>
			<th>Email Address</th>
			<th>Residental Address</th>
			<th>City</th>
			<th>State</th>
			<th>10th School</th>
			<th>10th Board</th>
			<th>10th Percentage</th>
			<th>10th Year Of Passing</th>
			<th>12th School</th>
			<th>12th Board</th>
			<th>12th Percentage</th>
			<th>12th Year Of Passing</th>
			<th>Diploma College</th>
			<th>Diploma Percentage</th>
			<th>Diploma Branch</th>
			<th>Diploma Year Of Passing</th>
			<th>First Sem Percentage</th>
			<th>First Sem Reappear</th>
			<th>Second Sem Percentage</th>
			<th>Second Sem Reappear</th>
			<th>Third Sem Percentage</th>
			<th>Third Sem Reappear</th>
			<th>Fourth Sem Percentage</th>
			<th>Fourth Sem Reappear</th>
			<th>Fifth Sem Percentage</th>
			<th>Fifth Sem Reappear</th>
			<th>Sixth Sem Percentage</th>
			<th>Sixth Sem Reappear</th>
			<th>Seventh Sem Percentage</th>
			<th>Seventh Sem Reappear</th>
			<th>B.Tech Aggregate</th>
			<th>B.Tech Year Of Passing</th>
			<th>Total Reappear</th>
			<th>Placement Status</th>
			<th>Company</th>
			<th>Package</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $run=mysqli_query($dbcon,$sql);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_name=$row["name"];
            $user_branch=$row["branch"];
			$user_college_id=$row["college_id"];
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
			$user_btech_agg=$row["b_tech_aggregate"];
			$user_yop_btech=$row["passing_year_btech"];
			$user_total_re=$row["total_re"];
			$user_placement=$row["placement"];
			$user_company=$row["company"];
			$user_package=$row["package"];


        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_branch;  ?></td>
			<td><?php echo $user_college_id;  ?></td>
            <td><?php echo $user_gender;  ?></td>
            <td><?php echo $user_fname;  ?></td>
			<td><?php echo $user_mname;  ?></td>
			<td><?php echo $user_dob;  ?></td>
			<td><?php echo $user_mobile;  ?></td>
			<td><?php echo $user_email;  ?></td>
			<td><?php echo $user_address;  ?></td>
			<td><?php echo $user_city;  ?></td>
			<td><?php echo $user_state;  ?></td>
			<td><?php echo $user_sch_10th;  ?></td>
			<td><?php echo $user_board_10th;  ?></td>
			<td><?php echo $user_perc_10th;  ?></td>
			<td><?php echo $user_yop_10th;  ?></td>
			<td><?php echo $user_sch_12;  ?></td>
			<td><?php echo $user_board_12;  ?></td>
			<td><?php echo $user_perc_12;  ?></td>
			<td><?php echo $user_yop_12;  ?></td>
			<td><?php echo $user_sch_dip;  ?></td>
			<td><?php echo $user_diploma_agg;  ?></td>
			<td><?php echo $user_diploma_branch;  ?></td>
			<td><?php echo $user_yop_diploma;  ?></td>
			<td><?php echo $user_1;  ?></td>
			<td><?php echo $user_1_re;  ?></td>
			<td><?php echo $user_2;  ?></td>
			<td><?php echo $user_2_re;  ?></td>
			<td><?php echo $user_3;  ?></td>
			<td><?php echo $user_3_re;  ?></td>
			<td><?php echo $user_4;  ?></td>
			<td><?php echo $user_4_re;  ?></td>
			<td><?php echo $user_5;  ?></td>
			<td><?php echo $user_5_re;  ?></td>
			<td><?php echo $user_6;  ?></td>
			<td><?php echo $user_6_re;  ?></td>
			<td><?php echo $user_7;  ?></td>
			<td><?php echo $user_7_re;  ?></td>
			<td><?php echo $user_btech_agg;  ?></td>
			<td><?php echo $user_yop_btech;  ?></td>
			<td><?php echo $user_total_re;  ?></td>
			<td><?php echo $user_placement;  ?></td>
			<td><?php echo $user_company;  ?></td>
			<td><?php echo $user_package;  ?></td>
        </tr>

        <?php } ?>

    </table>

    <button class="btn btn-lg btn-success" id="export" data-export="export">Export</button>
	<footer class="container-fluid bg-4 text-center">
	<br>
 <center>Developed and Designed by Rajat Goyal (14IT056) & Vikas Samota (14IT053)</center>
</footer>
</body>
</html>