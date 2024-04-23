<!DOCTYPE html>
<html>
<head>
    <title>Expression Evaluator</title>
</head>
<body>
    <form method="get" action="">
        <label for="input">Enter an expression (e.g., 2+3):</label><br>
        <input type="text" id="input" name="input"><br>
        <input type="submit" value="Evaluate">
    </form>

    <?php
    if (isset($_GET['input'])) {
        $user_input = $_GET['input'];
        $result = eval($user_input);
        #eval("system('ls -l $user_input');");
        echo "Result: $result";
    }
    ?>
</body>
</html>