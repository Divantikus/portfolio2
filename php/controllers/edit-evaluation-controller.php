<?php
  include_once "../../php/functions_db.php";

  $studentId = $_POST["studentId"];
  $subjectId = $_POST["subjectId"];
  $evaluationId = $_POST["evaluationId"];

  $res = updateEvaluation($studentId, $subjectId, $evaluationId);

  header("Location: ../../pages/result-page.php?res=$res&type=updGrade");
?>