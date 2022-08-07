<?php
include 'config.php';
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
       
  ?>

  <tbody style="border-height: 70px; text-align: center;">
       <tr>
         <?php
         if($user['level'] != 1){
        echo " <td>1</td>";
        echo " <td>".$user['username']."</td>";
        echo " <td>".$user["email"]."</td>";
        echo " <td> User </td>";
        ?>
        <td>
       <a href="sua.php?id=<?php echo $user['id'];?>"><img src="./img/write.png" style="width: 20px; height: 20px;"> </a>
       <a href="xoa.php?id=<?php echo $user['id'];?>"><img src="./img/minus.png" style="width: 20px; height: 20px;"> </a>
        <a href=""><img src="./img/document.png" style="width: 20px; height: 20px;"></a>
        <a href="view.php?id=<?php echo $user['id'];?>"><img src="./img/view.png" style="width: 20px; height: 20px;"></a>
    <td>  
    </tr>
      </tbody>

<?php 

  
}
?>
