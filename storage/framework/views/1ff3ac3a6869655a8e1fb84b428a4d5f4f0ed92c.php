<!doctype html>

<?php $__env->startSection('content'); ?>
<h1 class="mx-6">All Users</h1>

<html>


<body>
    <article class="mx-6">
        <table border = "1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </article>
</body>
</html>
</head>
<a href="/" class="btn btn-outline-primary btn-sm mx-6 my-3">Go Back</a>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/userslist.blade.php ENDPATH**/ ?>