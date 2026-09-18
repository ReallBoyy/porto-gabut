<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($portfolio['meta']['title']); ?></title>
    <meta name="description" content="<?php echo e($portfolio['meta']['description']); ?>">
    <meta name="theme-color" content="<?php echo e($portfolio['meta']['theme_color']); ?>">
    
    <meta name="color-scheme" content="light">
    <link rel="icon" href="<?php echo e(asset('favicon.svg')); ?>" type="image/svg+xml">

    
    <?php echo Vite::fonts(); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main id="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <button type="button" class="to-top" data-to-top hidden aria-label="Back to top">
        <?php echo $__env->make('partials.icon', ['name' => 'arrow-up'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </button>
</body>
</html>
<?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/layouts/app.blade.php ENDPATH**/ ?>