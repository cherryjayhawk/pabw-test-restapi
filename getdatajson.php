<?php

// mengambil dan menampilkan data API (json)

/**
 * get contents from API's URL
 */
$source = file_get_contents('http://localhost/test-rest-php/datajson.php');

/**
 * decode json to php object
 */
$data = json_decode($source);

/**
 * Show the data
 */
foreach ($data as $row) { ?>
    <ul>
        <li>kode barang : <?= $row->kdbarang ?></li>
        <li>nama barang : <?= $row->nmbrg ?></li>
        <li>harga barang : <?= $row->harga ?></li>
        <li>kategori barang : <?= $row->kdkat ?></li>
    </ul>
    <br>
<?php
}
?>  
