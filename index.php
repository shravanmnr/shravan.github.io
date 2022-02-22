<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: rgb(42, 44, 37);
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: rgb(42, 44, 37);
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;AI
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #575a53;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(119, 126, 190);
  padding: 10px;
  text-align: center;
  color: rgb(15, 3, 3);
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>PORTFOLIO</h2>
<hr>191106031</hr>



<header>
      <h2>SHRAVAN MUNIYOOR     <img src="propic.jpg" alt="Girl in a jacket" width="300" height="300"> </h2>
</header>

<section>
  <nav style="background-color: rgb(42, 44, 37);">
    <ul>
      <li><a href="index.html">About Me</a></li>
      


      
    
    </ul>
  </nav>
  
  <article>
    <h1>GOA COLLEGE OF ENGINEERING</h1>
    <p>Who am I
      <br>
        My name is Shravan muniyoor.
        I am a student at Goa college of Engineering. 
        I am in the department of Information Technology.
        Finished my Higher secondary from MUshtifund Highersecondary School.
        I finished my Highschool From kendriya vidyalaya Bambolim camp.
      </p>  
        
  </article>
</section>

<footer>
  <p>Goa Engineering College</p>
</footer>

</body>




/* Connection
<?php
 $dbhost = "localhost";
 $dbuser = "Jitesh";
 $dbpass = "_zT[2Hoj1Q0j_kN-";
 $db = "Practice";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>

form
<html>
<body>    
<h4>Student Form</h4>
<form action="Practice.php" method="post">
  Roll no:<input type="text" name="sid"/><br><br>
  First Name:<input type="varchar" name="fname"/><br><br>
  Last Name:<input type="varchar" name="lname"/><br><br>
  Email:<input type="varchar" name="email"/><br><br>
  <input type="submit" name="SubmitButton"/>
</form>    
</body>
</html>

insert
<html>
<body>
<?php
include "dbconnect.php";
if(isset($_POST['SubmitButton'])){ 
  $rollno =  $_REQUEST['sid'];
  $first_name =  $_REQUEST['fname'];
  $last_name = $_REQUEST['lname'];
  $email = $_REQUEST['email'];
  $sql = "INSERT INTO student (sid, fname, lname, email)
  values( '$rollno', '$first_name', '$last_name', '$email' )";
  if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?> 
</body>
</html>
search
<?php
 include 'dbconnect.php';
 echo "<br>";
 $sql = "SELECT sid, fname, lname FROM student";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "rollno: " . $row["sid"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }
 } else {
    echo "0 results";
 }
 mysqli_close($conn);
?>

aws
Step 1: Create an AWS account and get sign in and go to all services.
Step 2: Create an S3 bucket and upload files of the website.
Step 3: Create an IAM role with Amazon S3 full access permission.
Step 4: Create Key pairs, and create SSH group here or do it in instance creation.
Step 5: Launch an EC2 Instance with free tire of t2.micro link Key Pairs and create security group of SSH, HTTP and HTTPS and Launch Instance.
Step 6: Copy IP Address and Download Putty.
Step 7: Install Putty link Key pairs and IP address and run the following SSH command
•	sudo su
•	yum update -y
•	yum install httpd -y
•	chkconfig httpd on
•	cd/var/www/html
•	aws s3 syns s3://bucketname/cd/var/www/html
•	service httpd start
Step 8: Now your website is hosted using the IP address open the website.*/

