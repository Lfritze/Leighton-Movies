<?php
class PreviewProvider {

  private $con, $username;
  // private $username;

  public function __construct($con, $username) {
    $this->con = $con;
    $this->username = $username;
  }

  public function createPreviewVideo() {
    echo "hello";
  }
}
?>