
<!DOCTYPE html>
<html>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
<nav class="navbar navbar-light mb-5" style="background-color: lightblue;">

        <?php
        $request = Route::current()->uri();
        ?>
        <?php if($request !== "login" and $request !== "registration"): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => []]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>
    <div class="container">
        <a class="navbar-brand" href="/">Homepage</a>
        <div>
            <ul class="nav">
                <?php if(auth()->guard()->guest()): ?>
                    <ul class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register-user')); ?>">Register</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('signout')); ?>">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php echo $__env->yieldContent('content'); ?>

</body>

</html>

<?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/welcome.blade.php ENDPATH**/ ?>