<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button class="btn btn-success m-3"  data-bs-toggle="modal" data-bs-target=".mo" id="addb">Add_new </button>
<?php include "../php/Codes.php";
    $co=new Codes();
    ?>
     <form id="fm1">
    <!-- Hidden Inputs for Table and Column -->
    <input type="hidden" id="table" value="accounts" />
    <input type="hidden" id="column" value="acc_name" />

    <!-- Search Input -->
    <input
      id="search"
      name="search"
      type="text"
      class="form-control"
      placeholder="search..."
      style="width: 20%; margin-left: 76%; margin-bottom: 8px;" />
  </form>
          </div>
     <div class="modal m-5 modal-sm d-center" id="messege" style="text-align: center;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div id="p1"></div>
                      <input type="submit" value="Ok" class="btn btn-primary btn-sm" id="sve">
                </div>                    
                    
                    </div>
                  </div>
              </div>
    
    <div id="rep"></div>
    <input type="hidden" value="accounts" id="t" class="tt" name="table">

<div class="modal mo" id="modaldata">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title">Add_Account</h2>
                    <button class="btn" data-bs-dismiss="modal" aria-label="close"><i class="bi bi-x-lg bi"></i></button>

                  </div>
                  <div class="modal-body">
                    
                  <form id="form">                     
                      <div class="form-group">
                      <input type="hidden" name="table" value="accounts_proc" id="tt">
                      <input type="hidden" name="txt1" class="form-control txt">
                      <div class="form-group">
                        <label>Account Type: </label>
                        <input type="text" name="txt2" class="form-control txt" placeholder="Account_name" id="cor" required>
                        <label>Instition</label>
                        <input type="text" name="txt3" class="form-control txt" placeholder="Instition" id="pr" required>
                        <label>Balance</label>
                        <input type="number" name="txt4" class="form-control txt" placeholder="balance" id="pr" required>
                      </div>
                      <input type="submit" class="btn btn-primary b1" id="b1"  value="Save">
                      <input type="button" class="btn btn-success" id="b2" value="Update">
                      </form>

                      
                </div>
              </div>
            </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script src="../js/con2.js"></script>