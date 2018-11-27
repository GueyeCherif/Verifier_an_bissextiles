<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Années Bissextiles</title>
  </head>
  <body>
    <form class="bissextile" action="" method="POST">
      <input type="text" name="an" value="">
      <br><br>
      <input type="submit" name="valider" value="testez">
    </form>
    <?php
      if (isset($_POST['an'])) {
        $an = $_POST['an'];
        if ((($_POST['an'])%4 == 0) || (($_POST['an'])%400 == 0) && (($_POST['an'])%100 != 0)) {
          echo "$an est  bissextile";
        }else {
          echo "$an est non bissextile";
        }
      }
    ?>
  </body>
</html>
