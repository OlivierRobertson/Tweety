<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Tweety')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto ">
                <h1>
                    <img src="/images/logo.svg"
                         alt="Tweety"
                    >
                </h1>
            </header>
        </section>

        <section class="px-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-center">
                    <div class="lg:w-32">
                        <?php echo $__env->make('_sidebar-links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="flex-1 lg:mx-10 lg:mb-10" style="max-width: 700px">
                       <?php echo $__env->yieldContent('content'); ?>
                    </div>

                    <div class="lg:w-1/6 bg-blue-100 p-4 rounded-lg">
                        <?php echo $__env->make('_friends-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </main>
        </section>

    </div>
</body>
</html>
<?php /**PATH C:\Users\orobe\tweety\resources\views/layouts/app.blade.php ENDPATH**/ ?>