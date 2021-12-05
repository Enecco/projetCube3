<?php
require_once '../../models/headers.php';

$conn = new mysqli('localhost', 'root', '', 'enekatestream');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $sql = $conn->query("SELECT * FROM `contenu` WHERE `ID_contenu` = '$id'");
    $data = $sql->fetch_assoc();
  } else {
    $data = array();
    $sql = $conn->query("SELECT * FROM contenu");
    while ($d = $sql->fetch_assoc()) {
      $data[] = $d;
    }
  }

  exit(json_encode($data));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents("php://input"));
  echo $data->titre;
  $sql = $conn->query("INSERT INTO `contenu` (titre, date_film, image) VALUES ('".$data->titre."', '".$data->date_film."', '".$data->image."')");

  if ($sql) {
      $data->ID_contenu = $conn->insert_id;
      exit(json_encode($data));
  } else {
      exit(json_encode(array('status' => 'error')));
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
  if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $data = json_decode(file_get_contents("php://input"));
    $sql = $conn->query("UPDATE `contenu` SET  titre = '".$data->titre."', date_film = '".$data->date_film."', image = '".$data->image."' WHERE `ID_contenu` = '$id'");
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
    $sql = $conn->query("DELETE FROM `contenu` WHERE `ID_contenu` = '$id'");
    if ($sql) {
      exit(json_encode(array('status' => 'success')));
    } else {
      exit(json_encode(array('status' => 'error')));
    }
  }
}
