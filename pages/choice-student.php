<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1500" />
  <link rel="stylesheet" href="../css/add-student.css">
  <title>Выбрать студента</title>
</head>
<body class="flexContainer">
  <form action="./edit-evaluation.php?studentFullName=a" class="form" method="POST">
      <h1 class="title">Выбрать студента</h1>
      <label class="label">Студент</label>
      <div class="inputContainer">
       <select name="studentId" class="sel">
          <?php include_once "../php/controllers/students-drop-down-list-controller.php"?>
       </select>
      </div>
      <a href="editing-page.php" class="link">Вернуться на страницу редактирования</a>
      <button class="submitBtn">Выбрать студента</button>
    </form>
</body>
</html>