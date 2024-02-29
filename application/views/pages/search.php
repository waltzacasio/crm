<?php if($this->session->flashdata('user_loggedin')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_added')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_added').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_delete')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_delete').'</p>';?>
<?php endif;?>


<h1 class="text-center"><?= $title;?></h1>

<form class="d-flex" role="search" method="post" action="<?= base_url('search/');?>">
          <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="<?= $keywords;?>" required>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

<br/>

<div class="alert alert-primary" role="alert">
    "<?= $keywords;?>" has <?= number_format($total);?> result.
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" class="text-center align-middle">Last Name</th>
      <th scope="col" class="text-center align-middle">First Name</th>
      <th scope="col" class="text-center align-middle">Address</th>
      <th scope="col" class="text-center align-middle">Product Type</th>
      <th scope="col" class="text-center align-middle">Serial Number</th>
      <th scope="col" class="text-center align-middle">Transaction Type</th>
      <th scope="col" class="text-center align-middle">Date of Purchase</th>
      <th scope="col" class="text-center align-middle">Teachnician</th>
      <th scope="col" class="text-center align-middle">Remarks</th>
      <th scope="col" class="text-center align-middle">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($posts as $row){?>
    <tr>
      <td class="text-start align-middle"><?= $row['last_name'];?></td>
      <td class="text-start align-middle"><?= $row['first_name'];?></td>
      <td class="text-center align-middle"><?= $row['address'];?></td>
      <td <?php if($row['tableName'] == "Product_1"){echo 'class="table-success text-center align-middle"';}
      else if($row['tableName'] == "Product_2"){echo 'class="table-primary text-center align-middle"';}
      else if ($row['tableName'] == "Product_3"){echo 'class="table-danger text-center align-middle"';}
      else if ($row['tableName'] == "Product_4"){echo 'class="table-warning text-center align-middle"';}?>><?= $row['tableName'];?></td>
      <td class="text-center align-middle"><b><?= $row['serial_number'];?></b></td>
      <td class="text-center align-middle"><?= $row['transaction_type'];?></td>
      <td class="text-center align-middle"><?= $row['date_of_purchase'];?></td>
      <td class="text-center align-middle"><?= $row['technician'];?></td>
      <td class="text-center align-middle"><?= $row['remarks'];?></td>
      <td class="text-center align-middle"><a href="<?= base_url() . "details/";?><?php if($row['tableName'] == "Product_1"){echo "product_1";}
      else if($row['tableName'] == "Product_2"){echo "product_2";}
      else if ($row['tableName'] == "Product_3"){echo "product_3";}
      else if ($row['tableName'] == "Product_4"){echo "product_4";}?><?= "/" . $row['id'];?>">
      <?= '<button type="button" class="btn btn-primary btn-sm text-nowrap">View Details</button>' ?></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?= $this->pagination->create_links(); ?>
