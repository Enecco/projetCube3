<?php
require_once '../../models/headers.php';

$conn = new mysqli('localhost', 'root', '', 'enekatestream');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = $conn->query("SELECT * FROM `user` WHERE `ID_USER` = '$id'");
    $data = $sql->fetch_assoc();
  } else {
    $data = array();
    $sql = $conn->query("SELECT * FROM user");
    while ($d = $sql->fetch_assoc()) {
      $data[] = $d;
    }
  }

  exit(json_encode($data));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents("php://input"));
  echo $data->username;
  $sql = $conn->query("INSERT INTO `user` (username, password, register_date) VALUES ('".$data->username."', '".$data->password."', '".$data->register_date."')");

  if ($sql) {
      $data->ID_USER = $conn->insert_id;
      exit(json_encode($data));
  } else {
      exit(json_encode(array('status' => 'error')));
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
  if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("UPDATE `user` SET  username = '".$data->username."', password = '".$data->password."', register_date = '".$data->register_date."' WHERE `ID_USER` = '$id'");
    if ($sql) {
      exit(json_encode(array('status' => 'success')));
    } else {
      exit(json_encode(array('status' => 'error')));
    }
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = $conn->query("DELETE FROM `user` WHERE `ID_USER` = '$id'");
    if ($sql) {
      exit(json_encode(array('status' => 'success')));
    } else {
      exit(json_encode(array('status' => 'error')));
    }
  }
}
