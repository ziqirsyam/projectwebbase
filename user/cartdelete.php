<?php
    @session_start();
    include "../database/conndb.php";

    $cartID = @$_POST['cartID'];

    $sql = "DELETE FROM cart WHERE cart.cartID = '$cartID'";
    
    $query = mysql_query($sql, $connection);

    if (!$query) {
        var_dump($sql);
        die('Could not enter data: ' . mysql_error());
    } else {
        header("location: cart.php");
    }

    mysql_close($connection);

?>