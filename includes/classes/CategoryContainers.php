<?php
class CategoryContainers {

  private $con, $username;
  // private $username;

  public function __construct($con, $username) {
    $this->con = $con;
    $this->username = $username;
  }

  public function showAllCategories() {
    $query = $this->con->prepare("SELECT * FROM CATEGORIES ");
    $query->execute();

    $html = "<div class='previewCategories'>";

    while($row = $query->fetch(PDO::FETCH_ASSOC)) {
      $html .= $this->getCategoryHtml($row, null, true, true);
    }

    return $html . "</div>";
  }

  private function getCategoryHtml($sqlData, $title, $tvShows, $movies) {
    $categoryId = $sqlData["id"];
    $title = $title == null ? $sqlData["name"] : $title;

    

    return $title . "<br>";
  }
}

?>