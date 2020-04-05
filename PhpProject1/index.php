<?php

$result = null;
if(isset($_POST['add_btn'])){
    
    $number1 = $_POST['first_no'];
    $number2 = $_POST['second_no'];
    
    $result = $number1 + $number2;
    
}


if(isset($_POST['sub_btn'])){
    
    $number1 = $_POST['first_no'];
    $number2 = $_POST['second_no'];
    
    $result = $number1 - $number2;
    
}


if(isset($_POST['mul_btn'])){
    
    $number1 = $_POST['first_no'];
    $number2 = $_POST['second_no'];
    
    $result = $number1 * $number2;
   
}


if(isset($_POST['div_btn'])){
    
    $number1 = $_POST['first_no'];
    $number2 = $_POST['second_no'];
    
    $result = $number1/$number2;
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Calculation</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">  
              <!-- form start -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype=""><br><br><br>
                <div class="row">
                    
                    <div class="col-12">
                      <label for="first_no">Enter your First Number</label><br>
                      <input type="number" id="first_no" name="first_no" class="form-control first_no" placeholder="First Number"><br><br><br>
                    </div>
                    
                    <div class="col-12">
                      <label for="second_no">Enter your Second Number</label><br>
                      <input type="number" id="second_no" name="second_no" class="form-control second_no" placeholder="Second Number"><br><br><br>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" name="add_btn" class="btn btn-dark">Addition</button>
                        <button type="submit" name="sub_btn" class="btn btn-dark">Subtraction</button>
                        <button type="submit" name="mul_btn" class="btn btn-dark">Multiplication</button>
                        <button type="submit" name="div_btn" class="btn btn-dark">Division</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                    
                </div>
            </form><br><br><br>
              <!-- form end -->
              <div col-12>
                <?php echo "The result is : ".$result  ; ?> 
              </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>