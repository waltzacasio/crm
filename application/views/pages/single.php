<?php if($this->session->flashdata('post_added')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_added').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_updated')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>

<?php endif;?>

<h1><?= $title;?></h1>
<hr>

<p><b>Product Type : </b> <?php if($this->uri->segment(2) == "product_1"){echo '<button type="button" class="btn btn-success">Product_1</button>';}
      else if($this->uri->segment(2) == "product_2"){echo '<button type="button" class="btn btn-primary">Product_2</button>';}
      else if ($this->uri->segment(2) == "product_3"){echo '<button type="button" class="btn btn-danger">Product_3</button>';}
      else if ($this->uri->segment(2) == "product_4"){echo '<button class="btn" style="background-color: #fd7e14; color: white;">Product_4</button>';}?></p>

<hr>

<div class="row align-items-start"> 
    <div class="col">
        <p><b>Full Name : </b><?= $first_name;?> <?= $last_name; ?></p>
    </div>
    <div class="col">
        <p><b>Address : </b> <?= $address; ?></p>
    </div>
</div>

<div class="row align-items-start">

    <div class="col">
        <p><b>Email : </b> <?= $email; ?></p>
    </div>
</div>

<hr>

<div class="row align-items-start">
    <div class="col">
        <p><b id="boxnumber-label">Serial Number : </b> <?= $serial_number; ?></p>
    </div>
    <div class="col">
        <p><b>Transaction Type : </b> <?= $transaction_type; ?></p>
    </div>
</div>

<div class="row align-items-start">     
    <div class="col">
        <p><b>Date Of Purchase : </b> <?= $date_of_purchase; ?></p>
    </div>
    <div class="col">
        <p><b>Technician : </b> <?= $technician; ?></p>
    </div>
</div>

<div class="row align-items-start">
            <p><b>Remarks : </b> <?= $remarks; ?></p>
</div>



<?php if($this->session->logged_in == true && $this->session->access == 1){ ?>


    
<div class="btn-group"></div>
    <a href="<?= base_url()?><?= "edit/";?><?= $this->uri->segment(2) . "/";?><?= $serial_number . '/' ?><?= $id;?>" class="btn btn-primary">Edit</a>
    <a href="<?= base_url()?><?= "edit_history/" . $this->uri->segment(2) . '/';?><?= $id . '%26';?>" class="btn btn-success" >View Edit History</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

<?php } ?>


<div id="content-container">
        <!-- Content from example.html will be displayed here -->
    </div>




<script>
                // var boxType = "<?= $this->uri->segment(2); ?>";
                // var chipIdLabel = document.getElementById("chipid-label");
                // var ccaLabel = document.getElementById("cca-label");
                // var stbLabel = document.getElementById("stb-label");
                // var boxnumberLabel = document.getElementById("boxnumber-label");


                // if (boxType === "gpinoy") {
                //     ccaLabel.style.display = "none";
                //     stbLabel.style.display = "none";
                //     boxnumberLabel.innerHTML = "Box Number / Serial Number (SN) :";

                // } else if (boxType === "gsathd") {
                //     ccaLabel.style.display = "none";
                //     stbLabel.style.display = "none";
                //     boxnumberLabel.innerHTML = "Box Number / Serial Number (SN) / Access ID :";

                // } else if (boxType === "satlite") {
                //     chipIdLabel.style.display = "none";
                //     boxnumberLabel.innerHTML = "Box Number / Account No. :";

                // } else if (boxType === "cignal") {
                //     chipIdLabel.style.display = "none";
                //     boxnumberLabel.innerHTML = "Box Number / Account No. :";
                // }


</script>