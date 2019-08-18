<!DOCTYPE html>
<html>
  <head>
    <title>Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="Notes dibuat oleh Gylang Satria">
    <meta name="author" content="Gylang Satria Yudha">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/daftar/daftar1'?>" method="post">
            <h2 class="form-signin-heading">Please Sign Up</h2>
            <label for="username" class="sr-only">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Masukan Email" required autofocus>
            <label for="username" class="sr-only">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" required>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
          </form>
          <a href="<?php echo base_url().'index.php/login'?>">Sudah punya Akun? Login Disini!</a>
        </div>
        </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
