<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<button class="btn btn-success m-3"  data-bs-toggle="modal" data-bs-target=".mo" id="addb">Add User </button>
<?php include "../php/Codes.php";
    $co=new Codes();
    ?>

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
    <input type="hidden" value="users" id="t" class="tt" name="table">

<div class="modal mo" id="modaldata">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title">Add_user</h2>
                    <button class="btn" data-bs-dismiss="modal" aria-label="close"><i class="bi bi-x-lg bi"></i></button>

                  </div>
                  <div class="modal-body">
                    
                  <form id="form">                     
                      <div class="form-group">
                      <input type="hidden" name="table" value="users_proc" id="tt">
                      <input type="hidden" name="txt1" class="form-control txt">
                      
                      <div class="row">
                        <div class="col">
                        <div class="form-group">
                        <label>username: </label>
                        <input type="text" name="txt2" class="form-control txt" placeholder="username" id="cor" required>
                        <label>password: </label>
                        <input type="text" name="txt3" class="form-control txt" placeholder="password" id="pr" required>
                      </div>

                        </div>

                        <div class="col">
                        <div class="form-group">
                        <label>userType: </label>
                      <select class="form-control txt" name="txt4">
                        <option>Select</option>
                        <option>Admin</option>
                        <option>User</option>
                      </select>
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