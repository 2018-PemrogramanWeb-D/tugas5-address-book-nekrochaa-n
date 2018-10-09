<?php include('connection.php');

    $sql = "UPDATE addresslist SET nama= '$_POST[nama]', alamat = '$_POST[alamat]', kodepos = $_POST[kodepos] , telpon = $_POST[telpon] WHERE id = '$_POST[id]' ";

    if($con->query($sql)===TRUE)
    {
        header("Location: index.php");
    }
    else echo "Error";
?>
