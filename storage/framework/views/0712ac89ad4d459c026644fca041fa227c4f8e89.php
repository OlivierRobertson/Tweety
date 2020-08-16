

<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        <?php echo csrf_field(); ?>
            <textarea name="body"
                      class="w-full"
                      placeholder="What's up doc?"
                      required
                      autofocus
            >
            </textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">

            <img src="<?php echo e(auth()->user()->avatar); ?>"
                 alt="your avatar"
                 class="rounded-full mr-2"
                 width="50"
                 height="50">

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 shadow py-4 px-8 text-xs  text-white rounded-full"
            >
                Tweet-a-roo!</button>
        </footer>
    </form>

    <div>
        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-2"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>

<?php /**PATH C:\Users\orobe\tweety\resources\views/_publish-tweet-panel.blade.php ENDPATH**/ ?>