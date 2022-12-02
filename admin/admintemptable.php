<!-- Note: Inalis ko muna yung mga table since nagkakagulo sila nung accordion, di ako makaprogress dahil don,
lagay ko muna sa dulo ng prio ko. thanks! -->

<!-- Table for Cars -->
        <div class='table-responsive col-6'>
            <?php          
           $query = "SELECT * FROM car";
           $result = mysqli_query($conn, $query);
           if ($result->num_rows > 0) {
             echo "
             <table class='table table-striped table-sm'>
             <thead>
               <tr>
                 <th scope='col'>Plate Number</th>
                 <th scope='col'>Car Brand</th>
                 <th scope='col'>Car Model</th>
                 <th scope='col'>Year Made</th>
                 <th scope='col'>Car Color</th>
                 <th scope='col'>Action</th>
               </tr>
             </thead>";

             while($row = mysqli_fetch_assoc($result)){ 
               ?>
               <tr>
                 <td><?php echo $row['car_platenum'];?></td>
                 <td><?php echo $row['car_brand'];?></td>
                 <td><?php echo $row['car_mod'];?></td>
                 <td><?php echo $row['car_year'];?></td>
                 <td><?php echo $row['car_color'];?></td>
                 <td>
                     <a href="carDelete.php?car_platenum=<?php echo $row['car_platenum']?>" class="btn btn-danger btn-sm">
                       <i class="far fa-trash-alt"></i>
                     </a>
                 </td>
               </tr>
             <?php
             }
             echo "</table>";
           } else {
             echo "0 results";
           }
           $conn->close();
           ?>
        </div>








           