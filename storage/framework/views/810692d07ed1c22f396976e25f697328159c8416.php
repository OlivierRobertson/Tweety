<div class="bg-gray-200  border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

        <ul>
            <?php $__empty_1 = true; $__currentLoopData = current_user()->follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="<?php echo e($loop->last ? '' : 'mb-4'); ?>">
                    <a href="<?php echo e(route('profile', $user)); ?>" class="flex items-center text-sm">
                        <img src="<?php echo e($user->avatar); ?>"
                             alt=""
                             class="rounded-full mr-2"
                             width="40"
                             height="40"
                        >
                        <?php echo e($user->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="p-4">Invite some Friends!</p>
            <?php endif; ?>
        </ul>
</div><?php /**PATH C:\Users\orobe\tweety\resources\views/_friends-list.blade.php ENDPATH**/ ?>