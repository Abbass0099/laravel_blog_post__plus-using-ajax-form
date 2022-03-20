<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>Welcome To Lsapp!</h1>
        <!-- <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p> -->
        <p> 

            <?php if(Auth::check()): ?>
                <!-- <a class="btn btn-primary btn-lg" href="/login" role="button" disabled>Login</a> 
                <a class="btn btn-success btn-lg" href="/register" role="button" disabled>Register</a> -->

                <p style="color:green; font-size:35px; font-weight:bold">You are logged In</p>

            <?php else: ?>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            <?php endif; ?>

            
        </p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>