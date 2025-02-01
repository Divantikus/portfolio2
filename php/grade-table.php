<?php
include "./php/functions_db.php";

$evaluations = getAllContragents();
?>

<?php
  for($i = 0; $i < count($evaluations); $i++){
    $disciplineName = $evaluations[$i]["Предмет"];
    $evaluation = $evaluations[$i]["Оценка"];
    $rowColor = "";

    switch ($evaluation) {
      case "Неудовлетворительно":
        $rowColor = "red";
          break;
      case "Удовлетворительно":
          $rowColor = "gray";
          break;
      case "Хорошо":
          $rowColor = "green";
          break;
      case "Отлично":
          $rowColor = "gold";
          break;
  }

    echo "
    <tr class=\"grade-page__table-row_$rowColor\">
      <td class=\"grade-page__table-text grade-page__table-text_left\"
      >
        $disciplineName
      </td>
      <td class=\"grade-page__table-text grade-page__table-text_right\"
      >
        $evaluation
      </td>
    </tr>
    ";
  }
?>