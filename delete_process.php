<?php include('connection.php');

    $sql = "DELETE from addresslist WHERE id = '$_POST[id]' ";

    if($con->query($sql)===TRUE)
    {
        header("Location: index.php");
    }
    else echo "Error";
?>
