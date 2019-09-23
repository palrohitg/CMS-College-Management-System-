<?php 
 session_start();
 if(!(isset( $_SESSION['loggedin'])&&($_SESSION['loggedin']="Admin")))
 {
  header("location:Adminlogin.php");
 }
?>
<?php 
  $conn=mysqli_connect("localhost","root","","vikasproject");
  if(!$conn){
    echo"connection Failed".mysqli_connect_error();
  }
  $Query1=mysqli_query($conn,"SELECT * From Students");
  $totalstudent=mysqli_num_rows($Query1);
  $Query2=mysqli_query($conn,"SELECT * From Faculty");
  $totalFaculty=mysqli_num_rows($Query2);
  $Query3=mysqli_query($conn,"SELECT * From library");
  $totallibrary=mysqli_num_rows($Query3);

 ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <style type="text/css">
      div.header{
         color: ghostwhite;
         align-content:stretch;
         font-style: italic;
         font-weight: initial;
      }

      h2{
             text-align: right;
        }
      #changecontent{
        background-color: white;
      }
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
     top: 50px;
    right: 100px;
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
    <title>Admin</title>
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
      <!-- Custom scripts for all pages-->
      <!--<script src="js/sb-admin.min.js"></script>-->
      <!-- Custom scripts for this page-->
     <!-- <script src="js/sb-admin-datatables.min.js"></script>-->
      <!--<script src="js/sb-admin-charts.min.js"></script>-->
  </head>

  <body  class="fixed-nav sticky-footer bg-dark" id="page-top" id="page-top" >
    <!-- Navigation-->
    <a class="navbar-brand"><strong >Admin Panel</strong></a>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand">Admin panel</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="header">
      <h2>College Management System</h2>
      </div>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav Menu-item" id="exampleAccordion">
            <li class="rohit nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link ">
              <i class="fa fa-tachometer" aria-hidden="true"></i>            
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item " id="StudentCSS"data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" id="Student">
              <i class="fa fa-fw fa-user" aria-hidden="true"></i>
              <span class="nav-link-text">Student</span>
            </a>
            <input type="hidden" value="StudentFile" id="Studentfileopen">
          </li>
           <li class="nav-item " id="StudentCSS"data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" id="AddStudent">
              <i class="fa fa-fw fa-user" aria-hidden="true"></i>
              <span class="nav-link-text"> Add Student</span>
            </a>
            <input type="hidden" value="StudentFile" id="Studentfileopen">
          </li>
         
           <li class="nav-item" id="FacultyCSS" data-toggle="tooltip" data-placement="right" title="Tables">
         <a class="nav-link" id="Faculty">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              <span class="nav-link-text">Faculty</span>
            </a>
          </li>
           <li class="nav-item"  data-toggle="tooltip" data-placement="right" title="Tables">
         <a class="nav-link" id="AddFaculty">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              <span class="nav-link-text"> Add Faculty</span>
            </a>
          </li>
          
          <li class="nav-item "id="LibraryCSS" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" id="library">
              <i class="fa fa-book" aria-hidden="true"></i>
              <span class="nav-link-text">Library</span>
            </a>
          </li>
         <li class="nav-item " id="NoticeCSS" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" id="Notice" >
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <span class="nav-link-text">Notice</span>
            </a>
          </li>
         <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="Adminlogin.php">
               <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="nav-link-text">Logout</span>
            </a>
          </li>
          </ul>
        </div>
      </nav>
      <div class="content-wrapper">
      <div class="container-fluid">
    
        
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
                <div class="mr-5"><?php echo "$totalstudent"; ?> Students</div>
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
                <div class="mr-5"><?php echo "$totalFaculty"; ?> Faculty!</div>
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
                <div class="mr-5"><?php echo "$totallibrary"; ?> library!</div>
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
                <div class="mr-5">13 New Tickets!</div>
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
                  <!-- /.container-fluid-->
        </div>
      <!-- /.content-wrapper-->


<!-- Modal  for Edit-->
<div class="modal fade" data-keyboard="false" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog  " role="document">
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
<!-- Modal  for Edit-->
<div class="modal fade" data-keyboard="false" id="exampleModalfaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Faculty Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-bodyfaculty" class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal  for Delete-->
<div class="modal fade" data-keyboard="false" id="DeleteModalfaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Faculty Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="DeleteModalBodyfaculty" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal  for View-->
 <div class="modal fade" data-keyboard="false" id="Viewfaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Faculty Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="ViewModalBodyfaculty" class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

   <!-- Modal  for Edit-->
<div class="modal fade" data-keyboard="false" id="exampleModallibraryStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Faculty Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="modal-bodylibraryStudent" class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal  for Delete-->
<div class="modal fade" data-keyboard="false" id="DeleteModallibraryStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Faculty Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="DeleteModalBodylibraryStudent" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal  for View-->
 <div class="modal fade" data-keyboard="false" id="ViewlibraryStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Faculty Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="ViewModalBodylibraryStudent" class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>



 
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <script type="text/JavaScript">
  /*---------------------SIDE MENU ACTION START HERE------------------------------*/

        $(document).ready(function(){
          $("#Student").click(function(){
            $.ajax({
              url: "StudentOpenForm.php",
              success: function(result) {
              $("#changecontent").html(result);
              }
            });
          });
        });
        $(document).ready(function(){
          $("#Faculty").click(function(){
            $.ajax({
              url: "facultyloginadmin.php",
              success: function(result) {
              $("#changecontent").html(result);
              }
            });
          });
        });
        $(document).ready(function(){
          $("#AddStudent").click(function(){
            $.ajax({
              url: "StudentAdd.php",
              success: function(result) {
              $("#changecontent").html(result);
              }
            });
          });
        });
        
        $(document).ready(function(){
          $("#AddFaculty").click(function(){
            $.ajax({
              url: "AddFacultybyAdmin.php",
              success: function(result) {
              $("#changecontent").html(result);
              }
            });
          });
        });
        $(document).ready(function(){
          $("#library").click(function(){
            $.ajax({
            url: "LibrarystudentloginAdmin.php",
              success: function(result) {
              $("#changecontent").html(result);
              }
            });
          });
        });
        
        $(document).ready(function(){
          $("#Notice").click(function(){
            $.ajax({
              url: "Notice.php",
              success: function(result) {
              $("#changecontent").html(result);
              }
            });
          });
        });
