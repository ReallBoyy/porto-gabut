<section id="about" class="section section-tinted">
    <div class="container narrow">
        <header class="section-head reveal">
            <p class="eyebrow">About</p>
            <h2><?php echo e($portfolio['about']['heading']); ?></h2>
        </header>

        <div class="prose reveal">
            <?php $__currentLoopData = $portfolio['about']['paragraphs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paragraph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($paragraph); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <ul class="value-list reveal">
            <?php $__currentLoopData = $portfolio['about']['values']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h3><?php echo e($value['title']); ?></h3>
                    <p><?php echo e($value['text']); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <p class="currently reveal">
            <span class="currently-label"><?php echo e($portfolio['about']['currently']['label']); ?></span>
            <?php echo e($portfolio['about']['currently']['text']); ?>

        </p>
    </div>
</section><?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/about.blade.php ENDPATH**/ ?>