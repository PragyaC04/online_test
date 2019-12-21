<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <table class="table table-stripped table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">set id</th>
                <th scope="col">qid</th>
                <th scope="col">para</th>
                <th scope="col">question</th>
                <th scope="col">question image</th>
                <th scope="col">option1</th>
                <th scope="col">option1 image</th>
                <th scope="col">option2</th>
                <th scope="col">option2 image</th>
                <th scope="col">option3</th>
                <th scope="col">option3 image</th>
                <th scope="col">option4</th>
                <th scope="col">option4 image</th>
                <th scope="col">option4</th>
                <th scope="col">option4 image</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($v->setid); ?> </td>
                    <td> <?php echo e($v->qid); ?> </td>
                    <td> <?php echo e($v->para); ?> </td>
                    <td> <?php echo e($v->question); ?> </td>
                    <td> <img src="<?php echo e(asset('uploads/questions/'.$v->questionimg)); ?>"  alt=""> </td>
                    
                    <td> <?php echo e($v->option1); ?> </td>
                    <td> <img src="<?php echo e(asset('uploads/option1/'.$v->option1img)); ?>"  alt=""> </td>
                    <td> <?php echo e($v->option2); ?> </td>
                    <td> <img src="<?php echo e(asset('uploads/option2/'.$v->option2img)); ?>"  alt=""> </td>
                    <td> <?php echo e($v->option3); ?> </td>
                    <td> <img src="<?php echo e(asset('uploads/option3/'.$v->option3img)); ?>"  alt=""> </td>
                    <td> <?php echo e($v->option4); ?> </td>
                    <td> <img src="<?php echo e(asset('uploads/option4/'.$v->option4img)); ?>" alt=""> </td>
                    <td> <?php echo e($v->option5); ?> </td>
                    <td> <img src="<?php echo e(asset('uploads/option5/'.$v->option5img)); ?>" alt=""> </td>
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            
        </table>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\onlinetest\resources\views/view.blade.php ENDPATH**/ ?>