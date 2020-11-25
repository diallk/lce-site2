<style>

*{box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #f55a00;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    </style>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- <?php echo $lang['pop1']; ?> -->
<button class="open-button" onclick="openForm()" style="border-radius: 100%;width:5%;"><span style="text-align:center;justify-content:center"><i class="material-icons">chat_bubble</i></span></button>
            <div class="chat-popup" id="myForm" style="height: 600px;overflow:scroll">
                <form action="/action_page.php" class="form-container">
                    <h1>Contact</h1>

                    <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4"><?php echo $lang['pop_form']['l1']; ?></label>
                                <input type="email" class="form-control form-control-lg " id="inputEmail4" placeholder="Ex : xxx xxx" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4"><?php echo $lang['pop_form']['l2']; ?></label>
                                <input type="password" class="form-control form-control-lg" id="inputPassword4" placeholder="Ex : xxxx@yyy.com" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress"><?php echo $lang['pop_form']['l3']; ?></label>
                              <input type="text" class="form-control form-control-lg" id="inputAddress" placeholder="Ex : 00000000" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)" >
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2"><?php echo $lang['pop_form']['l4']; ?></label>
                              <input type="text" class="form-control form-control-lg" id="inputAddress2" placeholder="Ex : xxxx" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                  <label for="textareamessage"><?php echo $lang['pop_form']['l5']; ?></label>
                                  <textarea name="" id="" rows="3" class="form-control form-control-lg" placeholder="<?php echo $lang['pop_form']['l6']; ?>" style="border-radius: 0;border-color:rgba(71, 71, 71, 0.678)"></textarea>
                              </div>
                            </div>                                                    

                    <button type="submit" class="btn"><?php echo $lang['pop_form']['b1']; ?></button>
                    <button type="button" class="btn cancel" onclick="closeForm()"><?php echo $lang['pop_form']['b2']; ?></button>
                </form>
            </div>
            <!-- end lw -->
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
</script>