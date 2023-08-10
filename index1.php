

<?php session_start();
if (isset($_POST['username']) && isset($_POST['pwd'])) {
    // Your code to process the username and password
} else {
    // Handle the case when the indexes are not set
}


?>

<?php
global $done;

include('nav2.php');

$db=mysqli_connect('localhost','root','','mywork');

if (mysqli_error($db)) {
    echo "Failed to connect ".mysqli_error();
}


?>



<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>HISTORY FOR EXPERTS</title>

    
</head>
<body style="background-color: #aabb22">
 
	<div class="col-md-12">
<div class="col-md-2" style="background-color:white">
  <b><u>Dashboard</u></b><br>
  
  <a href="devpage.php" class="btn btn-warning"><button>devepers history</button></a>
  <div>
    <b><u>BIOGRAPHY</u></b>
    <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    <p style="background-color: #dd33aa">======================</p>
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

<?php echo  $done['email'];?>

</div>
<div class="col-md-8" style="background-color: #bbaaff"><b><u style="background-color:#aabb22" >BELLOW THERE ARE PICTURES OF DEVICES WHICH WAS DISCOVERED BY DIFFERENT EXPERT</u></b> 
<table width="678" height="299" border="0">
  <tr>
    <td><a  href="new_index.php?page_id=10"><img src="image2/nature.jpg" width="209"/></a></td>
    <td><a  href="new_index.php?page_id=11"><img  src="image2/phone3.jpg"/></a></td>
     <td><a  href="new_index.php?page_id=12"><img  src="image2/camera3.jpg"/></a></td>
  </tr>
   <tr>
    <td><a  href="new_index.php?page_id=10"><img  src="image2/fdgdgss.jpg" width="219" height="145"/></a></td>
    <td><a  href="new_index.php?page_id=11"><img  src="image2/phone.jpg"/></a></td>
     <td><a  href="new_index.php?page_id=12"><img  src="image2/camera4.jpg" width="226" height="163"/></a></td>
  </tr>
</table>








</div>
<div class="col-md-2" class style="background-color:pink"><p><u><b>Right Side Bar</b></u></p>

<p>Search an expert </p>
 <!--------search-->
   <?php     
   $output=NULL;
   if (isset($_POST['submit'])) {

     $db=New MYSQLI('localhost','root','','mywork');
      $search=$db->real_escape_string($_POST['search']);
      $resultSet=$db->query("SELECT * FROM user WHERE name='$search'");
      if ($resultSet->num_row > 0) {
        while($row=$resultSet->fetch_assoc()){
          $name=$row['name'];
          $asset_num=$row['email'];
          $output="NAME:$name";
          echo $name;
        }
      }
      else{
        $output ="no results";
      }

   }



   ?>

     
     
          <form>
            <input type="text" value="" name="search" placeholder="search for expert" class="form-control">
            <input type="submit" name="submit" value="Search" class="btn btn-success" style="background-color: #086a73; color: white;">
          </form>

     


  <!--end of search-->

</form>
<i><u><b>OUR AMBITIONS </b></u></i>
<P> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
<p style="background-color: #ddff11">====KICK ON=====</p>
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.></p>
</div>

</div>


</body>
<div class="col-md-12">
		<footer style="text-align: center; background-color: #ddffaa">
		&COPY copyright 2018 <br>
		NSHIMIYIMANA Aaron
		</footer>
	</div>
</html>
