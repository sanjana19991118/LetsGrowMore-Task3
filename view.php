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
color:black;
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
h1{
   font-size:40px;
   color:black;
   text-align:center;
 }

.nav{
   background-color:black;
   padding:20px;
   width:100%;
 }
 .nav ul {
                   
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
    }
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
      background-color:black;
      border:5px solid black;
      position:relative;
 }
 button{
       margin:10px;
       padding:10px;
       background-color:rgb(211, 202, 202);
       text-align: center;
     }
</style>
</head>
<body>
<h1>Student Result Management System</h1>
          
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
<h2>Semester : <?php if($row = mysqli_fetch_array($res)){ echo $row['sem']; } ?></h2>
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
<hr style="background-color:white;margin-left:35px;margin-right:35px;min-height:2.5px;">
<br>
<p>Update Marks Here-</p><br>
<div class="admin-div">
<form action="upview(1).php" method="POST" >
<label style="color:white;"for="nm" >Name : </label>
<input type="text" id="nm" name="nm" value="<?php echo $_POST['nm']; ?>"><br><br>
<label  style="color:white;" for="type" >Internals 1 / Internals 2 / Internals 3 / Assignment : </label>
<input type="text" name="type" id="type"><br><br>
<label  style="color:white;" for="sub" >Subject : </label>
<input type="text" name="sub" id="sub"><br><br>
<label style="color:white;" for="marks" >Marks : </label>
<input type="number" name="marks" id="marks"><br><br>
<button onclick="func()">Update Marks</button><br>
</form><br>
</div>
<script>
function func() {
  alert("Updated Successfully!");
}
</script>

<?php $conn->close(); ?>
<p  style="margin-left:0;background-color:black;color:white;text-align:center;font-size:20px;"> For any quries contact +917865894578</p>
        
</body>
</html>