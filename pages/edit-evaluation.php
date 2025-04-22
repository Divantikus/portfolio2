<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1500" />
  <link rel="stylesheet" href="../css/add-student.css">
  <title>Редактировать оценку</title>
</head>
<body class="flexContainer">
  <form action="../php/controllers/edit-evaluation-controller.php" class="form" method="POST">
      <h1 class="title">Редактировать оценку</h1>
      <input type="hidden" name="studentId" value="<?php echo $_POST["studentId"] ?>">
      <label class="label">Предмет - оценка</label>
      <div class="inputContainer">
       <select name="subjectId" class="sel">
          <?php include_once "../php/controllers/drop-down-list-subjects-and-grades-controller.php"?>
       </select>
      </div>

      <label class="label">Оценка</label>
      <div class="inputContainer">
       <select name="evaluationId" class="sel">
          <?php include_once "../php/controllers/evaluation-drop-down-list-controller.php"?>
       </select>
      </div>
      <a href="editing-page.php" class="link">Вернуться на страницу редактирования</a>
      <button class="submitBtn">Редактировать оценку</button>
    </form>
</body>
</html>