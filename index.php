<?php
  $nadrz1 = filter_input(INPUT_GET, 'part1');
  $nadrz2 = filter_input(INPUT_GET, 'part2');
  $submit = filter_input(INPUT_POST,'part1');
  $prirustek1 = filter_input(INPUT_POST,'part1');
  $prirustek2 = filter_input(INPUT_POST,'part2');
  $nadrz1aprirustek1 = $nadrz1 + $prirustek1 ;
  $nadrz2aprirustek2 = $nadrz2 + $prirustek2 ;
  var_dump($nadrz1);
  var_dump($nadrz2);
?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<?php
    echo "V nádrži 1 je: $nadrz1aprirustek1 ";
 ?>
 <br >
<?php
    echo "V nádrži 2 je: $nadrz2aprirustek2";
 ?>
 <?php
    {
?>
<form action="index.php?part1=<?php echo $nadrz2aprirustek2?>&part2=<?php echo $nadrz2aprirustek2?>" method="post">

Přidat do nádrže 1 : <input type="radio" name="part1" value="5"> <label for="5">5</label>
                     <input type="radio" name="part1" value="10"> <label for="10">10</label>
                     <input type="radio" name="part1" value="15" > <label for="15">15</label> <br >

Přidat do nádrže 2 : <input type="radio" name="part2" value="5" > <label for="5">5</label>
                     <input type="radio" name="part2" value="10" > <label for="10">10</label>
                     <input type="radio" name="part2" value="15"> <label for="15">15</label>  <br >

                     <input type="submit" name="submit" value="Odeslat">
</form>
<?php } ?>

  </body>
</html>
