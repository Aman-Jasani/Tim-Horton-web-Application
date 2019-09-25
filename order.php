<!DOCTYPE html>
<!--
Name : Aman Jasani
Student ID : 991516032
SYST10199 - Web Programming 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thank you</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="body2">

        <h1 id="h1"> Thanks for your order. Here it is!</h1>
        <div>
            <?php
            $coffee_no = $_POST["cono"];
            if (empty($coffee_no))
                echo "<h1 id='h1'> Atleast one coffee must be selected !</h1>";

            $coffee_si = $_POST["cosi"];
            if ($coffee_si == "-1")
                echo "<h1 id='h1'> You must select required size !</h1>";


            if($coffee_no > 1|| $coffee_si!= '-1'){
            for ($i = 0; $i < $_POST['cono']; $i++) {
                ?>

                <div>
                    <img src="img/cup.jpg" style="height: <?php echo $_POST['cosi']; ?>">
                    <?php
                    if ($_POST["crno"] > 0 || $_POST["suno"] > 0) {
                        echo "<img src='img/plus.jpg'>";
                        for ($j = 0; $j < $_POST["crno"]; $j++) {
                            echo "<img src='img/cream.jpg'>";
                        }
                    }
                    if ($_POST["suno"] > 0) {
                        echo "<img src='img/plus.jpg'>";
                        for ($j = 0; $j < $_POST["suno"]; $j++) {
                            echo "<img src='img/sugar.jpg'>";
                        }
                    }
                    ?>
                </div>
                <?php
            }
            }
            ?>

            <div>
                <?php
               

                if ($coffee_si != "-1") {
                    if (isset($coffee_no)) {
                        $cost = 0;

                $coffee_cr = $_POST['crno'];
                $coffee_su = $_POST['suno'];

                if ($_POST['cosi'] == '40') {
                    $cost = 2 * $_POST['cono'];
                } elseif ($_POST['cosi'] == '60') {
                    $cost = 3 * $_POST['cono'];
                } elseif ($_POST['cosi'] == '80') {
                    $cost = 4 * $_POST['cono'];
                } elseif ($_POST['cosi'] == '100') {
                    $cost = 5 * $_POST['cono'];
                }
                $cost = $cost + ($_POST['crno'] * 0.50) + ($_POST['suno'] * 0.50);

                $tax = $cost + (($cost * 13) / 100);
                        echo "<h3 style='color: red'> Your total is : $" . number_format($tax, 2) . "</h3>";
                    }
                }
                ?>
            </div>
    </body>
</html>
