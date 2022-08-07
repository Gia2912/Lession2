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
        echo " <td>".$i."</td>";
        echo " <td>".$row['username']."</td>";
        echo " <td>".$row['email']."</td>";
        if($row['level'] == 1){
        echo " <td> Admin </td>";
      } else { echo "<td> User </td>"; }
        ?>
        <td>
       <a href="sua.php?id=<?php echo $row['id'];?>"><img src="./img/write.png" style="width: 20px; height: 20px;"> </a>
       <a href="xoa.php?id=<?php echo $row['id'];?>"><img src="./img/minus.png" style="width: 20px; height: 20px;"> </a>
        <a href="copy.php?id=<?php echo $row['id'];?>"><img src="./img/document.png" style="width: 20px; height: 20px;"></a>
        <a href="view.php?id=<?php echo $row['id'];?>"><img src="./img/view.png" style="width: 20px; height: 20px;"></a>
    <td>  
    </tr>
      </tbody>

<?php 
  }
} 
?>
