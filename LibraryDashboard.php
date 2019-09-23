  <?php 
session_start();
 if(!(isset( $_SESSION['Loggedin'])&&($_SESSION['Loggedin']="library")))
 {
  header("location:librarylogin.php");
 }
 
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
    <title>Library</title>
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
      <script type="text/javascript">
      $(document).ready(function(){
      $("#Student").click(function(){ 
          $.ajax({
            url: "Librarystudentlogin.php",
            success: function(result) {
               $("#AjaxContent").html(result);
            }
          });
      });

         $("#Faculty").click(function(){ 
          $.ajax({
            url: "LibraryFacultylogin.php",
            success: function(result) {
              $("#AjaxContent").html(result);
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
       function CallAjaxEdit(RollNo,BookCode){
      var search=RollNo;
      var BookCode=BookCode;
      $.ajax({
        url:"LibraryStudentEdit.php",
        type:"GET",
        data:{Search:search,BookCode:BookCode},
        success:function(result){
         $("#modal-body").html(result);
        $("#exampleModal").modal('show');            
        
      }
    });
    }
    function CallAjaxDelete(RollNo,BookCode){
      var search=RollNo;
      var BookCode=BookCode;
      $.ajax({
        url:"LibraryDelete.php",
        type:"GET",
        data:{Search:search,BookCode:BookCode},
        success:function(result){
          
          $("#DeleteModalBody").html(result);
         $("#DeleteModal").modal('show');            
        
      }
    });
    }
    function CallAjaxView(RollNo,BookCode){
      var search=RollNo;
      var BookCode=BookCode;
       $.ajax({
        url:"libraryView.php",
        type:"GET",
        data:{Search:search,BookCode:BookCode},
        success:function(result){
        $("#ViewModalBody").html(result);
         $("#View").modal('show');            
        
      }
    });
    }
    function CallAjaxAdd(){
       $.ajax({
        url:"libraryStudentAdd.php",
        success:function(result){
          $("#AddModalBody").html(result);
         $("#Add").modal('show');            
        
      }
    });
    }
     function CallAjaxEditFaculty(FacultyID,Code){
      var search=FacultyID;
      var Code=Code;
        $.ajax({
        url:"LibraryFacultyEdit.php",
        type:"GET",
        data:{Search:search,Code:Code},
         success:function(result){
         $("#modalFacultybody").html(result);
        $("#FacultyModal").modal('show');            
        
      }
    });
    }
    function CallAjaxDeleteFaculty(FacultyID,Code){
      var search=FacultyID;
      var Code=Code;
      $.ajax({
        url:"LibraryFacultyDelete.php",
        type:"GET",
        data:{Search:search,Code:Code},
        success:function(result){
          
          $("#DeleteFacultyModalBody").html(result);
         $("#DeleteFacultyModal").modal('show');            
        
      }

    });
    }
    function CallAjaxViewFaculty(FacultyID,Code){
      var search=FacultyID;
      var Code=Code;
      $.ajax({
        url:"libraryFacultyView.php",
        type:"GET",
        data:{Search:search,Code:Code},
        success:function(result){
          
          $("#ViewFacultyModalBody").html(result);
         $("#ViewFaculty").modal('show');            
        
      }
    });
    }
    function CallAjaxAddBook(){
       $.ajax({
        url:"libraryFacultyAdd.php",
        success:function(result){
          $("#AddFacultyModalBody").html(result);
         $("#AddFaculty").modal('show');            
        
      }
    });
    }
     
</script>

    
</head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" >Library Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="rohit nav-item " data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" >
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" id="Student">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Student</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link"id="Faculty" >
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Faculty</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="librarylogin.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
        </ul>
    </nav>
       <div class="content-wrapper">
     <div class="container-fluid">
    
        <div id="AjaxContent">
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
 
  <!-- Modal  for Edit-->
<div class="modal fade" data-keyboard="false" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-body" class="modal-body">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal  for Delete-->
<div class="modal fade" data-keyboard="false" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="DeleteModalBody" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal  for View-->
 <div class="modal fade" data-keyboard="false" id="View" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="ViewModalBody" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal  for Add-->
 <div class="modal fade" data-keyboard="false" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="AddModalBody" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 <!-- Modal  for Edit-->
<div class="modal fade" data-keyboard="false" id="FacultyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modalFacultybody" class="modal-body">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal  for Delete-->
<div class="modal fade" data-keyboard="false" id="DeleteFacultyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="DeleteFacultyModalBody" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal  for View-->
 <div class="modal fade" data-keyboard="false" id="ViewFaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="ViewFacultyModalBody" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal  for Add-->
 <div class="modal fade" data-keyboard="false" id="AddFaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="AddFacultyModalBody" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


      <!--<ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>-->
</body>
</html>
