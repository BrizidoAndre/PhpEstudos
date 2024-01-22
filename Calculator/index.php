<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="number" name="num01" placeholder="Digit a number">

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="^">^</option>
    </select>

    <input type="number" name="num02" placeholder="Digit the second number">

    <button>Calculate</button>
</form>

<?php
//       Making sure we are doing a post form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        Grabbing data
    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);
    $result = 0;

    $errors = false;
//making sure we have all fields busy
    if (empty($num01) || empty($num02) || empty($operator)) {
        echo "<h1>You must fill all fields</h1>";

        $errors = true;
    }

//    making sure we are dealing with numbers
    if (!is_numeric($num01) || !is_numeric($num02)) {
        echo "You should only write numbers";
        $errors = true;
    }
    $result = match ($operator) {
        "+" => $num01 + $num02,
        "-" => $num01 - $num02,
        "*" => $num01 * $num02,
        "/" => $num01 / $num02,
        "^" => $num01 ** $num02,
        default => "<h2>Something went terribly wrong</h2>"
    };

    if (!$errors){
        echo "Resultado: " . $result;
    }
}
?>
</body>
</html>