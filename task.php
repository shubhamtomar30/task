<?php header("Refresh: 180"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div  class="col-md-4"></div>
            <div style="box-shadow: 1px 1px 12px 10px rgba(0, 0, 255, .2);padding:40px;border-radius:6px;" class="col-md-4 ">
            <?php

					if(isset($_SESSION['error'])){
						echo '<div class="alert alert-danger alert-dismissible fade show col-lg-12" role="alert">
                                '.$_SESSION['error'].'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
						// echo '<script>  alert("hello")   </script>';						
						unset($_SESSION['error']);
					}


					?>
					
    <form method="post" action="task1.php">
        <label>Name :</label>
        <input class="form-control" type="text" name="name" placeholder="enter your name">
        <br>
        <label>Email :</label>
        <input class="form-control" type="email" name="email" >
        <br><br>
        <label>Date Of Birth</label>
        <input class="form-control" type="date" name="date">
        <br><br>

        <label>About yourself</label>
        <textarea class="form-control" name="au" ></textarea>
        <br><br>
        <center>
        <div class="g-recaptcha" data-sitekey="6LfZD-gcAAAAAMIPBsJh6YlqKOMYHJ9IdC4jKtO7">

        </div>
        <br><br>
        <input class="btn btn-primary" type="submit" value="submit">
        </center>
        <br><br>
    </form>
    </div>
    <div class="col-md-4"></div>
        </div>
    </div>
    <br><br><br><br>
</body>
</html>