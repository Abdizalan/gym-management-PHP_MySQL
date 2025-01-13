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
    <input type="hidden" id="table" value="schedules" />
    <input type="hidden" id="column" value="id" />

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
    <input type="hidden" value="schedules" id="t" class="tt" name="table">
<div class="modal mo" id="modaldata">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title">Add_Schedule</h3>
                    <button class="btn" data-bs-dismiss="modal" aria-label="close"><i class="bi bi-x-lg bi"></i></button>
                  </div>
                  <div class="modal-body">  
                  <form id="form" class="text-dark">                     
                      <div class="form-group">
                      <input type="hidden" name="table" value="schedules_proc" id="tt">
                      <input type="hidden" name="txt1" class="form-control txt">
                      <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <label>member: </label>
                        <select name="txt2" class="form-control txt">
                            <option>choose from member</option>
                            <?php $co->fillCombo("SELECT id, name from people") ?>
                        </select>
                        <label>course: </label>
                        <select name="txt3" class="form-control txt">
                            <option>choose from courses</option>
                            <?php $co->fillCombo("SELECT id, cor_name FROM courses;") ?>
                        </select>
                            </div>

                            <div class="col">
                                <label>Sch_Time</label>
                                <input type="time" name="txt5" class="form-control txt">
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