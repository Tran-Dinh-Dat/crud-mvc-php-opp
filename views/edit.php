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

    <div class="container">
        <div class="col-md-12">
            <h3 class="alert alert-success mt-3">Sửa thành viên</h3>
        </div>
        <div class="col-md-12">
            <form action="../controllers/edit.php" method="post">
                <input name="id" type="hidden" value="<?=$user->id?>">
                <div class="form-group">
                  <label for="">User name</label>
                  <input type="text" name="username" class="form-control" value="<?=$user->username ?>">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="text" name="password" class="form-control" value="<?=$user->password ?>">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" class="form-control" value="<?=$user->email ?>">
                </div>
                <div class="form-group">
                  <label for="">Phone</label>
                  <input type="text" name="phone" class="form-control" value="<?=$user->phone ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>