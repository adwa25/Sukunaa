<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nominal = $_POST['nominal'];

    if (add_top_up($nominal)) {
        echo "Top up berhasil!";
    } else {
        echo "Gagal melakukan top up!";
    }
}
?>