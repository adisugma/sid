<?php $__env->startSection('title'); ?>login
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col">
	                <div class="login-card">
	                    <form class="theme-form login-form" method="POST" action="<?php echo e(route('login')); ?>">
	                        <?php echo csrf_field(); ?>
                            <h4>Login</h4>
	                        <h6>Welcome back! Log in to your account.</h6>
	                        <div class="form-group">
	                            <label>Email Address</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus" type="email" required="" placeholder="Test@gmail.com" />

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
	                        </div>
	                        <div class="form-group">
	                            <label>Password</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password" required="" placeholder="*********" />

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
	                        </div>
	                        <div class="form-group">
	                            <div class="checkbox">
	                                <input id="checkbox1" type="checkbox"
                                    name="remember"  
                                    id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>

                                    />
	                                <label class="text-muted" for="checkbox1">Remember password</label>
	                            </div>
                                <?php if(Route::has('password.request')): ?>
                                    <a class="link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
	                        </div>
	                        <div class="form-group">
	                            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
	                        </div>
	                        <div class="login-social-title">
	                            <h5>Sign in with</h5>
	                        </div>
	                        <div class="form-group">
	                            <ul class="login-social">
	                                <li>
	                                    <a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a>
	                                </li>
	                                <li>
	                                    <a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a>
	                                </li>
	                                <li>
	                                    <a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a>
	                                </li>
	                                <li>
	                                    <a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram"> </i></a>
	                                </li>
	                            </ul>
	                        </div>
	                        <p>Don't have account?<a class="ms-2" href="<?php echo e(route('register')); ?>">Create Account</a></p>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	
    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\theme\resources\views/auth/login.blade.php ENDPATH**/ ?>