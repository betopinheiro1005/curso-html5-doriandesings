<?php

if ($_GET['name']) {
  $name = "<p style='font-size: 20px'>Nombre: " . $_GET['name'] . "</p>";
  echo $name;
}

if ($_GET['surname']) {
  $surname = "<p style='font-size: 20px'>Appelido: " . $_GET['surname'] . "</p>";
  echo $surname;
}

echo "<button style='font-size: 17px; padding: 10px'><a style='text-decoration: none; color: black;' href='javascript:history.go(-1)'>Voltar</a></button>";
