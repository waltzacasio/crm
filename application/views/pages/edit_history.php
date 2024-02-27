<?php if($this->session->flashdata('user_loggedin')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
<?php endif;?>  

<?php if($this->session->flashdata('post_added')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_added').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_updated')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>

<?php endif;?>


<h1><?= $title1;?></h1>
<hr>

<p><b>Box Type : </b> <?php if($this->uri->segment(2) == "gpinoy"){echo '<button type="button" class="btn btn-success">GPinoy</button>';}
      else if($this->uri->segment(2) == "gsathd"){echo '<button type="button" class="btn btn-primary">GSat HD</button>';}
      else if ($this->uri->segment(2) == "cignal"){echo '<button type="button" class="btn btn-danger">Cignal ' . $type . '</button>';}
      else if ($this->uri->segment(2) == "satlite"){echo '<button class="btn" style="background-color: #fd7e14; color: white;">Satlite</button>';}?></p>

<div class="row align-items-start">
    <div class="col">
        <p><b>First Name : </b><?= $firstName;?></p>
    </div>
    <div class="col">
        <p><b>Last Name : </b> <?= $lastName; ?></p>
    </div>
</div>

<div class="row align-items-start">
    <div class="col">
        <p><b>Address : </b> <?= $address; ?></p>
    </div>
    <div class="col">
        <p><b>Contact Number : </b> <?= $contact; ?></p>
    </div>
</div>



<div class="row align-items-start">
    <div class="col">
        <p><b id="boxnumber-label">Box Number : </b> <?= $boxNumber; ?></p>
    </div>
    <div class="col">
        <span id="chipid-label"><p><b>Chip ID: </b> <?= $chipid; ?></p></span>
    </div>
</div>

<div class="row align-items-start">
    <div class="col">
        <span id="cca-label"><p><b>CCA: </b> <?= $cca; ?></p></span>
    </div>
    <div class="col">
        <span id="stb-label"><p><b>STB: </b> <?= $stb; ?></p></span>
    </div>
</div>

<div class="row align-items-start">
    <div class="col">
        <p><b>Transaction Type : </b> <?= $transactionType; ?></p>
    </div>
    <div class="col">
        <p><b>Date Of Transaction : </b> <?= $dateOfPurchase; ?></p>
    </div>
</div>

        <p><b>Installer : </b> <?= $installer; ?></p>

        <p><b>Remarks : </b> <?= $remarks; ?></p>


<?php if($this->session->logged_in == true && $this->session->access == 1){ ?>


    
<div class="btn-group"></div>
    <a href="<?= base_url()?><?= "edit/";?><?= $this->uri->segment(2) . "/";?><?= $boxNumber . '/' ?><?= $id;?>" class="btn btn-primary">Edit</a>
    <a href="<?= base_url()?><?= "edit_history/" . $this->uri->segment(2) . '/';?><?= $id . '%26';?>" class="btn btn-success" >View Edit History</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

<?php } ?>


<div id="content-container">
        <!-- Content from example.html will be displayed here -->
    </div>






<br>
<hr>

<h1 class="text-center"><?= $title;?></h1>

<br/>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" class="text-center align-middle">Time Stamp</th>
      <th scope="col" class="text-center align-middle">User</th>
      <th scope="col" class="text-center align-middle">Field Name</th>
      <th scope="col" class="text-center align-middle">Old Value</th>
      <th scope="col" class="text-center align-middle">New Value</th>
    </tr>
  </thead>

  <tbody>
  <?php foreach($edit_logs as $row){?>
    <tr>
      <td class="text-center align-middle"><?= date('Y-m-d h:i:s A', strtotime($row['timeStamp']));?></td>
      <td class="text-center align-middle"><?= $row['user'];?></td>

      <td class="text-center align-middle">

      <?php
          switch ($row['fieldName']) {
            case "firstName":
                echo 'First Name';
                break;
            case "lastName":
                echo 'Last Name';
                break;
            case "address":
                echo 'Address';
                break;
            case "dateOfPurchase":
                echo 'Date Of Transaction';
                break;
            case "contact":
                echo 'Contact';
                break;
            case "installer":
                echo 'Installer';
                break;
            case "remarks":
                echo 'Remarks';
                break;
            case "transactionType":
                echo 'transactiontype';
                break;
              
          }
      ?>

      </td>


      <td class="text-center align-middle"><?= $row['oldValue'];?></td>
      <td class="text-center align-middle"><?= $row['newValue'];?></td>
    </tr>
    <?php } ?>
  </tbody>

</table>

<?= $this->pagination->create_links(); ?>

<script>
                var boxType = "<?= $this->uri->segment(2); ?>";
                var chipIdLabel = document.getElementById("chipid-label");
                var ccaLabel = document.getElementById("cca-label");
                var stbLabel = document.getElementById("stb-label");
                var boxnumberLabel = document.getElementById("boxnumber-label");


                if (boxType === "gpinoy") {
                    ccaLabel.style.display = "none";
                    stbLabel.style.display = "none";
                    boxnumberLabel.innerHTML = "Box Number / Serial Number (SN) :";

                } else if (boxType === "gsathd") {
                    ccaLabel.style.display = "none";
                    stbLabel.style.display = "none";
                    boxnumberLabel.innerHTML = "Box Number / Serial Number (SN) / Access ID :";

                } else if (boxType === "satlite") {
                    chipIdLabel.style.display = "none";
                    boxnumberLabel.innerHTML = "Box Number / Account No. :";

                } else if (boxType === "cignal") {
                    chipIdLabel.style.display = "none";
                    boxnumberLabel.innerHTML = "Box Number / Account No. :";
                }


                // Function to scroll to the bottom of the page
                function scrollToBottom() {
                    window.scrollTo(0, document.body.scrollHeight);
                }

                // Automatically scroll to the bottom on page load
                window.onload = scrollToBottom;

</script>