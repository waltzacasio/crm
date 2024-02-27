<?php if($this->session->flashdata('post_updated')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>';?>

<?php endif;?>


<h1><?= $title;?></h1>
<hr>

<div class="row">

    <div class="col-lg-12">


        

            <?= form_open('edit/'.$boxType . "/" . $boxNumber . "/" . $id);?>

        <div class="form-group">
        <br>

                <p><b>Box Type : </b>
        <input type="hidden" name="boxtype" class="form-control"  value="<?= $boxType; ?>">
        <?php if($boxType == "gpinoy"){echo '<button type="button" class="btn btn-success">GPinoy</button>';}
            else if($boxType == "gsathd"){echo '<button type="button" class="btn btn-primary">GSat HD</button>';}
            else if ($boxType == "cignal"){echo '<button type="button" class="btn btn-danger">Cignal ' . $type . '</button>';}
            else if ($boxType == "satlite"){echo '<button class="btn" style="background-color: #fd7e14; color: white;">Satlite</button>';} ?>
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
                <b>Contact No. :</b>
                <input type="text" name="contact" class="form-control"  placeholder="Enter Contact No." value="<?php echo set_value('contact', $contact); ?>">
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
                <span><b id="boxnumber-label">Box Number :</b></span>
                <input type="hidden" name="boxnumber" class="form-control"  value="<?= $boxNumber;?>"> 
                <input type="text" name="boxnumber-display" class="form-control"  value="<?= $boxNumber;?>" style="color: gray;" disabled > 
            </div>
                <br> 
            <div class="col">
                <span id="chipid-label"><b>Chip ID :</b>
                <input type="hidden" name="chipid" class="form-control"  value="<?= $chipid;?>">
                <input type="text" name="chipid-display" class="form-control"  placeholder="<?= $chipid;?>" disabled>
               </span>
            </div>
        </div>

        <br>

        <div class="row align-items-start">
            <div class="col">
                <span id="cca-label"><b>CCA No. :</b>
                <input type="hidden" name="cca" class="form-control"  value="<?= $cca;?>">
                <input type="text" name="cca-display" class="form-control"  placeholder="<?= $cca;?>" disabled>
                <br></span> 
            </div>
            <div class="col">
                <span id="stb-label"><b>STB ID :</b>
                <input type="hidden" name="stb" class="form-control"  value="<?= $stb;?>"> 
                <input type="text" name="stb-display" class="form-control"  placeholder="<?= $stb;?>" disabled> 
                </span>
            </div>
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

        <b>Installer :</b>
        <input type="hidden" name="installer" class="form-control" value="<?= $installer;?>">
        <input type="text" name="installer" class="form-control"  placeholder="<?= $installer;?>" disabled> 
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