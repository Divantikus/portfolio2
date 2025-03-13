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
    }
    
  }
}
?>