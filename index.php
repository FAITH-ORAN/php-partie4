<?php 

echo " <h3 style='color:red'>exercice 1 :</h3>";
   $monthes=array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novombre","decembre");

   echo $monthes[2]."<br>";


   echo " <h3 style='color:red'>exercice 2 :</h3>";
   $languages=array(
     1=>"Javascript",//j'utilise => pour associer une clé à une valeur 
    2=>"Php",
    3=>"Sql",
    4=>"C++",
    5=>"Pascal",
  );
  echo "les 5 langages sont : <br> ";

  foreach($languages as $clefs=>$val){//cete boucle a récupéré la clé et la valeur 
 echo $clefs." : ".$val." . <br/>";
  }


  
  echo " <h3 style='color:red'>exercice 3 :</h3>";

   echo "le trosième langage est : ".$languages[3]."<br>";

   echo " <h3 style='color:red'>exercice 4 :</h3>";

   $languages1=array(
    1=>"Javascript",//j'utilise => pour associer une clé à une valeur 
   2=>"Php",
   3=>"Sql",
   4=>"C++",
   5=>"Pascal",
 );
 $languages1+= [ 6 => "React" ];

 echo "jaffiche la valeur de la clé ajouté qui est 6 : ".$languages1[6];


 echo " <h3 style='color:red'>exercice 5 :</h3>";

 $départements=array(
    75=>"PARIS",//j'utilise => pour associer une clé à une valeur 
   92=>"HAUT-DE-FRANCE",
   93=>"SAINT DENIS",
   94=>"EVRY SUR SEINE",
   77=>"EVELYNE",
 );

 
 foreach($départements as $clefs=>$val){//cete boucle a récupéré la clé et la valeur 
    echo $clefs." : ".$val." . <br/>";
     }

?>