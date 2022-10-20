<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="pattern" placeholder="Please enter no. to Print Pattern" />
        <input type="submit" name="number_submit" value="Submit" />
    </form>
    <?php
    if (isset($_POST['number_submit'])) {
        $num = $_POST['pattern'];

        for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $num; $j++) {
                $t = $i < $j ? $i : $j;
                echo $num - $t + 1;
                echo "";
            }
            for ($j = $num-1; $j >= 1; $j--) {
                $t = $i < $j ? $i : $j;
                echo $num - $t + 1;
                echo "";
            }echo "<br>";
        }
        for ($i = $num-1; $i >= 1; $i--) {
            for ($j = 1; $j <= $num; $j++) {
                $t = $i < $j ? $i : $j;
                echo $num - $t + 1;
                echo "";
            }
            for ($j = $num-1; $j >= 1; $j--) {
                $t = $i < $j ? $i : $j;
                echo $num - $t + 1;
                echo "";
            }echo "<br>";
        }

    }
    ?>

</body>

</html>