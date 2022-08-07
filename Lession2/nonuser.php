<?php
include 'config.php';

$page_sl = "SELECT * FROM user GROUP BY id ASC LIMIT $begin,3";
$sql = mysqli_query($config,$page_sl);

    for ($i=1; $i < 4; $i++){
      while ( $row = mysqli_fetch_assoc($sql)){
       
  ?>

  <tbody style="border-height: 70px; text-align: center;">
       <tr>
         <?php
         if($row['level'] != 1){
        echo " <td>".$i."</td>";
        echo " <td>".$row['username']."</td>";
        echo " <td>".$row['email']."</td>";
        echo " <td> User </td>";

        ?>
    
    </tr>
      </tbody>

<?php 
}
  }
}
?>
