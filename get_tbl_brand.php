<?php
require_once('dbconfig.php');
$db = new Database();

if($_SERVER['REQUEST_METHOD']=='GET'){
    $accountSQL = 'SELECT * FROM tbl_brand';
    $result = $db->selectAll($accountSQL);
    echo json_encode($result);
}else{
    http_response_code(405);
}

?>