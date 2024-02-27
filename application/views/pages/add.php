<h1><?= $title;?></h1>
<hr>
<div class="row">

    <div class="col-lg-12">
    
                <?= form_open('add');?>

                <b>Select Box Type :</b>
                
                <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="boxtype" value="gpinoy" id="gpinoy" onchange="toggleInput()" <?php if ($selectedBoxType === 'gpinoy') { echo 'checked'; } ?>>
                <label class="btn btn-outline-success" for="gpinoy">
                    Gpinoy
                </label>
                </div>

                <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="boxtype" value="gsathd" id="gsathd" onchange="toggleInput()" <?php if ($selectedBoxType === 'gsathd') { echo 'checked'; } ?>>
                <label class="btn btn-outline-primary" for="gsathd">
                    GSAT HD
                </label>
                </div>

                <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="boxtype" value="cignal" id="cignal" onchange="toggleInput()" <?php if ($selectedBoxType === 'cignal') { echo 'checked'; } ?>>
                <label class="btn btn-outline-danger" for="cignal">
                    Cignal
                </label>
                </div>

                <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="boxtype" value="satlite" id="satlite" onchange="toggleInput()" <?php if ($selectedBoxType === 'satlite') { echo 'checked'; } ?>>
                <label class="btn btn-outline-warning" for="satlite">
                    Satlite
                </label>
                </div>
                <?php echo form_error('boxtype'); ?>



        <div class="form-group">
                <br>
                <div class="row align-items-start">
                    <div class="col">
                        <b>First Name :</b>
                        <input type="text" name="firstname" class="form-control"  placeholder="Enter First Name" value="<?= set_value('firstname');?>">
                        <?php echo form_error('firstname'); ?>
                    </div>
                    <br>
                    <div class="col">
                        <b>Last Name :</b>
                        <input type="text" name="lastname" class="form-control"  placeholder="Enter Last Name" value="<?= set_value('lastname');?>">
                        <?php echo form_error('lastname'); ?>
                    </div>
                </div>
                <br>

                <div class="row align-items-start">
                    <div class="col">
                        <b>Address :</b>
                        <input type="text" name="address" class="form-control"  placeholder="Enter Address" value="<?= set_value('address');?>"> 
                        <?php echo form_error('address'); ?>
                    </div>
                    <div class="col">
                        <b>Contact No. :</b>
                        <input type="text" name="contact" class="form-control"  placeholder="Enter Contact No." value="<?= set_value('contact');?>">
                    </div>
                </div>
                <br>

                <div class="row align-items-start">
                    <div class="col">
                        <b>Box Number :</b>
                        <input type="text" id="boxnumber" name="boxnumber" class="form-control"  placeholder="Enter Box / SN / Acc No." value="<?= set_value('boxnumber');?>"> 
                        <?php echo form_error('boxnumber'); ?>
                        <br>
                    </div>
                
                    <div id="chipid-label" class="col">
                        <b>Chip ID :</b>
                        <input type="text" id="chipid" name="chipid" class="form-control"  placeholder="Enter Chip ID" value="<?= set_value('chipid');?>">
                        <?php echo form_error('chipid'); ?>
                        <br> 
                    </div>
                </div>

               
                <div id="stb-cca-label">
                    <div class="row align-items-start">
                        <div class="col">
                            <b id="cca-label">CCA No. :</b>
                            <input type="text" id="cca" name="cca" class="form-control"  placeholder="Enter CCA No." value="<?= set_value('cca');?>">
                            <?php echo form_error('cca'); ?>
                            <br> 
                        </div>
                        <div class="col">
                            <b>STB ID :</b>
                            <input type="text" id="stb" name="stb" class="form-control"  placeholder="Enter STB ID" value="<?= set_value('stb');?>">
                            <?php echo form_error('stb'); ?>
                            <br>
                        </div>
                    </div>
                </div>




                            <b>Transaction Date :</b>
                            <br>
                            <!--<input type="text" name="dateofpurchase" class="form-control"  placeholder="Enter Date of Transaction" value="<?php //set_value('dateofpurchase');?>">
                            -->
                            <label for="day">Day:</label>
                                <select name="day" id="day" required>
                                    <?php
                                    // Get the current day
                                    if (!$selectedDay) {
                                    $current_day = date("d");
                                    } else {$current_day = $selectedDay;}

                                    // Loop from 1 to 31 to generate the options
                                    for ($day = 1; $day <= 31; $day++) {
                                        $value = str_pad($day, 2, '0', STR_PAD_LEFT); // Add leading zero if single digit
                                        $selected_attr = ($current_day == $day) ? 'selected' : '';
                                        echo "<option value='{$value}' {$selected_attr}>{$value}</option>";
                                    }
                                    ?>
                                </select>
                        
                            <label for="month">Month:</label>
                                <select name="month" id="month" required>
                                    <?php
                                    $month_names = array(
                                        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June',
                                        7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
                                    );

                                    // Get the current month
                                    if (!$selectedMonth) {
                                    $current_month = date("n");
                                    } else {$current_month = $selectedMonth;}

                                    // Loop through the array to generate the options
                                    foreach ($month_names as $month_num => $month_name) {
                                        $selected_attr = ($current_month == $month_num) ? 'selected' : '';
                                        echo "<option value='{$month_num}' {$selected_attr}>{$month_name}</option>";
                                    }
                                    ?>
                                </select>

                            <label for="year">Year:</label>
                                <select name="year" id="year" required>
                                    <?php
                                    // Get the current year
                                    $current_year = date("Y");

                                    // Get the previous year
                                    $previous_year = $current_year - 1;

                                    // Loop from the previous year to the current year to generate the options
                                    for ($year = $previous_year; $year <= $current_year; $year++) {
                                        $selected_attr = ($current_year == $year) ? 'selected' : '';
                                        echo "<option value='{$year}' {$selected_attr}>{$year}</option>";
                                    }
                                    ?>
                                </select>

                            <?php echo form_error('dateofpurchase'); ?>
                            <br>
                            <br> 

                
                

                        <!-- purchase type -->
                        <b>Transaction Type :</b>
                        <br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transactiontype" value="INSTALL" id="install" <?php if ($selectedTransactionType === 'INSTALL') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="install">
                            Install
                        </label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transactiontype" value="SET" id="set" <?php if ($selectedTransactionType === 'SET') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="set">
                            Set
                        </label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transactiontype" value="BOX KIT" id="boxkit" <?php if ($selectedTransactionType === 'BOX KIT') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="boxkit">
                            Box Kit
                        </label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transactiontype" value="BOX ONLY" id="boxonly" <?php if ($selectedTransactionType === 'BOX ONLY') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="boxonly">
                            Box Only
                        </label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="transactiontype" value="Nagparecord" id="nagparecord" <?php if ($selectedTransactionType === 'Nagparecord') { echo 'checked'; } ?>>
                        <label class="form-check-label" for="nagparecord">
                            Nagparecord
                        </label>
                        </div>
                        <?php echo form_error('transactiontype'); ?>

                    <br>
                    <br>

                    <b>Installer :</b>
                    <input type="text" name="installer" class="form-control"  placeholder="Enter Installer" value="<?= set_value('installer');?>"> 
                    <?php echo form_error('installer'); ?>
                    <br>



            <div class="form-group">
                <b>Remarks :</b>
                <textarea name="remarks" id="" cols="30" rows="5" class="form-control" placeholder="Enter remarks"><?php echo set_value('remarks'); ?></textarea>
            </div>

        </div>
            <br>
        
            <button type="submit" name="submit" class="btn btn-success">Submit</button>


    </div>


