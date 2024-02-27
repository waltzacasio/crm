<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="mx-auto d-block" style="display: flex; flex-direction: column;">


          
            <?= form_open('delete');?>
                <h2>Please select reason for deleting.</h2>
                    <input type="hidden" value="<?= $this->uri->segment(2);?>" name="boxtype">
                    <input type="hidden" value="<?= $id;?>" name="id">


          <!-- Reason for delete OPTIONS -->
          <div class="container">

            <div class="mx-auto d-block">

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deletereason" id="damage" value="Damage Box" onchange="handleRadioChange()" required>
                  <label class="form-check-label" for="damage">
                    Damage Box
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deletereason" id="duplicate" value="Duplicate Entry" onchange="handleRadioChange()" required>
                  <label class="form-check-label" for="duplicate">
                    Duplicate Entry
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deletereason" id="wrong" value="Wrong Entry" onchange="handleRadioChange()" required>
                  <label class="form-check-label" for="wrong">
                    Wrong Entry
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deletereason" id="other" onchange="handleRadioChange()">
                  <label class="form-check-label" for="other">
                    Other Reason
                  </label>
                </div>

                <div class="form-group">
                    <textarea name="remarks" id="textarea" cols="30" rows="5" class="form-control" style="display: none;" placeholder="Please specify" ></textarea>
                </div>

            </div>  

          </div>
        </div>


      <div class="modal-footer">
        <div class="btn-group">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>

window.addEventListener("DOMContentLoaded", function() {
  var radioOther = document.getElementById("other");
  var textarea = document.getElementById("textarea");

  textarea.style.display = !radioOther.checked ? "none" : "block";
});

function handleRadioChange() {
    var radioOther = document.getElementById("other");
    var textarea = document.getElementById("textarea");
    
    if (!radioOther.checked) {
        textarea.value = "";
        textarea.style.display = "none";
        textarea.removeAttribute("required");


    } else {
    textarea.style.display = "block";
    textarea.setAttribute('required', 'conditional');
    }
}

</script>