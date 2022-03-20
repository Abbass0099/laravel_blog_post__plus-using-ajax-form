<?php $__env->startSection('content'); ?>
    <h1>Create Post</h1>
    <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>

        <?php if(count($unique_posts) > 0): ?>
            <div class="form-group row">    
                <div class="col-sm-8">
                    <select class="form-control" id="selectUser" name="user_selected" required focus>
                        <option value="" disabled selected>Select title</option>                    
                            <?php $__currentLoopData = $unique_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unique_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option><?php echo e($unique_post->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                    </select>
                </div>        
            </div>
            <?php else: ?>
                <p>no unique posts</p>
        <?php endif; ?>

        

        <div class="form-group">
            <?php echo e(Form::file('cover_image')); ?>

        </div>
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>