<html>
<head>
 <center><title>Week 9 Homework</title>
</head>
<body>
<div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h1 style="color:black">Week 9 HW</h1>
      </div>
    </div>
  </div>

  <div class="container" style="color:black"> 
    <form method="get" action="test9.php" >
      <div class="form-group">
        <label>Task:</label>
        <select name="case_label">
         <option value="display">Display</option>
          <option value="insert">Insert</option>
          <option value="delete">Delete</option>
          <option value="update">Update</option> 
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Send" />
      </div>
    </form>
  </div>
</body>
<?php require 'show9.php'; ?>
</center>
</html>