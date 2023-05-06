<?php

// buat json dari data di database penjualan

require_once 'connection.php';

/**
 * query to show all data
 */
$query = mysqli_query($conn, 'SELECT * FROM barang');

/**
 * create empty array
 * assign query data to array
 */
$arr = [];
while($fetch = mysqli_fetch_assoc($query)) {
    $arr[] = $fetch;
}

/**
 * encode to json
 */
$data = json_encode($arr);

/**
 * define http header content-type to json
 */
header('Content-Type: application/json');

/**
 * show json
 */
echo $data;

?>
