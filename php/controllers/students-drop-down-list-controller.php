<?php
  include_once "../php/functions_db.php";
  include_once "../php/functions/create-drop-down-list-options.php";

  $res = getAllStudents();

  createDropDownListOptions($res, "id", ['firstname', 'secondname']); 
?>