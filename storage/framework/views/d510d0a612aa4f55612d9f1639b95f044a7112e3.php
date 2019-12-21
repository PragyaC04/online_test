

<!------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Qualitative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>
 
 <div>
    <ul>
    <li><a class="active" href="#home">Qualitative Analysis</a></li>
    <li><a href="#news">Analytical Analysis</a></li>
    <li><a href="#contact">Creative Analysis</a></li>
    <li><a href="#about">Comprehension</a></li>
    </ul>
</div>
<div class="container">
    
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>Question No.</label>
                <input type="text" name="q_number" class="form-control" placeholder="enter question number">
            </div>

            <div class="form-group">
                <label>Question Content</label>
                <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="q_image" class="custom-file-input">
                    <label class="custom-file-label">Upload question image</label>
                </div>
            </div><br>

            <div class="form-group">
                <label>Marks</label>
                <input type="text" name="q_mks" class="form-control" placeholder="enter marks">
            </div>

            <div class="form-group">
                <label>SetId</label>
                <input type="text" name="sid" class="form-control" placeholder="enter set id">
            </div>
        </div>
        
        
        <div class="card-body">
            <div class="form-group">
                <label>Option1 Content</label>
                
            </div>

            

            <div class="form-group">
                <label>Option2 Content</label>
                
            </div>

          
            <div class="form-group">
                <label>Option3 Content</label>
               
            </div>


            <div class="form-group">
                <label>Option4 Content</label>
               
            </div>

            

            
        </div> 
        

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            <button type="button" onclick="window.location='<?php echo e(url ("/new")); ?>'" class="btn btn-primary">Back</button>
            <button type="button" onclick="window.location='<?php echo e(url ("/viewq")); ?>'" class="btn btn-primary">View</button>
        </div>
    </div>
    </form>
</div>

</body>
</html>


<?php /**PATH C:\xampp\htdocs\onlinetest\resources\views/editpage.blade.php ENDPATH**/ ?>