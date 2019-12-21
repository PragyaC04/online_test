

<!------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Analytical</title>
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
  color: white;
}
li a:hover{
    color:white;
}

.active {
  background-color: #4CAF50;
}

.right{
    text-align:right;
}
</style>
</head>
<body>
 
 <div>
    <ul>
    <li><a href="new">Home</a></li>
    <li><a href="qview">Qualitative Analysis</a></li>
    <li><a href="#" class="active" >Analytical Analysis</a></li>
    <li><a href="cview">Creative Analysis</a></li>
    <li><a href="coview">Comprehension</a></li>
    </ul>
</div>
<div class="container">
    
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
     <?php $__currentLoopData = $analy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <div class="card-header">
            Q<?php echo e($q->qid); ?>&nbsp;
            <?php echo e($q->question); ?>

            <img src="<?php echo e(asset('uploads/questions/'.$q->questionimg)); ?>"  alt="">
            <p class="right"><?php echo e($q->marks); ?></p>
        </div>
        
        
        <div class="card-body">
            <input type="radio" name="opt" value="1"> <?php echo e($q->option1); ?> <img src="<?php echo e(asset('uploads/option1/'.$q->option1img)); ?>"  alt=""> <br>
            <input type="radio" name="opt" value="2"> <?php echo e($q->option2); ?> <img src="<?php echo e(asset('uploads/option2/'.$q->option2img)); ?>"  alt=""> <br>
            <input type="radio" name="opt" value="3"> <?php echo e($q->option3); ?> <img src="<?php echo e(asset('uploads/option3/'.$q->option3img)); ?>"  alt=""> <br>
            <input type="radio" name="opt" value="4"> <?php echo e($q->option4); ?> <img src="<?php echo e(asset('uploads/option4/'.$q->option4img)); ?>"  alt=""> <br>
        </div> 
       
    </div>
    
    <div class="card-footer">
        <button type="button" onclick="window.location='<?php echo e(url ("/analytical")); ?>'" class="btn btn-primary">Edit</button>
        <p class="right">Correct option is: <?php echo e($q->correct); ?></p>  
    </div>
    <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </form>
</div>

</body>
</html>


<?php /**PATH C:\xampp\htdocs\onlinetest\resources\views/viewanalytical.blade.php ENDPATH**/ ?>