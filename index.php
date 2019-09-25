<!DOCTYPE html>
<!--
Name : Aman Jasani
Student ID : 991516032
SYST10199 - Web Programming 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome To Tim</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id="body">

            <form action="order.php" method="post">   
                <div id="main">
                    <h1 id="h1"> <b>Order Here <b></h1>

                    <label> Number of coffee:  <input type="number" name="cono" min="1" id="in"> </label><br><br>
                    <label>Select your size :
                        <select name="cosi" id="in1">
                            <option value="-1"> Select size </option>
                            <option value="40"> Small </option>
                            <option value="60"> Medium </option>
                            <option value="80"> Large </option>
                            <option value="100"> Extra-Large </option>
                        </select></label><br><br>
                        <label> How many creams? <input type="number" name="crno" min="0" id="in"> </label><br><br>
                        <label> How many sugars? <input type="number" name="suno" min="0" id="in"> </label><br><br>
                    <input type="Submit" name="Submit"> 
                </div>
            </form>
        
    </body>
</html>
