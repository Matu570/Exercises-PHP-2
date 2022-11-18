<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Excercises 2</title>
</head>

<body>
    <!-- 
        Exercise 1:
        Create a program containing an array with eight numbers, loop through and display, sort and display, display length, and search for some element in the array-->
    <?php

use function PHPSTORM_META\type;

    $numbers = array(8, 23, 76, 12, 7, 1, 38, 15);
    function showArray()
    {
        global $numbers;
        function displayArray()
        {
            global $numbers;
            for ($i = 0; $i < count($numbers); $i++) {
                echo $numbers[$i];
                if ($i < (count($numbers) - 1)) {
                    echo ", ";
                } else {
                    echo ".";
                };
            };
        };
        displayArray();
        echo "<br>";
        sort($numbers);
        displayArray();
        echo "<br>";
        echo "Lenght of the array: " . count($numbers) . "<br>";
        echo "Search the position of the number 12 in the array: " . array_search('38', $numbers);
    };
    showArray();

    echo "<hr>";
    /*
        Exercise 2:
        Create a program that add elements with a max of 120 elements and display the array information.
    */
    $arraynumbers = array();
    function addElements($arraynumbers)
    {
        $counter = 0;
        while ($counter < 120) {
            array_push($arraynumbers, $counter);
            echo $arraynumbers[$counter] . " ";
            $counter++;
        };
    };
    addElements($arraynumbers);

    /* 
    Exercise 3:
    Check if a variable is empty. If is empy, fill it with lowercase strings, but display it converted to uppercase.
    
    */

    echo "<hr>";
    $text="";
    function fillVar($variable){
        if(empty($variable)){
            $variable="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore omnis sapiente, incidunt repudiandae doloremque nostrum dolore sequi quod perferendis id nulla reprehenderit velit enim vel consectetur, voluptatem obcaecati laborum illum?";
            echo strtoupper($variable);
        };
    };
    fillVar($text);


    /* 
    Exercise 4:
        Write to script in PHP containing 4 variables, one of type array, another of type string, another int and the end last one of type boolean. Print to screen a message according to the type of variable it is.
    */
    echo "<hr>";
    $arrayCitys=array(
        "San Lorenzo", "Rosario de Lerma", "Campo Quijano", "Cerrillos", "Coronel Moldes", "El Carril"
    );
    $stringMyCity="I live in the Rosario de Lerma City";
    $aNumber=1991;
    $iAmMarried=true;
    $arrayOfVAr=array($arrayCitys,$stringMyCity,$aNumber,$iAmMarried);
    foreach($arrayOfVAr as $arrayOfVAr){
        echo gettype($arrayOfVAr)."<br>";
    };

    /* 
    Exercise 5:
       Create a array containing the datas of a table, with videojuego names and their categories, and respresent it in a table in HTML. Each row must go in a separate file.
    */
    echo "<hr>";
    $sportsTable=array(
        "ACTION"=>array("GTA", "Call of Duty", "PUGB"),
        "ADVENTURE"=>array("Crush", "Mario", "SIM"), 
        "SPORTS"=>array("Fifa", "Pes", "Motos")
    );
    var_dump($sportsTable);

    $categories=array_keys($sportsTable);
    // This is used for keep the indice names
?>

<table border="1">
    <?php require_once'includes/headers.php'?>
    <?php require_once'includes/row-1.php'?>
    <?php require_once'includes/row-2.php'?>
    <?php require_once'includes/row-3.php'?>
</table>
</body>

</html>