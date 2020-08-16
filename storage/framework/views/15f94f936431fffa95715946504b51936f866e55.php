 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.app','data' => []]); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

  <header class="mb-6 relative">
      <div class="relative">
          <img src="<?php echo e($user->background_picture); ?>"
              alt=""
              class="rounded-lg mb-2 h-20"
              >

          <img src="<?php echo e($user->avatar); ?>"
               alt=""
               class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
               style="left: 50%"
               width="150"
                >

      </div>

      <div class="flex justify-between items-center mb-6">
          <div style="max-width: 270px">
              <h2 class="font-bold text-2xl mb-0"><?php echo e($user->name); ?></h2>
              <p class="text-sm">joined <?php echo e($user->created_at->DiffforHumans()); ?></p>
          </div>

            <div class="flex">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
                    <a href="<?php echo e($user->path('edit')); ?>"
                       class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                        Edit Profile
                    </a>
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.follow-button','data' => ['user' => $user]]); ?>
<?php $component->withName('follow-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['user' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($user)]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

          </div>
      </div>
  </header>

  <p class="text-sm text-center mb-4">
    <?php echo e($user->biography); ?>

  </p>



  <?php echo $__env->make('_timeline', [
    'tweets' => $tweets
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php /**PATH C:\Users\orobe\tweety\resources\views/profiles/show.blade.php ENDPATH**/ ?>