<?php 
$link = false;

function openCon () {
  global $link;
  $link = mysqli_connect("localhost", "root", "", "grade");
  mysqli_query($link, "SET NAMES UTF8");
}


function closeCon () {
  global $link;
  mysqli_close($link);
}

function getAllContragents() {
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT disciplines.name as 'Предмет', evaluations.evaluation as 'Оценка'
FROM students JOIN grade ON students.id = grade.student_id 
JOIN evaluations ON evaluations.id = grade.evaluation_id 
JOIN disciplines ON disciplines.id = grade.discipline_id
WHERE students.firstname = 'Иван' AND students.secondname = 'Ченгарь'");

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
?>