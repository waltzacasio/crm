<?php
    if ($this->session->userdata('logged_in')) {
        // If not logged in, redirect to the login page
        redirect('pages/view');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDM-CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">

<h1>Login User</h1>
<hr>

<?php if($this->session->flashdata('failed_login')) : ?>
    <?= '<p class="alert alert-danger">'.$this->session->flashdata('failed_login').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('user_loggedout')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
<?php endif;?>

<?= validation_errors();?>

<?= form_open('login');?>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="username" value="<?= set_value('username');?>" class="form-control" placeholder="Enter email as username">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
</div>
<button typ="submit" class="btn btn-primary">Login</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>