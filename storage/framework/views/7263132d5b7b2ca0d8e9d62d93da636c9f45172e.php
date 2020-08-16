<?php if(current_user()->isNot($user)): ?>
    <form method="POST" action=" <?php echo e(route('follow', $user->username)); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit"
                class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            <?php echo e(current_user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me'); ?>

        </button>
    </form>
<?php endif; ?><?php /**PATH C:\Users\orobe\tweety\resources\views/components/follow-button.blade.php ENDPATH**/ ?>