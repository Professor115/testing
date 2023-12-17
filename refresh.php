
<ul>
<?php 
    include("config.php");
    $res = mysqli_query($sql, "SELECT * FROM `messages`");
    while($row = mysqli_fetch_array($res)){

        $time = $row['time'];
        $msg = $row['msg'];

        if($row['type']=="msg"){
            echo "
                <li><p>$row[time]</p><div class='msg'>$row[msg]</div></li>
            ";
        }

        if($row['type']=="img"){
            echo "
                <li><div class='img'><img src='$row[msg]'></div></li>
            ";
        }
    }
?>


</ul>

