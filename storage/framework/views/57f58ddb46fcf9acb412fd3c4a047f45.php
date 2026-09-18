<section id="skills" class="section">
    <div class="container">
        <header class="section-head reveal">
            <p class="eyebrow">Skills</p>
            <h2><?php echo e($portfolio['skills']['heading']); ?></h2>
            <p class="lead"><?php echo e($portfolio['skills']['lead']); ?></p>
        </header>

        <ul class="card-grid skill-grid">
            <?php $__currentLoopData = $portfolio['skills']['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="card skill-card reveal">
                    <span class="icon-badge">
                        <?php echo $__env->make('partials.icon', ['name' => $skill['icon']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </span>
                    <h3><?php echo e($skill['title']); ?></h3>
                    <p><?php echo e($skill['text']); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section><?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/skills.blade.php ENDPATH**/ ?>