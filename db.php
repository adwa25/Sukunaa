<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codashop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// query untuk mengambil data top up
function get_top_up() {
    global $conn;
    $sql = "SELECT * FROM top_up";
    $result = $conn->query($sql);
    return $result;
}

// query untuk menambahkan data top up
function add_top_up($nominal) {
    global $conn;
    $sql = "INSERT INTO top_up (nominal) VALUES ('$nominal')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// query untuk menghapus data top up
function delete_top_up($id) {
    global $conn;
    $sql = "DELETE FROM top_up WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>