<?php

require_once 'connection.php';

/**
 * query to show all data
 */
$query = mysqli_query($conn, 'SELECT * FROM barang');

/**
 * show all data
 */
while($row = mysqli_fetch_assoc($query)) { ?>
    <ul>
        <li>kode barang : <?= $row['kdbarang'] ?></li>
        <li>kode barang : <?= $row['nmbrg'] ?></li>
        <li>kode barang : <?= $row['harga'] ?></li>
        <li>kode barang : <?= $row['kdkat'] ?></li>
    </ul>
    <br>
<?php
}
?>