<!DOCTYPE html>
<html>
   <head>
      <title>Registration Form</title>
      <!-- Adding Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   </head>
   <body>
	<style>
		body{
			background:#f7db92;
		}
	</style>
      <h2 style="color:red;" class="text-center mt-5">Registration Form</h2>
      <div class="row">
         <div class="col-md-6 offset-md-3">
            <form method="post" action="process.php" enctype="multipart/form-data">
               <div class="form-group">
                  <label style="color:red;">Name:</label>
                  <input type="text" name="name" class="form-control">
               </div>
               <div class="form-group">
                  <label style="color:red;">Email:</label>
                  <input type="email" name="email" class="form-control">
               </div>
               <div class="form-group">
                  <label style="color:red;">Password:</label>
                  <input type="password" name="password" class="form-control">
               </div>
               <div class="form-group">
                  <label style="color:red;" for="profile_pic" class="form-label">Profile Picture:</label>
                  <div class="input-group">
                     <input type="file" class="form-control" id="profile_pic" name="profile_pic" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                     <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Choose file</button>
                  </div>
               </div>
               <input   type="submit"  value="SUBMIT" class="btn btn-outline-success">
			   <br>
			  
            </form>
         </div>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>
