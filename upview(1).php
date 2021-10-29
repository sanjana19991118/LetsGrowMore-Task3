<!Doctype html>
<html>
    <head>
           <style>
               body{
               margin-top:40px;
               background-image:url("orange.jpg");
               background-repeat:no-repeat;
               background-size:cover;
              }
               h1{
                   font-size:40px;
                   color:black;
                   text-align:center;
               }
               body{
                       background-color:bisque;
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
                    background-color:black;
                    border:5px solid  black;
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
$mrk = $_POST['marks'];
$sub = $_POST['sub'];
if(strpos($_POST["type"],"1")==10){
$upd1 = "UPDATE intr1 set marks=$mrk where subject='$sub' and name='$nm'";
$result = mysqli_query($conn,$upd1);
}

else if(strpos($_POST["type"],"2")==10){
$upd2 = "UPDATE intr2 set marks=$mrk where subject='$sub' and name='$nm'";
$result = mysqli_query($conn,$upd2);
}

else if(strpos($_POST["type"],"3")==10){
$upd3 = "UPDATE intr3 set marks=$mrk where subject='$sub' and name='$nm'";
$result = mysqli_query($conn,$upd3);
}

else if(strpos($_POST["type"],"A")==0){
$upd4 = "UPDATE assign set marks=$mrk where subject='$sub' and name='$nm'";
$result = mysqli_query($conn,$upd4);
}
$sql = "SELECT sem from slist where name='$nm'";
$res = mysqli_query($conn,$sql);

?>
<?php if($result){ ?>
      <p><?php echo "Updated Successfully !"; ?></p>
       <?php }
    else{
       echo "Update not possible";
 } ?>
<h2>Updated Marks:-</h2><br>
<div class="admin-div">
<form action="upview.php" method="POST">
<label style="color:white;" for="nm" >Name : </label>
<input type="text" id="nm" name="nm" value="<?php echo $_POST['nm']; ?>"><br><br>
<label   style="color:white;" for="sem">Semester : </label>
<input type="text" id="sem" name="sem" value="<?php if($row = mysqli_fetch_array($res)){ echo $row['sem']; } ?>"><br><br>
<input type="submit" value="View Updated Marks" id="btn">
</form>
</div>
<br><br>
<p  style="margin-top:100px;background-color:black;color:white;text-align:center;font-size:20px;"> For any quries contact +917865894578</p>
        


</body>
</html>
