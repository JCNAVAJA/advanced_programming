<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<!--     <style media="screen">
        h1{color: black; position: relative; left: 100px; margin-top: 100px;}
        h2{color: black; font-size: 50px;}
        #form1{
            position: relative; left: 500px; top: -100px;
        }
        #form2{
            position: relative; left: 500px; top: -100px;
        }
    </style> -->
<body>
    <div class="container">
        <div class= "row">
            <div class="col">
              <h1>Jonh Carlo W. Navaja</h1>
            </div>

    <div class="col">
    
    <form class="form" id="form1" method="post" action="assign_one.php">
    <h2>Calculator</h2>
    Input First Number </br></br> <input type="text" name="number1"> </br></br>
    Input Second Number
     </br></br> <input type="text" name="number2"> </br></br>
     <?php

        ini_set('display_errors',0);
        if(isset($_POST['submit']))
        {
            $num1= $_POST ['number1'];
            $num2= $_POST ['number2'];
            $num3 = $_POST["number3"];
            $num4 = $_POST["number4"];
            if(is_numeric['$num1'] && is_numeric['$num2'])
            {
                    if(isset($_POST['submit']))
                    {
                            $operation=$_POST['submit'];

                            switch ($operation) {
                                case '+':
                                    $result=$num1+$num2;
                                    break;
                                case '-':
                                    $result=$num1-$num2;
                                    break;
                                case '*':
                                    $result=$num1*$num2;
                                    break;
                                case '/':
                                    $result=$num1/$num2;
                                    break;
                            }
                    }
            else
            {
                echo "Select Operation";
            }
        }
            else
            {
                    echo "Enter Numeric Number Only";
            }
}
?>

                    <input type="submit" name="submit" value="+">
                    <input type="submit" name= "submit" value="-"> 
                    <input type="submit" name="submit" value="*"> 
                    <input type="submit" name="submit" value="/"> </br> 
                    <h3 style="color:blue"> Result: <?php echo $result ?> </h3>
    </form>
</div>
<div class="col">
        <form class="form" id="form2" method="post">
        <h2>Finding GCD</h2>
        <p>Enter First Number</p>
        <input type="number" name="number_1" required>
        <p>Enter Second Number</p>
        <input type="number" name="number_2" required>
        <br><br>
        <input type="submit" value="submit" name="Submit">
        <br><br>
        </form>
</div>
<?php
    if(!empty($_POST))
    {
        $num1 = $_POST["number_1"];
        $num2 = $_POST["number_2"];
        $min = ($num1 < $num2) ? $num1 : $num2;
        for($i=1; $i<$min; $i++)
        {
            if($num1%$i==0 && $num2%$i==0)
            $gcd = $i;
        }
    echo "The GCD of $num1 and $num2 is ".$gcd;
}
?>
<style type="text/css">
    .col{
        float: left;
        width: 33.33%;
    }
    .row:after{
        content: "";
        display: table;
        clear: both;
    }
</style>
</div>
</div>  
</body>
</head>
</html>