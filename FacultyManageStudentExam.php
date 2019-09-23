<div class="container">
      
        <div class="row justify-content-center">
        <div  class="col-xl-10" align="center" >
        <div align="center">
        <h3>Student Exam Form</h3>

       <!--<img src="images/images.jpg" height="200" width="200">-->
 	  <form  action="FacultyManageStudentExamValidation.php" method="POST">
 	      <label>Branch</label>
             <select name="Branch" >
                 <option selected="">Branch</option>
                 <option value="CSE">CSE</option>
                 <option value="IC">IC</option>
                 <option value="ECE">ECE</option>
                 <option value="Civil">Civil</option>
                 <option value="Mechanical">Mechanical</option>
                 <option value="IT">IT</option>
            </select>
       &nbsp;
 	  	<label>Batch</label>
             <select  name="Batch">
                 <option selected="">Batch</option>
                 <option value="2015-16">2015-16</option>
                 <option value="2016-17">2016-17</option>
                 <option value="2017-18">2017-18</option>
            </select>
             &nbsp;
            <label>Semester</label>
            <select  name="Semester">
                 <option selected="">Semester</option>
                 <option value="1">1st Semester</option>
                 <option value="2">2nd Semester</option>
                 <option value="3">3rd Semester</option>
                 <option value="4">4th Semester</option>
                 <option value="5">5th Semester</option>
                 <option value="6">6th Semester</option>
             </select>
             &nbsp;
            <label>Subject</label>
            <select  name="Subject">
                 <option selected="">Subject</option>
                 <option value="OOPS">OOPS</option>
                 <option value="PHP">PHP</option>
                 <option value="PYTHON">PYTHON</option>
            </select>
              &nbsp;
            <input class="btn btn-primary btn-lg" class="active" type="submit" name="submit"  value="Submit">
            </form>
             </div>
         </div>
     </div>
</div>

