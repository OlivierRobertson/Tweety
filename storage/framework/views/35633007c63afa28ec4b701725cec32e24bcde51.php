 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => []]); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto flex justify-center">
        <div class="px-16 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                    <div class="font-bold text-xl mb-4"><?php echo e(__('Register')); ?></div>

                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                            <div class="mb-4">
                                <label class="block uppercase font-bold text-xs text-gray-700"
                                       for="username">
                                    Username
                                </label>

                                <input id="username"
                                       type="text"
                                       class="border border-gray-400 p-2 w-full"
                                       name="username"
                                       value="<?php echo e(old('username')); ?>"
                                       required
                                       autocomplete="username">

                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500 text-xs mt-2"
                                          role="alert">
                                           <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label for="name"
                                       class="block uppercase font-bold text-xs text-gray-700">
                                    Name
                                </label>

                                <input id="name"
                                       type="text"
                                       class="border border-gray-400 p-2 w-full"
                                       name="name"
                                       value="<?php echo e(old('name')); ?>"
                                       required
                                       autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500 text-xs"
                                          role="alert">
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase font-bold text-xs text-gray-700"
                                       for="email">
                                    email
                                </label>

                                <input id="email"
                                       type="text"
                                       class="border border-gray-400 p-2 w-full"
                                       name="email"
                                       value="<?php echo e(old('email')); ?>"
                                       required
                                       autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500 text-xs mt-2"
                                          role="alert">
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase font-bold text-xs text-gray-700"
                                       for="">
                                    password
                                </label>

                                <input id="password"
                                       type="password"
                                       class="border border-gray-400 p-2 w-full"
                                       name="password"
                                       value="<?php echo e(old('password')); ?>"
                                       required
                                       autocomplete="password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-red-500 text-xs mt-2"
                                          role="alert">
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                        <div class="mb-4">
                            <label class="block uppercase font-bold text-xs text-gray-700"
                                   for="password_confirmation">
                                Confirm password
                            </label>

                            <input id="password_confirmation"
                                   class="border border-gray-400 p-2 w-full"
                                   name="password_confirmation"
                                   value="<?php echo e(old('password_confirmation')); ?>"
                                   type="password"
                                   required
                                   >

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                 <span class="text-red-500 text-xs mt-2"
                                  role="alert">
                                        <?php echo e($message); ?>

                                 </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                                        <?php echo e(__('Register')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\orobe\tweety\resources\views/auth/register.blade.php ENDPATH**/ ?>