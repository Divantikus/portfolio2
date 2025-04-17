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

function getAllStudentAcademicPerformance() {
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT disciplines.name as 'Предмет', evaluations.evaluation as 'Оценка'
  FROM students JOIN grade ON students.id = grade.student_id 
  JOIN evaluations ON evaluations.id = grade.evaluation_id 
  JOIN disciplines ON disciplines.id = grade.discipline_id
  WHERE students.firstname = 'Иван' AND students.secondname = 'Ченгарь'");

  closeCon();
  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getOneStr(){
  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT students.firstname AS 'Имя', students.secondname AS 'Фамилия'
  FROM students
  WHERE students.id = 1");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getAllStudents() {

  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT * FROM students WHERE students.id != 1");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function addStudent($firstName, $secondName) {

  global $link;

  openCon();

  $res = mysqli_query($link, "INSERT INTO students(firstname, secondname) VALUES ('$firstName', '$secondName')");

  closeCon();


  return $res;
}

function deleteStudent ($id) {
  global $link;

  openCon();

  $res = mysqli_query($link, "DELETE FROM students WHERE id=$id");

  closeCon();

  return $res;
}

function getAllSubjects() {

  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT * FROM disciplines");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function getAllEvaluations() {

  global $link;

  openCon();

  $res = mysqli_query($link, "SELECT * FROM evaluations");

  closeCon();

  return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function addEvaluation ($studentId, $subjectId, $evaluationId) {

  global $link;

  openCon();

  $res = mysqli_query($link, "INSERT INTO grade(student_id, discipline_id, evaluation_id) VALUES ($studentId, $subjectId, $evaluationId)");

  closeCon();


  return $res;
}

function updateStudentName ($studentId, $name) {
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE students SET students.firstname = '$name' WHERE students.id = $studentId");

  closeCon();

  return $res;
}

function updateStudentSecondName ($studentId, $secondName) {
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE students SET students.secondname = '$secondName' WHERE students.id =$studentId");

  closeCon();

  return $res;
}

function updateStudentNameAndSecondName ($studentId, $name, $secondName) {
  global $link;

  openCon();

  $res = mysqli_query($link, "UPDATE students SET students.firstname = '$name', students.secondname = '$secondName' WHERE students.id = $studentId");

  closeCon();

  return $res;
}

?>