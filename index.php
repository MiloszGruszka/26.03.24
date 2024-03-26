<?php include_once("polaczenie.php");?>
<!DOCTYPE html>
<html lang="pl">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>Projekt 2CT</h1>
   <?php 
   $zapytanie = $polaczenie->query("SELECT `IDU`,`imie`,`nazwisko` FROM uczniowie");
   
   
   ?>
   <ul>
      <li>
         <a href="http://localhost:8080/26.03.24/delete.php?zmk=Milo123">Link</a>
      </li>
   </ul>
</body>
</html>
<?php $polaczenie->close() ?>