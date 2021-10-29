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
font-size:40px;
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
td button{
text-decoration:none;
background-color:purple;
color:white;
font-size:20px;
}
td button:hover{
background-color:white;
color:purple;
}
h1{
   font-size:40px;
   color:black;
   text-align:center;
               }
              

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
                    background-color:black ;
                    border:5px solid black;
                    position:relative;
                    
                }

                
                hr{
                    
                    background-color:brown;
                    width:30%;
                
                }


                button{
                    margin:10px;
                    padding:10px;
                    background-color:rgb(211, 202, 202);
                    text-align: center;
                }


                .footer{
                      background-color:black;
                      position:relative;
                      padding:10px;
                      top:45px;

                }
                .footer a{
                    color:beige;
                    text-decoration:none;
                }

</style>
</head>
<body>
<h1>Student Result Management System</h1>
<p>Welcome <?php echo $_POST["namee"]; ?> !</p>
<p>Students List</p>
<?php
// Create connection
$conn = new mysqli("localhost","root","","srms");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if((strpos($_POST["pass"],"CSE")==3 && strpos($_POST["pass"],"M")==0) || (strpos($_POST["pass"],"CSE")==3 && strpos($_POST["pass"],"S")==0)){
$sql = "SELECT * from slist where sem='MSc,1st Sem'";
$res = mysqli_query($conn,$sql);
}
if((strpos($_POST["pass"],"CSE")==3 && strpos($_POST["pass"],"H")==0) || (strpos($_POST["pass"],"CSE")==3 && strpos($_POST["pass"],"N")==0)){
$sql = "SELECT * from slist where sem='BE,3rd Sem'";
$res = mysqli_query($conn,$sql);
}
if(strpos($_POST["pass"],"ADM")==3){
$sql = "SELECT * from slist";
$res = mysqli_query($conn,$sql);
}
if(strpos($_POST["pass"],"ECE")==3 && strpos($_POST["pass"],"D")==0){
$sql = "SELECT * from slist where sem='MSc,3rd Sem'";
$res = mysqli_query($conn,$sql);
}
if((strpos($_POST["pass"],"ECE")==3 && strpos($_POST["pass"],"K")==0) || (strpos($_POST["pass"],"ECE")==3 && strpos($_POST["pass"],"M")==0)){
$sql = "SELECT * from slist where sem='BE,5th Sem'";
$res = mysqli_query($conn,$sql);
}
if(strpos($_POST["pass"],"MEC")==3 && strpos($_POST["pass"],"R")==0){
$sql = "SELECT * from slist where sem='BE,1st Sem'";
$res = mysqli_query($conn,$sql);
}
if((strpos($_POST["pass"],"MEC")==3 && strpos($_POST["pass"],"G")==0) || (strpos($_POST["pass"],"MEC")==3 && strpos($_POST["pass"],"A")==0)){
$sql = "SELECT * from slist where sem='BE,7th Sem'";
$res = mysqli_query($conn,$sql);
}
?>
  <table>
  <tr>
  <th><u>Name</u></th>
  <th><u>Semester</u></th>
  </tr>
<?php
  while($row = mysqli_fetch_array($res)) {
?>
  <tr>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['sem']; ?></td>
  </tr>
<?php
    }
$conn->close();
?>
</table>
<br><br>
<p>Student details:-</p><br>
<div class="admin-div" >
<form action="view.php" method="POST">
<label style="color:white;" for="nm">Name : </label>
<input type="text" id="nm" name="nm"><br><br>
<input type="submit"  style="width:100px;height:30px;" name="enter" value="Enter" >
</form>
</div>
<br>
<p  style="background-color:black;color:white;text-align:center;font-size:20px;"> For any quries contact +917865894578</p>
        
  
    
</body>
</html>