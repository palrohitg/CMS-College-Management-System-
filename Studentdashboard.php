  <?php 
   session_start();
 if(!(isset( $_SESSION['email'])&&($_SESSION['password'])))
 {
  header("location:studentlogin.php");
 }
  //unset($_SESSION['email']);
  ?>
 
 <!DOCTYPE html>
  <html lang="en">
  <head>
    <style type="text/css">
     .modal-body{
           height: 500px;
            width: 500px;        
            overflow: hidden;
        }
        .modal-body{
            overflow-y: auto;
        } 
        .modal-header{
            background-color: black;
            color: white;
        }
.modal-content{
           position: absolute;
     top: 30px;
    right: 200px;
    bottom: 0;
    left: 0;
  z-index: 10040;
  overflow: auto;
  overflow-y: auto;
      }
    .rohit{
    background-color: blue;
    font-weight: bold;
    color: #ffffff;
   }
  
   </style>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
      
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
       <script src="css/bootstrap.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  </head>
  <script type="text/javascript">
      $(document).ready(function(){
      $("#Dashboard").click(function(){ 
          $.ajax({
            url: "Studentdashboard.php",
            success: function(result) {
               $("#AttendanceContent").html(result);
            }
          });
      });  
      $("#Attendance").click(function(){ 
          $.ajax({
            url: "MyAttendanceShowAll.php",
            success: function(result) {
               $("#AttendanceContent").html(result);
            }
          });
      });
      $("#Exam").click(function(){ 
          $.ajax({
            url: "MyExamsShowAll.php",
            success: function(result) {
               $("#AttendanceContent").html(result);
            }
          });
      });
      $("#Marks").click(function(){ 
          $.ajax({
            url: "MyMarksShowAll.php",
            success: function(result) {
               $("#AttendanceContent").html(result);
            }
          });
      });

    });
    $(document).ready(function(){
      $(".nav-item").click(function(){
      $(".nav-item").removeClass("rohit");  
        $(this).addClass("rohit");
      })
     });
</script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" ><strong >Student Panel</strong></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li  class=" rohit nav-item " id="rohit" data-toggle="tooltip" data-placement="right" title="Dashboard">
           <a class="nav-link" href="Studentdashboard.php" id="Dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
           
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Attendance">
          <a class="nav-link"  id="Attendance">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Attendance</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exam">
          <a class="nav-link" id="Exam">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Exam</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Marks">
          <a class="nav-link" id="Marks">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Marks</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subjects">
          <a class="nav-link" id="Subjects">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text" >Subjects</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a class="nav-link" href="Studentlogin.php"id="Logout" >
            <i class="fa fa-sign-out" aria-hidden="true" ></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
        </ul>
      </div>
  </nav>
  <div class="content-wrapper">
     <div class="container-fluid">
    
        <div id="AttendanceContent">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        
        <div id="changecontent">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"> 45 Students</div>
              </div>    

              <a class="card-footer text-white clearfix small z-1" href="StudentOpenForm.php">
                <span class="float-left">View Details\</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5">34 Faculty!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="FacultyShowAll.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-book"></i>
                </div>
                <div class="mr-5">12 library!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5">13 Notice!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

           </div>
        
        </div>
       
        </div>
    </div>
            <div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                   
                <!-- /.col-lg-4 -->
            
                
      </body>
</html>