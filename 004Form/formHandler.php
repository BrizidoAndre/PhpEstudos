<?php
//USING THE CONDITIONAL TO VERIFY IF THE USER ACTUALLY SEND ANY INFORMATION.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    THE HTMLFUNCTION IS TO TRANSFORM THE DATA INTO A ENTITY AND THEN TURNING INTO A MORE SAFE ENVIRONMENT
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    if (empty($firstName)){
        header("Location: fail.php");
        exit();
    }

//    ECHOING THE INFORMATION WE WANT
    echo "These are the data the user submitted:";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favouritepet;

//    SENDING THE USER TO THE PAGE WE WANT
    header("Location: 004FirstForm.php");
}

else{
    header("Location: 004FirstForm.php");
}