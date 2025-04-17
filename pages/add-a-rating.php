<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1500" />
  <link rel="stylesheet" href="../css/add-student.css">
  <title>Добавить оценку</title>
</head>
<body class="flexContainer">
  <form action="../php/controllers/ev-addition-controller.php" class="form" method="POST">
      <h1 class="title">Добавить оценку</h1>
      <label class="label">Студент</label>
      <div class="inputContainer">
       <select name="student" class="sel">
          <?php include_once "../php/controllers/students-drop-down-list-controller.php"?>
       </select>
      </div>
      <label class="label">Предмет</label>
      <div class="inputContainer">
       <select name="subject" class="sel">
          <?php include_once "../php/controllers/subject-drop-down-list-controller.php"?>
       </select>
      </div>
      <label class="label">Оценка</label>
      <div class="inputContainer">
       <select name="evaluation" class="sel">
          <?php include_once "../php/controllers/evaluation-drop-down-list-controller.php"?>
       </select>
      </div>
      <a href="editing-page.php" class="link">Вернуться на страницу редактирования</a>
      <button class="submitBtn">Добавить оценку</button>
    </form>
</body>
</html>