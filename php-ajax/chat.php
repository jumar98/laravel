<?php
    include 'conexion.php';
    $query = "select * from chat order by id desc";
    $run = $objCon->conexion->query($query);

    while($row = $run->fetch_array()) :
?>
    <div id="chat_data">
        <span style="color:green"><?php echo $row['name']; ?>:</span>
        <span style="color:red"><?php echo $row['message']; ?></span>
        <span style="color:blue; float:right"><?php echo $row['date']; ?></span>
    </div>
    <?php endwhile; ?>