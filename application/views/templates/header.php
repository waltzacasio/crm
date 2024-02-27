<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM WalterDev.Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url();?>">CRM WalterDev.Info</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>add">New Record</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>deleted_records">Deleted Records</a>
          </li>
          <?php if($this->session->logged_in){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>logout">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><?= $this->session->fullname;?></a>
          </li>
          <?php } else {?>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>login">Login</a>
          </li>
          <?php } ?>
        </ul>

      </div>
    </div>
  </nav>
</header>

<div class="container mt-5">