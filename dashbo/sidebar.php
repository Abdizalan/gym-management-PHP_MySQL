<?php 
session_start();
if(isset($_SESSION['secure'])){
$userType = isset($_SESSION['userType']) ? $_SESSION['userType'] : 'guest';
$userType = htmlspecialchars($userType, ENT_QUOTES, 'UTF-8');
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
            <i class="fa-solid fa-dumbbell" style="color: #ffffff; width: 20px; margin: 20px;"></i>

              
              <h4 style="color: white;">GYM</h4>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
               <!--  <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                > -->
                <a href="dashbo.php">
                  <i class="bi bi-house-check-fill"></i>

                  <p>Dashboard</p>
                  </a>
                  
                  <!-- <span class="caret"></span> -->
                <!-- </a> -->
                <!-- <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="dashbo.php">
                        <span class="sub-item">Dashboard 1</span>
                      </a>
                    </li>
                  </ul>
                </div> -->
              <!-- </li> -->
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
              <?php if ($userType === 'admin'): ?>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="bi bi-buildings-fill"></i>
                  <p>WorkOuts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../pages/courses.php" class="get_form">
                        <span class="sub-item">Manage Workouts</span>
                      </a>
                    </li>
                                   
                 </ul>
                </div>
              </li>
              <?php endif ?>
             
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                <i class="fa-solid fa-person-dots-from-line" style="color: #ffffff;"></i>
                  <p>Tasks</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../pages/people.php" class="get_form">
                        <span class="sub-item">Members</span>
                      </a>
                    </li>
                     <li>
                      <a href="../pages/schedule.php" class="get_form">
                        <span class="sub-item">Schedule</span>
                      </a>
                    </li>
                    <li>
                      <!-- <a href="../pages/attendance.php" class="get_form">
                        <span class="sub-item">Attendance</span>
                      </a> -->
                    </li>
                    <li>
                      <!-- <a href="../pages/measurement.php" class="get_form">
                        <span class="sub-item">Measurement</span>
                      </a> -->
                    </li>
                    <li>
                      <a href="../pages/charges.php" class="get_form">
                        <span class="sub-item">Charges</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                <i class="fa-solid fa-receipt" style="color: #ffffff;"></i>
                  <p>Receipts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../pages/account.php" class="get_form">
                        <span class="sub-item">Account</span>
                      </a>
                    </li>
                    <li>
                      <a href="../pages/receipt.php" class="get_form">
                         <span class="sub-item">Receipt</span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </li>

              <?php if ($userType === 'admin'): ?>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tab">
                <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i>
                  <p>Reports</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tab">
                  <ul class="nav nav-collapse">
                    
                    <li>
                      <a href="../pages/payments.php" class="get_form">
                         <span class="sub-item">payment_reports</span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </li>
              
         
              
              <li>
                      <a href="../pages/users.php" class="get_form">
                      <i class="fa-solid fa-user" style="color: #ffffff; margin-left:30px; color:"></i>
                         <span class="sub-item" style="margin-left:18px; color: white;">Users</span>
                      </a>
                    </li>
                
              </li>


              
           <?php endif ?>

             
            </ul>
            

          </div>
        </div>
      </div>
      <script src="oper.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="  link(rel="stylesheet", href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css", integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy", crossorigin="anonymous")">
<?php } ?>
