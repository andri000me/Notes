<!DOCTYPE html>
<html>

<head>
  <title>Masuk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Notes dibuat oleh Gylang Satria">
  <meta name="author" content="Gylang Satria Yudha">
  <!-- Bootstrap -->
  <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">


</head>

<body>

  <div class="container">
    <?php $this->load->view('menu'); ?>
    <!--Include menu-->
    <div class="container">
      <div class="row">
        <h2>Welcome back <?php echo $this->session->userdata('ses_nama'); ?></h2>
      </div>
      <div class="row">
        <h2><?php
            $user = $this->session->userdata('ses_id');
            $notes = $this->db->query("select * from notes where id_user like '$user'");
            echo $notes; ?></h2>
      </div>

    </div>
  </div> <!-- /container -->


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>

</body>

</html>