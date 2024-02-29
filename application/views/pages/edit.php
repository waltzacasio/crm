<?php if($this->session->flashdata('post_updated')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>

<?php endif;?>


<h1><?= $title;?></h1>
<hr>

<div class="row">

    <div class="col-lg-12">


        

            <?= form_open('edit/'.$productType . "/" . $serialNumber . "/" . $id);?>

        <div class="form-group">
        <br>

                <p><b>Box Type : </b>
        <input type="hidden" name="boxtype" class="form-control"  value="<?= $productType; ?>">
        <?php if($productType == "product_1"){echo '<button type="button" class="btn btn-success">Product 1</button>';}
            else if($productType == "product_2"){echo '<button type="button" class="btn btn-primary">Product 2</button>';}
            else if ($productType == "product_3"){echo '<button type="button" class="btn btn-danger">Product 3</button>';}
            else if ($productType == "product_4"){echo '<button class="btn" style="background-color: #fd7e14; color: white;">Product 4</button>';} ?>
        </p>

        <div class="row align-items-start">
            <div class="col">
                <input type="hidden" name="id" value="<?= $id ?>">
                <b>First Name :</b>
                <input type="text" name="firstname" class="form-control"  placeholder="Enter First Name" value="<?php echo set_value('firstname', $firstName); ?>">
                <?php echo form_error('firstname'); ?>
            </div>
                <br>
            <div class="col">
                <b>Last Name :</b>
                <input type="text" name="lastname" class="form-control"  placeholder="Enter Last Name" value="<?php echo set_value('lastname', $lastName); ?>">
                <?php echo form_error('lastname'); ?>
            </div>
        </div>
        <br> 
        <div class="row align-items-start">
            <div class="col">
                <b>Address :</b>
                <input type="text" name="address" class="form-control"  placeholder="Enter Address" value="<?php echo set_value('address', $address); ?>">
                <?php echo form_error('address'); ?>
            </div>
                <br>
            <div class="col">
                <b>Email :</b>
                <input type="text" name="contact" class="form-control"  placeholder="Enter Contact No." value="<?php echo set_value('contact', $email); ?>">
                <br>
            </div>
        </div> 
                <div class="form-group">          
                <b>Remarks :</b>
                <textarea name="remarks" cols="30" rows="5" class="form-control" placeholder="Enter remarks"><?= $remarks;?></textarea>
                </div>

        <br>

        <div class="row align-items-start">
            <div class="col">
                <span><b id="boxnumber-label">Serial Number :</b></span>
                <input type="hidden" name="boxnumber" class="form-control"  value="<?= $serialNumber;?>"> 
                <input type="text" name="boxnumber-display" class="form-control"  value="<?= $serialNumber;?>" style="color: gray;" disabled > 
            </div>
                <br> 
        </div>

        <br>

        <div class="row align-items-start">
            <div class="col">
                <b>Transaction Type :</b>
                <input type="hidden" name="transactiontype" class="form-control"  value="<?= $transactionType;?>"> 
                <input type="text" name="transactiontype-display" class="form-control"  placeholder="<?php echo $transactionType;?>" disabled>
            </div>
                <br>
            <div class="col">
                <b>Date Of Purchase :</b>
                <input type="hidden" name="dateofpurchase" class="form-control"   value="<?= $dateOfPurchase;?>">
                <input type="text" name="dateofpurchase-display" class="form-control"  placeholder="<?= $dateOfPurchase;?>" disabled> 
            </div>
        </div>
        <br> 

        <b>Technician :</b>
        <input type="hidden" name="installer" class="form-control" value="<?= $technician;?>">
        <input type="text" name="installer" class="form-control"  placeholder="<?= $technician;?>" disabled> 
        <br>

        </div>
        <br>

        <button type="submit" name="submit" class="btn btn-success">Submit</button>


    </div>


</div>


            <script>
                var boxType = "<?= $boxType ?>";
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

                } else if (boxType === "cignal" || boxType === "satlite") {
                    chipIdLabel.style.display = "none";
                    boxnumberLabel.innerHTML = "Box Number / Account No. :";
                }
            </script>