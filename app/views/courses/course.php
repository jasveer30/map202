<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
<form class="form-style-7"  action="/courses/course/true" method="POST">
<ul>
<li>
    <label for="courseid">Course id</label>
    <input type="text" name="course-id" maxlength="100">
    <span>Enter your Course ID here</span>
</li>
<li>
    <label for="department">Department</label>
    <input type="text" name="department" maxlength="100">
    <span>Enter your Department here</span>
</li>
<li>
    <label for="program">Program</label>
    <input type="text" name="program" maxlength="100">
    <span>Enter your Program here</span>
</li>
	<li>
    <label for="coursename">Course Name</label>
    <input type="text" name="course-name" maxlength="100">
    <span>Enter your Course Name</span>
</li> 
<li>
    <input type="submit" value="Save Course" >
</li>
</ul>
</form>
	</div>
<?php require_once 'app/views/templates/footer.php' ?>