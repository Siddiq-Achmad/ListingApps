<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('styles'); ?>
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
<div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
    
    <div class="uk-background-cover uk-visible@s" style="background-image: url('assets/images/wedding/alexandra-gornago-o2zFDffQnDM-unsplash.jpg');" uk-height-viewport></div>
    <div class="uk-padding-large">
        
        <h1>Log in</h1>
        <p>Welcome to LUXIMA Directory & Listing App </p>
        <form id="form_login" class="uk-form-stacked uk-width-1-2@s" action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Sign In</legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-s-email">Email</label>
                    
                    <input class="uk-input <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> uk-form-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="form-s-email" type="email"  value="<?php echo e(old('email')); ?>" id="username" name="email" placeholder="Enter username">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-s-password">Password</label>
                    
                    <input class="uk-input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> uk-form-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="form-s-password" type="password"  name="password" placeholder="Enter password" id="password-input" value="" >
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">Log in</button>
                    <button type="reset" class="uk-button uk-button-default">Cancel</button>
                </div>
                <div class="uk-text-light">
                    Not registered? <a href="<?php echo e(route('register')); ?>" class="login-opener" uk-switcher-item="0" uk-toggle>Sign Up</a>
                  </div>
            </fieldset>
                

        </form>
    </div>
</div>

 

<?php $__env->stopSection(); ?>





<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.layouts.fullscreen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/auth/login.blade.php ENDPATH**/ ?>