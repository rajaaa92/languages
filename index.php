<!DOCTYPE HTML>
<html>
  <?php
    if ($_GET["lang"] == "") {
      $lang = "EN"; }
    else {
      $lang = $_GET["lang"];
    }
    include_once("head.html");
  ?>
  <body>
    <?php
      include_once("select_lang.html");
      include_once($lang.".html");
      include_once("footer.html");
    ?>
  </body>
</html>
