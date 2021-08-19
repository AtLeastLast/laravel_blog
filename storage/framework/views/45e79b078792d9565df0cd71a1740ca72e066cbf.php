<!DOCTYPE html>

<?php $__env->startSection('content'); ?>
<html>
<head>
    <title><?php echo e($post->title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <article class="mx-6">
            <h1>
                <?php echo e($post->title); ?>

            </h1>
            <div>
                <?php echo $post->body; ?>

            </div>

            <p>
            Author:
                <a href="/user/<?php echo e($post->author); ?>"><?php echo e(DB::table('users')->where('id', $post->author)->value('name')); ?></a>
            </p>
            <a href="/" class="btn btn-outline-primary btn-sm mx-0 my-3">Go Back</a>
        </article>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/post.blade.php ENDPATH**/ ?>