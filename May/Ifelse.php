<?php

function myAge($age){
    if ($age >= 20) {
        echo "<div class= 'alert alert-success mx-auto mt-3' >
        <strong>AMAZING</strong> 'LET'S GO PARTY , いいね'</strong>
        </div> ";
    }else{
        echo "<div class= 'alert alert-success mx-auto mt-3'>
        <strong>SORRY</strong> YOU CANNOT JOIN PARTY 
        </div>";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="card text-center mt-5 mx-auto w-auto">
        <form action="" method="POST">
            <div class="card-header ">
            Can you drink?
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="" name="">Enter Age</label>
                    <input type="text" class="form-control" name="age">
                    <br>
                    <button type="submit" name="submit" class="btn  btn-success btn-block">Submit</button>
                </div>

            </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if(isset($_POST['submit'])) {
    $input = $_POST['age'];

    myAge($input);
}


//関係演算子
?>