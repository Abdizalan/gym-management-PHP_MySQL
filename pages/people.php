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
    <input type="hidden" id="table" value="people" />
    <input type="hidden" id="column" value="name" />

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
    <input type="hidden" value="people" id="t" class="tt" name="table">

<div class="modal mo" id="modaldata">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title">Add_people</h2>
                    <button class="btn" data-bs-dismiss="modal" aria-label="close"><i class="bi bi-x-lg bi"></i></button>

                  </div>
                  <div class="modal-body">
                    
                  <form id="form">                     
                      <div class="form-group">
                      <input type="hidden" name="table" value="people" id="tt">
                      <input type="hidden" name="txt1" class="form-control txt">
                      
                      <div class="row">
                        <div class="col">
                        <div class="form-group">
                        <label>Name: </label>
                        <input type="text" name="txt2" class="form-control txt" placeholder="name" id="cor" required>
                        <label>Tell</label>
                        <input type="number" name="txt3" class="form-control txt" placeholder="Number" id="pr" required>
                      </div>

                        </div>

                        <div class="col">
                        <div class="form-group">
                        <label>sex: </label>
                      <select class="form-control txt" name="txt4">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                        <label>Address</label>
                        <input type="text" name="txt5" class="form-control txt" placeholder="Address" id="pr" required>
                      </div>
                        </div>

                      </div>

                      <div class="row">
                      <div class="col">
                        <div class="form-group">
                        <label>Birth_date: </label>
                        <input type="date" name="txt6" class="form-control txt" id="cor" required>
                        <label>Weight</label>
                        <input type="number" name="txt7" class="form-control txt" placeholder="Weight" id="pr" required>
                      </div>
                        </div>

                        <div class="col">
                        <div class="form-group">
                        <label>Reg_date: </label>
                        <input type="date" name="txt8" class="form-control txt" id="cor" required>
                      </div>
                        </div>
                      </div>
                      <input type="submit" class="btn btn-primary b1" id="b1"  value="Save">
                      <input type="button" class="btn btn-success" id="b2" value="Update">
                      </form>

                      
                </div>
              </div>
            </div>
</body>
</html>

<script src="../js/con2.js"></script>