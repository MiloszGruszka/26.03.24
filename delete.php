<?php 
echo "Tutaj delete.php chopie <br>";
if(isset($_GET['zmk'])){
   
   $IDU = $_GET['zmk'];
   include_once("polaczenie.php");
   $zapytanie_delete = $polaczenie->query("DELETE FROM `uczniowie` WHERE IDU=$IDU");
   if($zapytanie_delete){
      echo "ok";
      header("Location:index.php");
   }else{
      echo "nie ok";
   }

   $polaczanie->close();

}else{
   echo "Brak dostepu";
}



?>