/*----------------------STUDENT  ACTION START HERE------------------------------*/

       function CallAjaxEdit(ID){
      var search=ID;
      $.ajax({
        url:"StudentEdit.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
         $("#modal-body").html(result);
       $("#exampleModal").modal("show"); 
       }
    });
    }
     function CallAjaxDelete(ID){
      var search=ID;
      $.ajax({
        url:"StudentDelete.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
          $("#DeleteModalBody").html(result);
          $("#DeleteModal").modal('show');            
          
        
      }
    });
    }
    function CallAjaxView(ID){
      var search=ID;
      $.ajax({
        url:"StudentView.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
          
          $("#ViewModalBody").html(result);
         $("#View").modal('show');            
        
      }
    });
    } 
/*---------------------FACULTY  ACTION START HERE------------------------------*/
       function CallAjaxEditFaculty(ID){
      var search=ID;
      $.ajax({
        url:"facultyEdit.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
         $("#modal-bodyfaculty").html(result);
       $("#exampleModalfaculty").modal("show"); 
       }
    });
    }
     function CallAjaxDeleteFaculty(ID){
      var search=ID;
      $.ajax({
        url:"FacultyDelete.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
          $("#DeleteModalBodyfaculty").html(result);
          $("#DeleteModalfaculty").modal('show');            
          
        
      }
    });
    }
    function CallAjaxViewFaculty(ID){
      var search=ID;
      $.ajax({
        url:"FacultyView.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
          
          $("#ViewModalBodyfaculty").html(result);
         $("#Viewfaculty").modal('show');            
        
      }
    });
    } 
    /*---------------------Library Student  ACTION START HERE--------------------------*/
       function CallAjaxEditLibraryAdmin(RollNo,Code){
      var search=RollNo;
      var code=Code;
      $.ajax({
        url:"LibraryStudentEditAdmin.php",
        type:"POST",
        data:{Search:search,Code:code},
        success:function(result){
         $("#modal-bodylibraryStudent").html(result);
       $("#exampleModallibraryStudent").modal("show"); 
       }
    });
    }
     function CallAjaxDeleteLibraryAdmin(RollNo){
      var search=RollNo;
      $.ajax({
        url:"LibraryStudentDeleteAdmin.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
          $("#DeleteModalBodylibraryStudent").html(result);
          $("#DeleteModallibraryStudent").modal('show');            
          
        
      }
    });
    }
    function CallAjaxViewLibraryAdmin(RollNo){
      var search=RollNo;
      $.ajax({
        url:"LibraryStudentViewAdmin.php",
        type:"POST",
        data:{Search:search},
        success:function(result){
          
          $("#ViewModalBodylibraryStudent").html(result);
         $("#ViewlibraryStudent").modal('show');            
        
      }
    });
    } 

    /*---------------------WORK DOBE TILL HERE ------------------------------*/

     $(document).ready(function(){
      $(".nav-item").click(function(){
      $(".nav-item").removeClass("rohit");  
        $(this).addClass("rohit");
      })
     });
     /*--------------------Ajax Function is added and modal is close---------------*/
     function MyfunctionforEdit(id){
    var ID=id;
    var name=document.f1.name.value;
    var age=document.f1.age.value;
    var gender=document.f1.gender.value;
    var dob =document.f1.dob.value;
    var city=document.f1.city.value;
    var state=document.f1.state.value;
    var email=document.f1.email.value;
    var branch=document.f1.branch.value;
    var semester=document.f1.semester.value;
    var mobileno=document.f1.mobileno.value;
    var classid=document.f1.classid.value;
    var streamid=document.f1.streamid.value;
    var address=document.f1.address.value;
    var status=document.f1.status.value;
    $.ajax({
      url:"StudentEdited.php",
      type:"GET",
      data:{Search:ID,Name:name,Age:age,Gender:gender,DOB:dob,City:city,State:status,Email:email,Branch:branch,Semester:semester,MobileNo:mobileno,ClassId:classid,StreamId:streamid,Status:status,Address:address},
      success:function(){
        alert("Record Updated Successfully");
         $("#exampleModal").modal("hide");     
      }
    })
  }
     function myfunctionforDelete(id){
    var ID=id;
    $.ajax({
      url:"StudentDeleted.php",
      type:"GET",
      data:{ID:ID},
      success:function(){
        alert("Record Deleted successfully");
         $("#DeleteModal").modal("hide");     
      }
    })
  }
  

      </script>

 <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Your Website 2018</small>
          </div>
        </div>
      </footer>
  </body>

  </html>
