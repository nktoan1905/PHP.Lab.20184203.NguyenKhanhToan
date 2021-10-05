<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST["name"])){
    $name = $_POST["name"];
    echo "<p>Hello, $name</p>";
}
if(isset($_POST["class"]) && $_POST["university"]){
    $class = $_POST["class"];
    $university = $_POST["university"];
    echo "<p>You are studying at $class, $university</p>";
}
if(!empty($_POST['hobby'])) {      
    print("<br> Your hobby:<br>"); 
    foreach($_POST['hobby'] as $value){
        $count = 1;
        print( " $count  $value <br/>");
        $count++;
    }        
}   

?>
</body>
</html>