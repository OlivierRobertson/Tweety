<ul>
    <li>
        <a href="<?php echo e(route('home')); ?>" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('profile', auth()->user())); ?>" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <form action="/logout" method="POST">
            <?php echo csrf_field(); ?>

            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul><?php /**PATH C:\Users\orobe\tweety\resources\views/_sidebar-links.blade.php ENDPATH**/ ?>