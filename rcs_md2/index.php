<!DOCTYPE html>
<meta charset="utf-8"/>
<html lang="lv"/>
<html>
<head>
<a href="DatuBaze.xls">Datu fails</a>
</head>
<body>

<?php
// mainigo definesana

// $firstname="";
 $answer1=$answer2=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

    $answer1=$_POST["answer1"];
    $answer2=$_POST["answer2"];
    
if ($answer1 ==  "-9999") {
    $punkti=1;
} else {
    $punkti=0;
}

if ($answer2 ==  "5.8") {
    $punkti=$punkti+1;
} else {
    $punkti=$punkti;
}

    // echo '<div class="input_group"><input type="text" name="firstname"><label for="firstname"> Vārds</label></div>';
    // echo '<div class="input_group"><input type="single" name="answer1"><label for="answer1"> Atbilde</label></div><br>';
    // echo '<div class="input_group"><input type="single" name="answer2"><label for="answer2"> Atbilde</label></div><br>';
}
else{
    $punkti=0;
}



function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Tests</h2>
<form method="post">
   Vārds: <input type="text" name="firstname">
   <br><br>
   1.2. Aprēķināt vidējo aritmētisko. Rezultātu ierakstīt 1 ciparu aiz komata. Ja uzskatiet, ka šajā situācijā nevajag rēķināt vidējo aritmētisko, tad lūdzu ierakstiet -9999!");
   <br><br>
   Atbilde: <input type="single" name="answer1">
   <br><br>
   1.3. Aprēķināt vidējo aritmētisko. Rezultātu ierakstīt 1 ciparu aiz komata. Ja uzskatiet, ka šajā situācijā nevajag rēķināt vidējo aritmētisko, tad lūdzu ierakstiet -9999!");
   <br><br>
   Atbilde: <input type="single" name="answer2">
   <br><br>
   <input type="Submit" name="iesniegt" value="Iesniegt">
</form>

<?php
echo "<h2>Novērtējums</h2>";

echo "Punktu skaits ";
echo $punkti;

?>

</body>
</html>
