<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="formHandler.php" method="post">
            <label for="firstname">First name:</label>
                <!--  For every input we should have a name attribute  -->
            <input id="firstname" type="text" name="firstname" placeholder="First name">

            <label for="lastname">Last name:</label>
            <input id="lastname" type="text" name="lastname" placeholder="Last name">

            <label for="lastname">Favorite Pet?:</label>
            <select id="favoritepet" name="favouritepet">

                <option value="None">None</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>

            <button type="submit">Submit</button>

        </form>
    </main>
    
</body>
</html>