</div>


                    <script>

                    function toggleInput() {
                        var inputBoxNumber = document.getElementById("boxnumber");
                        var radioGpinoy = document.getElementById("gpinoy");
                        var radioGsatHD = document.getElementById("gsathd");
                        var radioCignal = document.getElementById("cignal");
                        var radioSatlite = document.getElementById("satlite");
                        var stbccaLabel = document.getElementById("stb-cca-label");
                        var chipidLabel = document.getElementById("chipid-label");

                        chipidLabel.style.display = "block";    
                        
                        if (radioGpinoy.checked) {
                            inputBoxNumber.placeholder = "Enter Serial Number (SN)";
                            chipidLabel.style.display = "block";
                            stbccaLabel.style.display = "none";

                        } else if (radioGsatHD.checked) {
                            inputBoxNumber.placeholder = "Enter Serial Number (SN) / Access ID";
                            chipidLabel.style.display = "block";
                            stbccaLabel.style.display = "none";

                        } else if (radioCignal.checked) {
                            inputBoxNumber.placeholder = "Enter Account No.";
                            stbccaLabel.style.display = "block";
                            chipidLabel.style.display = "none";

                        } else if (radioSatlite.checked) {
                            inputBoxNumber.placeholder = "Enter Account No.";
                            stbccaLabel.style.display = "block";
                            chipidLabel.style.display = "none";
                        }
                    }

                    toggleInput();

                    </script>