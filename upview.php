<html>
<head>
<style>
body{
margin-top:40px;
background-image:url("orange.jpg");
background-repeat:no-repeat;
background-size:cover;
}
p{
font-size:30px;
font-weight:bold;
font-style:italic;
margin-left:100px;
color: black;
}
h2{
margin-left:100px;
color: black;
}
table{
  border: 10px solid black;
  color:black;
  margin-left:100px;
  width:800px;
}
 th {
  border: 2px solid black;
  font-size:25px;
  color:black;
  padding:10px;
}
td {
  border: 2px solid black;
  font-size:20px;
  color:black;
  padding:8px;
  text-align:center;
  font-weight:bold;
}
a{
text-decoration:none;
font-size:20px;
color:white;
margin-left:670px;
}
a:hover{
text-decoration:underline;
font-weight:bold;
}

h1{
  font-size:40px;
  color:black;
  text-align:center;
 }
  body{
     background-color:bisque;
  }
  .nav{
       background-color:black;
       padding:20px;
       width:100%;
    }

.nav ul li{
  display:inline;
  padding:5px;
  margin:2px;
}
ul li{
 list-style-type: none;
 font-size:25px;
}
.nav a{
  text-decoration:none;
  color:aliceblue;
  font-style:bold; 
   margin:10px;
    padding:10px;
    border:3px solid aliceblue;
}

 a:hover{
    background-color: azure;
    color:black;          
 };

.admin-div{
                    
}

.login{
  position:relative;
  top:50px;
  left:200px;
  width:800px;
}               

.admin-div{
     padding:50px;
     width:50%;
     margin:auto;
     background-color:white;
     border:5px solid  black;
     position:relative;
}
button{
 margin:10px;
 padding:10px;
 background-color:rgb(211, 202, 202);
 text-align: center;
 padding:20px;
 }
 .footer{
     background-color:brown;
     width:100%;
     top:100px;
     

}
.footer a {
     color:beige;
 
  }
     
</style>
</head>
<body>
<h1>Student Result Management System</h1>
<body>
<?php
// Create connection
$conn = new mysqli("localhost","root","","srms");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$nm = $_POST['nm'];
$sem = $_POST['sem'];
$sql = "SELECT sem FROM slist where name='$nm'";
$res = mysqli_query($conn,$sql);

$sql1 = "SELECT subject,marks FROM intr1 where name='$nm'";
$res1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT subject,marks FROM intr2 where name='$nm'";
$res2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT subject,marks FROM intr3 where name='$nm'";
$res3 = mysqli_query($conn,$sql3);

$sql4 = "SELECT subject,marks FROM assign where name='$nm'";
$res4 = mysqli_query($conn,$sql4);

?>
<br>
<h2>Name : <?php echo $nm; ?></h2>
<h2>Semester : <?php echo $sem;  ?></h2>
<p>Internal Assessment 1</p>
<table>
<tr>
<th>Subject</th>
<th>Marks</th>
</tr>
<?php while($row = mysqli_fetch_array($res1)){ ?>
<tr>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['marks'];?></td>
</tr>
<?php } ?>
</table><br><br>
<p>Internal Assessment 2</p>
<table>
<tr>
<th>Subject</th>
<th>Marks</th>
</tr>
<?php while($row = mysqli_fetch_array($res2)){ ?>
<tr>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['marks'];?></td>
</tr>
<?php } ?>
</table><br><br>
<p>Internal Assessment 3</p>
<table>
<tr>
<th>Subject</th>
<th>Marks</th>
</tr>
<?php while($row = mysqli_fetch_array($res3)){ ?>
<tr>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['marks'];?></td>
</tr>
<?php } ?>
</table><br><br>
<p>Assignment</p>
<table>
<tr>
<th>Subject</th>
<th>Marks</th>
</tr>
<?php while($row = mysqli_fetch_array($res4)){ ?>
<tr>
<td><?php echo $row['subject'];?></td>
<td><?php echo $row['marks'];?></td>
</tr>
<?php } ?>
</table>
<br><br>

<br>
<a href="http://localhost/internship/LGM/Task%203/" style="color:black; text-decoration:none;  border: 2px solid black;">Back to Home Page</a><br><br>

  
 <?php $conn->close(); ?>
 <div class="footer">
 <p  style="margin-left:0;background-color:black;color:white;text-align:center;font-size:20px;"> For any quries contact +917865894578</p>
 </div>
</body>
</html>