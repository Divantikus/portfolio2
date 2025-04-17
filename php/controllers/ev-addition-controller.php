<?php
  include_once "../../php/functions_db.php";
  $studentId = $_POST['student'];
  $subjectId = $_POST['subject'];
  $evaluationId = $_POST['evaluation'];
  $res = addEvaluation($studentId, $subjectId, $evaluationId);
  header("Location: ../../pages/result-page.php?res=$res&type=addEv");
?>