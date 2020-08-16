 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.master','data' => []]); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-xl mb-4"><?php echo e(__('Login')); ?></div>

                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                   <div class="mb-6">
                       <label class="block uppercase font-bold text-xs text-gray-700"
                              for="email">
                           Email
                       </label>

                       <input class="border border-gray-400 p-2 w-full"
                              type="text"
                              name="email"
                              id="email"
                              autocomplete="email"
                              value="<?php echo e(old('email')); ?>"
                              required
                       >

                       <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs  mt-2"><?php echo e($message); ?></p>
                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   </div>

                    <div class="mb-6">
                        <label class="block uppercase font-bold text-xs text-gray-700"
                               for="password">
                            Password
                        </label>

                        <input class="border border-gray-400 p-2 w-full"
                               type="password"
                               name="password"
                               id="password"
                               autocomplete="current-password"
                        >

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs  mt-2"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                 <div class="mb-6">
                     <div>
                         <input type="checkbox"
                                class="mr-1"
                                name="remember"
                                id="remember"
                                <?php echo e(old('remember') ? 'checked' : ''); ?>

                         >

                         <label for="remember"
                                class="text-xs text-gray-700 font-bold uppercase">
                             Remember Me
                         </label>
                     </div>
                 </div>

                    <div>
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover bg-blue-500 mr-2">
                            Submit
                        </button>

                        <a href="<?php echo e(route('password.request')); ?>" class="text-xs text-gray-700">Forgot your password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH C:\Users\orobe\tweety\resources\views/auth/login.blade.php ENDPATH**/ ?>