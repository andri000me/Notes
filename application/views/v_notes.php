<!DOCTYPE html>
<html>

<head>
    <title>Notes</title>
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
                <form action="<?php echo base_url() . 'index.php/writeme/simpan'; ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $this->session->userdata('ses_id'); ?>">
                    <textarea rows="4" cols="30" name="notes"> </textarea><br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>

</body>

</html>