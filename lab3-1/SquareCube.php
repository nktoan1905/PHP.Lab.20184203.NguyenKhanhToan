<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p size="5" color="blue">Generate Square and Cube</p>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <?php
        if (array_key_exists("start", $_GET)) {
            $start = $_GET["start"];
            $end = $_GET["end"];
        } else {
            $start = 0;
            $end = 0;
        }
        ?>
        <table>
            <tr>
                <td>Seclect Start Number: </td>
                <td><select name="start">
                        <?php
                        for ($i = 0; $i <= 10; $i++) {
                            if ($start == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>Select End Number</td>
                <td><select name="end">
                        <?php
                        for ($i = 0; $i <= 20; $i++) {
                            if ($end == $i) {
                                print("<option selected>$i</option>");
                            } else {
                                print("<option>$i</option>");
                            }
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><input type="SUBMIT" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
        <table>

            <?php
            if (array_key_exists("start", $_GET)) {
                print("<tr><th>Number</th><th>Square</th><th>Cube</th></tr>");
                $i = $start;
                while ($i <= $end) {
                    $sqr = $i * $i;
                    $cubed = $i * $i * $i;
                    print("<tr><td>$i</td><td>$sqr</td><td>$cubed</td></tr>");
                    $i = $i + 1;
                }
            }
            ?>
        </table>
    </form>
</body>

</html>