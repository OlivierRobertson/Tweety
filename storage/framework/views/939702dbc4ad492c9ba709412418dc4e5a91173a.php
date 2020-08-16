<div class="flex p-4 <?php echo e($loop->last ? '' : 'border-b border-gray-400'); ?>">
    <div class="mr-2 flex-shrink-0">
        <a href="<?php echo e($tweet->user->path()); ?>">
        <img src="<?php echo e($tweet->user->avatar); ?>"
                alt=""
                class="rounded-full mr-2"
                height="50"
                width="50">
        </a>
    </div>

    <div>
        <a href="<?php echo e($tweet->user->path()); ?>">
            <h5 class="font-bold mb-2">
                <?php echo e($tweet->user->name); ?>

            </h5>
        </a>

         <p class="text-sm mb-3">
             <?php echo e($tweet->body); ?>

         </p>

        <div class="flex">
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.like-button','data' => ['tweet' => $tweet]]); ?>
<?php $component->withName('like-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tweet' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweet)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dislike-button','data' => ['tweet' => $tweet]]); ?>
<?php $component->withName('dislike-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tweet' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tweet)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
        </div>
    </div>
</div>


<?php /**PATH C:\Users\orobe\tweety\resources\views/_tweet.blade.php ENDPATH**/ ?>