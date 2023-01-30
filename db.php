<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'cursos'
) or die(mysqli_erro($mysqli));

?>