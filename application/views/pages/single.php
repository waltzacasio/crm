<?php if($this->session->flashdata('post_added')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_added').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_updated')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>

<?php endif;?>

<h1><?= $title;?></h1>
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


</script>