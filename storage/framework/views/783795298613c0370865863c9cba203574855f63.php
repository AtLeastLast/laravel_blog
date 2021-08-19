    <!DOCTYPE html>
<html>

<?php $__env->startSection('content'); ?>
<head>
    <title>All posts by <?php echo e($name); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php if (isset($component)) { $__componentOriginale0f149cde1eafe0e6e7f1999419a723bdbc85756 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\searchbar::class, []); ?>
<?php $component->withName('searchbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginale0f149cde1eafe0e6e7f1999419a723bdbc85756)): ?>
<?php $component = $__componentOriginale0f149cde1eafe0e6e7f1999419a723bdbc85756; ?>
<?php unset($__componentOriginale0f149cde1eafe0e6e7f1999419a723bdbc85756); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<h2 class="mx-6">These are all of <?php echo e($name); ?>s posts.</h2>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="my-3 mx-6">
        <p>=========================================================================</p>
        Post Name:
        <h1><a href="/posts/<?php echo e($post->slug); ?>">
            <?php echo e($post->title); ?>

            </a></h1>
        <div>
        <?php echo $post->sentence; ?>

        </div>
    </article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<p class="mx-6">=========================================================================</p>

<?php echo e($posts->links()); ?>

</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/profile.blade.php ENDPATH**/ ?>