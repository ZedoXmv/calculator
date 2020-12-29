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



        <form action="calculate.php" method="GET" >
            
            
            <div class="row row-cols-lg-auto align-items-center justify-content-center">
                
                    <div class="col-md-auto p-1">
                        <input type="number" class="form-control" id="value1" name="value1" placeholder="First Value.." required>
                    </div>
    
                    <div class="col-md-auto p-1">
                        <select class="form-select" name="operator" id="operator">
                            <option value="1">+</option>
                            <option value="2">-</option>
                            <option value="3">&times;</option>
                            <option value="4">/</option>
                            <option value="5">% of</option>
                        </select>
                    </div>
        
                    <div class="col-md-auto p-1">
                        <input type="number" class="form-control" id="value2" name="value2" placeholder="Second Value.." required>
                    </div>
          
        
                    <div class="col-auto p-4">
                        <button class="btn btn-warning" type="submit">Calculate</button>
                    </div>
                </div>

        </form>
        

        <div class='text-center'><h3></h3></div>


       
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</html>