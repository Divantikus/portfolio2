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

?>