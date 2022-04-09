<?php
    require_once('dbconfig.php');
    $db = new Database();

    if($_SERVER['REQUEST_METHOD']=='GET'){
        // productID,productName,productPrice
        $accountSQL = 'SELECT * FROM tbl_category';
        $result = $db->selectAll($accountSQL);
        echo json_encode($result);
    }else{
        http_response_code(405);
    }
?>