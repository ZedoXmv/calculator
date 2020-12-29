<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container bg-light p-4 shadow">
        <div class="text-center p-2">
            <h1>Calculator</h1>
        </div>
        <?php 
            include "calculatorfunctions.php";

            $userinput = $_GET['userinput'];

            sscanf($userinput, "%d%c%d",$value1,$operator,$value2);

            switch ($operator) {
                case "+":
                    $result = add($value1,$value2);
                    break;
                
                case "-":
                    $result = sub($value1,$value2);
                    break;
                
                case "*":
                    $result = multiply($value1,$value2);
                    break;
                 
                case "/":
                    $result = divide($value1,$value2);
                    break;
                    
                case "%":  
                    $result = percent($value2,$value1);
                    break;
                
                default:
                    $result = " Invalid Input";
                    break;
                }        
        ?>

        <!-- Version 2 -->
        <form action="calcv2.php" method="GET" >
                
                <div class="col-auto">
                    <input type="text" class="form-control" id="userinput" name="userinput" value="<?php echo $userinput; ?>" placeholder="eg    5+6,    3-2,   9*7,   12/6"  autofocus required>
                </div>
                <div class="col-auto p-4">
                    <button class="btn btn-warning" type="submit">Calculate</button>
                </div>
        </form>
        

        <div class='text-center'><h3>Result: <?php echo $result;?></h3>
        </div>
       
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>