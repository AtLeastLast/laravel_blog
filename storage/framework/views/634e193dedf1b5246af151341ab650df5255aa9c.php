<!doctype html>

<title>Blog</title>


<?php $__env->startSection('content'); ?>
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
    <body>
    <h1 class="mx-6">Blog Posts</h1>
    <?php foreach ($posts as $post) :?>
    <article class="my-3 mx-6">
        <p>=========================================================================</p>
        <h3>Post Name:</h3>
        <h2><a href="/posts/<?php echo e($post->slug); ?>">
                <?php echo e($post->title); ?>

            </a></h2>
        <div>
            <?php echo $post->sentence; ?>

        </div>
        <p>
            Author:
            <a href="/user/<?php echo e($post->author); ?>"><?php echo e(DB::table('users')->where('id', $post->author)->value('name')); ?></a>
        </p>

    </article>
    <?php endforeach; ?>
    <p class="mx-6">=========================================================================</p>
    <?php if($posts->count() == 0): ?>
        <h3>There are no posts.</h3>
    <?php else: ?>
        <?php echo e($posts->links()); ?>

    <?php endif; ?>
    </body>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/dashboard.blade.php ENDPATH**/ ?>