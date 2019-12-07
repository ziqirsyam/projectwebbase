<?php
    @session_start();
    include "../database/conndb.php";

    $userID = @$_POST['userID'];
    $itemID = @$_POST['itemID'];

    $sql = "DELETE FROM user WHERE user.userID = '$userID'";
    $sql2 = "DELETE FROM item WHERE item.itemID = '$itemID'";
    
    $query = mysql_query($sql, $connection);
    $query2 = mysql_query($sql2, $connection);

    if (!$query) {
        var_dump($sql);
        die('Could not enter data: ' . mysql_error());
    } else {
        header("location: deleteitem.php");
    }

    mysql_close($connection);

?>