<?php
include('hffolder/header2.php');
 echo "I am stage 1 <br/>";

include('db/database.php');

if(isset($_POST['submit'])) {
    $q=$_POST['q'];
    echo $q;
    echo "I am stage 2 <br/>";



$result=mysqli_query($con,"SELECT * FROM hotel WHERE  hotelname LIKE '%$q%' OR   loc LIKE '%$q%' ");
echo "I am stage 3 <br/>";
} 



?>
  

  <?php 
  if(mysqli_num_rows($result)>0) {
while($rows=mysqli_fetch_assoc($result)){
    $id= $rows['id'];
    $name = $rows['hotelname'];
    $reason1= $rows['reason1'];
    $reason2= $rows['reason2'];
    $reason3= $rows['reason3'];
    $author= $rows['author'];
    $loc= $rows['loc'];
    
	
	?>
	
	<div>
    <a style="text-decoration: none;" href=<?php echo "single.php?id="; echo $id; ?>>
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title"><?php echo"$loc"?></div>
                        <h2><?php echo "$name"?></h2>
                        <p><?php echo"$reason1"?></p>
                        <p class="testimonial-text"><?php echo"$reason2"?> </p>
                        <div class="testimonial-author"><?php echo"$author"?></div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                       
                    <?php
							echo '<img  class="img-fluid" alt="alternative" src="data:image;base64,'.base64_encode($rows['photo']).'">';
		    		?>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
</a>
<?php 
}
}
else{
    echo "<h1> <br/> <br/> <br/> <br/>NO POST FOUND</h1>";}
    ?>
   


    
             

    
    
    <?php 
   
    ?>