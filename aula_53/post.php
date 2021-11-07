<?php

if ($_POST['name']) {
  $name = "<p style='font-size: 20px'>Nombre: " . $_POST['name'] . "</p>";
  echo $name;
}

if ($_POST['surname']) {
  $surname = "<p style='font-size: 20px'>Appelido: " . $_POST['surname'] . "</p>";
  echo $surname;
}

echo "<button style='font-size: 17px; padding: 10px'><a style='text-decoration: none; color: black;' href='javascript:history.go(-1)'>Voltar</a></button>";
