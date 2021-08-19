<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New Post</h1>
                    <p>Fill and submit this form to create a post</p>

                    <hr>

                    <form action="<?php echo e(route('post.custom')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="slug">Post Slug</label>
                                <input type="text" id="slug" class="form-control" name="slug"
                                       placeholder="Enter Post Slug" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="sentence">Post Title</label>
                                <input type="text" id="sentence" class="form-control" name="sentence"
                                       placeholder="Enter Post Display Sentence" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                          rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/create-post.blade.php ENDPATH**/ ?>