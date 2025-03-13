<?php
  include_once "../php/functions_db.php";
  $res = getAllStudents();

  for($i = 0; $i < count($res); $i++){
    $id = $res[$i]["id"];
    $firstName = $res[$i]["firstname"];
    $secondName = $res[$i]["secondname"];
    echo "<option value=\"$id\">$secondName $firstName</option>";
  }
?>