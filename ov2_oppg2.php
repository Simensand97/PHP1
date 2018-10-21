<html>
<head>
</head>
<body>
  <h1>Bestill pizza</h1>

  <h3>Velg topping: </h3>
<form action="bestilling.php">
  <input type="checkbox">Løk</br>
  <input type="checkbox">Sopp</br>
  <input type="checkbox">Gulrot</br>
  <input type="checkbox">Skinke</br>

  <select name="tidspunkt">
    <?php
      for ($i=1; $i<24; $i++) {
          echo "¨\t<option value'";
          if ($i<10) $nuller = "0";
          else $nuller = "";
          $tid = $nuller.$i.":00";
          echo "$tid'>$tid</option>\n";
      }

     ?>
   </select>
  <input type="submit" value="Send bestilling">
</form>

</body>
</html>
