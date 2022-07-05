   <?php
       if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
            </tbody>
          <th><?php echo $row['fid'];?></th>
           <th><?php echo $row['name']; ?>  </th>
           <th><?php echo $row['weight'];?></th>
           <th><?php echo $row['price'];?></th>
           <th><a class="btn btn-outline-primary" href="update.php?id=<?php echo $row['fid'];?>">edit</a></th>
           <th><a class="btn btn-outline-danger"href="delete.php?id=<?php echo $row['fid'];?>">delete</a></th>
           </tr>
