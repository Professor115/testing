<?php 
include("config.php");
        if(isset($_POST['send'])){
            $msg = $_POST['text'];
            $insert = "INSERT INTO `messages` (`msg`, `type`) VALUES ('$msg','msg')";
            $sql=mysqli_query($sql, $insert);
            header("location: chat.php");
        }

        if(isset($_POST['send2'])){
            $img = $_FILES['photo'];
            $img_lo = $_FILES['photo']['tmp_name'];
            $img_name = $_FILES['photo']['name'];
            $img_up = "imgs2/".$img_name;
            $insert = "INSERT INTO `messages` (`msg`, `type`) VALUES ('$img_up','img')";
            $sql=mysqli_query($sql, $insert);

            if(move_uploaded_file($img_lo, "imgs2/".$img_name)){
                header("location: chat.php");
            }else{
                echo "<script>alert('$img')</script>";
            }
        }
    ?>