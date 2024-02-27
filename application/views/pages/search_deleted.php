<style>

  .header-container {
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 100;
    padding-bottom: 5px;
  }

  .header-container h1, .header-container h5 {
    position: sticky;
    top: 0;
    background-color: white;
    z-index: 100;
  }

  .table-container {
    overflow-x: auto;
    max-width: 100%;
  }

  table {
    width: 100%;
  } 

</style>

<div class="header-container">
<h1 class="text-center"><?= $title;?></h1>
<h5 class="text-center" style="color:red;"><?= $description;?></h5>
</div>

<form class="d-flex" role="search" method="post" action="<?= base_url('search_deleted/');?>">
          <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="<?= $keywords;?>" required>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

    <style>
        .table-container {
            overflow-x: auto;
            max-width: 100%;
        }

        table {
            width: 100%;
        }
    </style>

<br/>

<div class="alert alert-danger" role="alert">
    "<?= $keywords;?>" has <?= number_format($total);?> deleted records.
</div>

<div class="table-container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" class="text-center align-middle">Time Stamp</th>
      <th scope="col" class="text-center align-middle">User</th>
      <th scope="col" class="text-center align-middle">Reason</th>
      <th scope="col" class="text-center align-middle">First Name</th>
      <th scope="col" class="text-center align-middle">Last Name</th>
      <th scope="col" class="text-center align-middle">Address</th>
      <th scope="col" class="text-center align-middle">Box Type</th>
      <th scope="col" class="text-center align-middle">Box Number</th>
      <th scope="col" class="text-center align-middle">Chip ID</th>
      <th scope="col" class="text-center align-middle">CCA No.</th>
      <th scope="col" class="text-center align-middle">STB ID</th>
      <th scope="col" class="text-center align-middle">Transaction Type</th>
      <th scope="col" class="text-center align-middle">Date of Transaction</th>
      <th scope="col" class="text-center align-middle">Contact</th>
      <th scope="col" class="text-center align-middle">Installer</th>
      <th scope="col" class="text-center align-middle">Remarks</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($delete_logs as $row){?>
    <tr>
      <td class="text-center align-middle"><?= date('Y-m-d h:i:s A', strtotime($row['timeStamp']));?></td>
      <td class="text-center align-middle"><?= $row['user'];?></td>
      <td class="text-center align-middle"><?= $row['reason'];?></td>
      <td class="text-center align-middle"><?= $row['firstName'];?></td>
      <td class="text-center align-middle"><?= $row['lastName'];?></td>
      <td class="text-center align-middle"><?= $row['address'];?></td>

      <td <?php if($row['boxType'] == "gpinoy"){echo 'class="table-success text-center align-middle"';}
      else if($row['boxType'] == "gsathd"){echo 'class="table-primary text-center align-middle"';}
      else if ($row['boxType'] == "cignal"){echo 'class="table-danger text-center align-middle"';}
      else if ($row['boxType'] == "satlite"){echo 'class="table-warning text-center align-middle"';}?>><?= $row['boxType'];?></td>

      <td class="text-center align-middle" class="non-copyable" style="user-select: none;color: gray;"><b><?= $row['boxNumber'];?></b></td>

      <td class="text-center align-middle"><?= $row['chipid'];?></td>
      <td class="text-center align-middle"><?= $row['cca'];?></td>
      <td class="text-center align-middle"><?= $row['stb'];?></td>
      <td class="text-center align-middle"><?= $row['transactionType'];?></td>
      <td class="text-center align-middle"><?= $row['dateOfPurchase'];?></td>
      <td class="text-center align-middle"><?= $row['contact'];?></td>
      <td class="text-center align-middle"><?= $row['installer'];?></td>
      <td class="text-center align-middle"><?= $row['remarks'];?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<?= $this->pagination->create_links(); ?>

<script>

const nonCopyableCells = document.querySelectorAll('.non-copyable');

nonCopyableCells.forEach((cell) => {
  cell.addEventListener('contextmenu', (e) => {
    e.preventDefault(); // Prevent right-click context menu
  });

  cell.addEventListener('copy', (e) => {
    e.preventDefault(); // Prevent copy via keyboard shortcut (e.g., Ctrl+C)
  });
});

</script>