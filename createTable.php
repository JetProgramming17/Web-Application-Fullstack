<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create student</title>
  </head>
  <body>
    
<!--php for create table that is connected to newcon.php-->
  <div class="container mt-3">
    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Create User
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="code.php" method ="POST">

                <div class="mb-3">
                    <label>Student Name</label>
                    <input type="text" name = "name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Student Username</label>
                    <input type="text" name = "username" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Student Number</label>
                    <input type="text" name = "studentnumber" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Student Password</label>
                    <input type="password" name = "password" class="form-control">
                </div>
                <div class="mb-3">
                    <label>User Type</label>
                    <input type="text" name = "user_type" class="form-control">
                </div>
                <div class="mb-3">
                  <button type="submit" name="save_user"class="btn btn-primary">Save user</button>
                </div>
                
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
      


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>