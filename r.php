<form  action="noti.php" method="post" enctype="multipart/form-data" style="padding-bottom:50px; margin-left:50px; margin-right:250px">
      <div class="form-group">
      <label for="date">Meeting ID:</label>
      <input type="text" class="form-control" id="name" name="n" required placeholder="Enter Meeting ID">
      </div>
      <br>
     
      <div class="form-group">
      <label for="date">Meeting Name:</label>
      <input type="text" class="form-control" id="name" name="n" required placeholder="Enter Meeting Name">
      </div>
      <br>
     
     
      <div class="form-group">
      <label for="date">President:</label>
      <input type="text" class="form-control" id="name" name="n" required placeholder="Enter name of the President">
      </div>
      <br>
       
       <div class="form-group">
       <label for="date">Meeting Type:</label><br>
       <input type="radio" name="type" value="Departmental" checked> Departmental<br>
       <input type="radio" name="type" value="Inter-departmental"> Inter-departmental<br>
       <input type="radio" name="type" value="Inter-university"> Inter-university
       </div>
       <br>
     
      <div class="form-group">
      <label for="date">Meeting Objective:</label>
      <input type="text" class="form-control" id="name" name="obj" placeholder="Whats the Main Obejective">
      </div>
      <br>
      
      <div class="form-group">
      <label for="date">Agenda:</label>
      <input type="file" name="file">
      </div>
      <br>
      
      
      <div class="form-group">
      <label for="date">Venue:</label>
      <input type="text" class="form-control" id="name" name="venue" required placeholder="Venue of the Meeting">
      </div>
      <br>
      
      
      <div class="form-group">
      <label for="date">Meeting holding date</label>
      <input type="text" class="form-control" id="name" name="date" required placeholder="Meeting Date">
      </div>
      <br>
      
      
      <div class="form-group">
      <label for="date">Meeting holding Time</label>
      <input type="text" class="form-control" id="name" name="time" required placeholder="Meeting Time">
      </div>
      <br>
      
      
      
      <div class="form-group">
      <label>Who are going to attend in this meting?</label>
      <div style="overflow:scroll; height:auto; width=auto">
       <input type="checkbox" name="check_list[]" value="Munira"><label>Munira</label><br/> <!-- bookmark kora ache-->
       <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
       <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
       <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
       <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
       </div>
      </div>
      <br>
      
      
   
      <button type="submit" class="btn btn-default">Submit</button>
  </form>