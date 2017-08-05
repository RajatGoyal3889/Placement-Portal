<?php

$dbcon=mysqli_connect("164.132.190.162","placeme1_new","qwerty");

mysqli_select_db($dbcon,"placeme1_users");
$table = "CREATE TABLE login(id int(6) AUTO_INCREMENT PRIMARY KEY, username varchar(10), password varchar(50), acc_type varchar(50))";
if ($dbcon->query($table) === TRUE) {
    echo "Table Login created successfully<br>";
} else {
    echo "Error creating table: " . $dbcon->error;
}
$table2 = "CREATE TABLE student(S_no int(6) AUTO_INCREMENT PRIMARY KEY, name varchar(50), college_id varchar(10), branch varchar(50), gender varchar(7), father_name varchar(50), mother_name varchar(50),
dob varchar(20), mobile_number varchar(11), email varchar(100), address varchar(200), city varchar(20), state varchar(20),
school_10th varchar(100), board_10th varchar(50), percentage_10th varchar(10), passing_year_10th varchar(4), 
school_12th varchar(100), board_12th varchar(50), percentage_12th varchar(10), passing_year_12th varchar(4), 
school_dip varchar(100), diploma_agg varchar(10), diploma_branch varchar(50), passing_year_diploma varchar(4),
first_sem varchar(10), first_sem_re varchar(10) DEFAULT '0',
second_sem varchar(10), second_sem_re varchar(10) DEFAULT '0',
third_sem varchar(10), third_sem_re varchar(10) DEFAULT '0',
fourth_sem varchar(10), fourth_sem_re varchar(10) DEFAULT '0',
fifth_sem varchar(10), fifth_sem_re varchar(10) DEFAULT '0',
sixth_sem varchar(10), sixth_sem_re varchar(10) DEFAULT '0',
seventh_sem varchar(10), seventh_sem_re varchar(10) DEFAULT '0',
b_tech_aggregate varchar(10), passing_year_btech varchar(4),
total_re varchar(10) DEFAULT '0',
placement varchar(20) DEFAULT 'not placed', company varchar(100) DEFAULT 'N/A', package varchar(20) DEFAULT 'none')";
if ($dbcon->query($table2) === TRUE) {
    echo "Table Student created successfully";
} else {
    echo "Error creating table: " . $dbcon->error;
}
?>