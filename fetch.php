<?php
include_once("connection.php");
error_reporting(0);
if(isset($_GET['search']))
{
$startdate=$_GET['startdate'];
$enddate=$_GET['enddate'];
$roll=$_GET['roll'];
$query=mysqli_query($con,"select * from fixed where Roll='$roll' && Date between '$startdate' and '$enddate' ");

$count=mysqli_num_rows();

$qy=mysqli_query($con,"select * from notf where  Roll='$Sroll' && Date between '$startdate' and '$enddate' ");

$counts=mysqli_num_rows();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body bgcolor="#D8D8D8"><center><b> <font size="5px">search report between two dates</font></center>
  


   <a href="lnk.php">
    Homepage
</a>
  <form action="" method="GET"><center>
      Start Date<input type="date" name="startdate">
      End Date<input type="date" name="enddate">
      Roll no.<input type="text" name="roll">
     <br><br>
      <input type="submit" name="search" values="Search Employee">
    </center>
    
     
    
  

    <?php
    if($count=="0")
    {
      echo 'no record found!';
    }
    else
    {
      while($row=mysqli_fetch_array($query))
             {
              
        
         ?>   
               <hr>
    <table> 
    <tr>
    <th>Institute Fees</th>
    <th>Hostel Fee</th>
    <th>Transportation Fees</th>
    <th>Remark</th>
    <th>Date</th>
    </tr>
    <tr>
    <td><input type= "text" style="text-align:center"; name = "Institute_Fees'"  value= " <?php echo $row ['Institute_Fees']; ?> " disabled ></td>
    <td><input type= "text" style="text-align:center;" name = "Hostel_Fee"   value= " <?php echo $row ['Hostel_Fees']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "Transportation_Fees"    value= " <?php echo $row ['Transportation_Fees']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "Remark" value= " <?php echo $row ['Remark']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "date" value= " <?php echo $row ['Date']; ?> "disabled ></td>
    </tr>
          
        
    </table>



<?php
    if($counts=="0")
    {
      echo 'no record found!';
    }
    else
    {
      while($row=mysqli_fetch_array($qy))
             {
              
        
         ?>   
               <hr>
    <table> 
    <tr>
    <th>Food</th>
    <th>Cloth</th>
    <th>Movie</th>
    <th>Recharge</th>
    <th>Sports</th>
    <th>Gadgets</th>
    <th>Books</th>
    <th>Tourism</th>
  </tr>
  
    <tr>
    <td><input type= "text" style="text-align:center"; name = "Food"  value= " <?php echo $row ['Food']; ?> " disabled ></td>
    <td><input type= "text" style="text-align:center;" name = "Clothes"   value= " <?php echo $row ['Clothes']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "Movie"    value= " <?php echo $row ['Movie']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "Recharge" value= " <?php echo $row ['Recharge']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "Sports" value= " <?php echo $row ['Sport']; ?> "disabled ></td>
    <td><input type= "text" style="text-align:center"; name = "Gadgets"  value= " <?php echo $row ['Gadget']; ?> " disabled ></td>
    <td><input type= "text" style="text-align:center;" name = "Books"   value= " <?php echo $row ['Book']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "tourism"    value= " <?php echo $row ['Tourism']; ?> " disabled></td>
  </tr>

  <tr>
    <th>Events</th>
    <th>Remark</th>
    <th>Date</th>
    </tr>
  <tr>
    <td><input type= "text" style="text-align:center;" name = "events" value= " <?php echo $row ['Event']; ?> " disabled></td>
    <td><input type= "text" style="text-align:center;" name = "Remark" value= " <?php echo $row ['Remark']; ?> "disabled ></td>
    <td><input type= "text" style="text-align:center;" name = "date" value= " <?php echo $row ['Date']; ?> "disabled ></td>
    </tr>
          
        
    </table>



    
  </form>
</center>
    </body></html>

    <?php   
     
                
   echo "</font>";
         //include ("first_next_code.php"); 
   
  }}
}
   //include ("first_next_code.php");
 
  //include ("first_next_code.php");
  
  //echo "<br><br>
 //<center>".
 '<button onclick="myFunction()">'."Print report".'</button>

<script>'."
function myFunction() {
   window.print();
}".'
</script>'."</center>
<br>
<center>".'
<a href="home.php">'.'<input type="button" value="EXIT">'."</a></center>";
 }
   ?>
   

