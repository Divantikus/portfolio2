<?php
class GetInfoAboutOperationResults  {

  public $res = 0;
  public $type = "";
  public $text = "Вы как сюда попали ? o_O";
  public $linkText = "";
  public $linkAddress = "";

  function __construct()
  {

    if(!isset($_GET['res']) || !isset($_GET['type'])) return;
    
    $this->res = $_GET['res'];
    $this->type = $_GET['type'];

    if($this->type == "add"){
      $this->text = $this->res > 0 ? "Студент успешно добавлен" : "Не удалось добавить студента";
      $this->linkText = "Добавить студента";
      $this->linkAddress = "add-student.php";
      return;
    } elseif ($this->type == "del") {
      $this->text = $this->res > 0 ? "Студент успешно удалён" : "Не удалось удалить студента";
      $this->linkText = "Удалить студента";
      $this->linkAddress = "deletion-page.php";
    } elseif ($this->type == "addEv") {
      $this->text = $this->res > 0 ? "Оценка успешно добавлена" : "Не удалось добавить оценку";
      $this->linkText = "Добавить оценку";
      $this->linkAddress = "add-a-rating.php";
    } elseif ($this->type == "updName") {
      $this->text = $this->res > 0 ? "Имя успешно обновлено" : "Не удалось обновить имя";
      $this->linkText = "Обновить имя или фамилию";
      $this->linkAddress = "edit-students-name.php";
    } elseif ($this->type == "updSecName") {
      $this->text = $this->res > 0 ? "Фамилия успешно обновлена" : "Не удалось обновить фамилию";
      $this->linkText = "Обновить имя или фамилию";
      $this->linkAddress = "edit-students-name.php";
    } elseif ($this->type == "updFirstAndSecName") {
      $this->text = $this->res > 0 ? "Имя и фамилия успешно обновлены" : "Не удалось обновить имя и фамилию";
      $this->linkText = "Обновить имя или фамилию";
      $this->linkAddress = "edit-students-name.php";
    }
    
  }
}
?>