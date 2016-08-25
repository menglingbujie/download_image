<?php
if(isset($_GET["filename"])){
  $filename = $_GET["filename"];
  $fileinfo = pathinfo($filename);
  header('Content-type: application/x-'.$fileinfo['extension']);
  header('Content-Disposition: attachment; filename='.$fileinfo['basename']);
  readfile($filename);
  exit();
}
