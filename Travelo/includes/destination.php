<div class="destinations" id="destinations">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Popular Destinations</h2></div>
				</div>
			</div>
			<div class="row destinations_row">
				<div class="col">
					<div class="destinations_container item_grid">

						
                        <!-- Destination -->
                       

                        
						






















                         <?php
                         $query = "SELECT * FROM search";
                         $destination_query = mysqli_query($connection,$query);
                         while($destination_row= mysqli_fetch_assoc($destination_query)){
                             $destination=$destination_row['destination'];
                             $city=$destination_row['city'];
                             $price=$destination_row['price'];
                             $picture=$destination_row['picture'];
 
                             ?>
 
                         <div class="destination item">
                             <div class="destination_image">
                                 <img src="images/<?php echo $picture?>" alt="">
                                 
                             </div>
                             <div class="destination_content">
                                 <div class="destination_title"><a href="#"><?php echo $destination?></a></div>
                                 <div class="destination_subtitle"><p><?php echo $city?></p></div>
                                 <div class="destination_price">From <?php echo $price?></div>
                             </div>
                             
                         </div>
                         
                            <?php }?>

					</div>
				</div>
			</div>
		</div>
	</div>
