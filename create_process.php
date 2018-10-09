<?php include('connection.php');

    $sql = "INSERT INTO addresslist (nama,alamat,kodepos,telpon) VALUES ('".$_POST["nama"]."','".$_POST["alamat"]."','".$_POST["kodepos"]."','".$_POST["telpon"]."');";
    
    if($con->query($sql)===TRUE)
    {
        header("Location: index.php");
    }
    else echo "Error";
?>
