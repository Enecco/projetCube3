<?php
require_once '../../models/headers.php';

$conn = new mysqli('localhost', 'root', '', 'enekatestream');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = $conn->query("SELECT * FROM `contact` WHERE `ID_contact` = '$id'");
    $data = $sql->fetch_assoc();
  } else {
    $data = array();
    $sql = $conn->query("SELECT * FROM contact");
    while ($d = $sql->fetch_assoc()) {
      $data[] = $d;
    }
  }

  exit(json_encode($data));
}
