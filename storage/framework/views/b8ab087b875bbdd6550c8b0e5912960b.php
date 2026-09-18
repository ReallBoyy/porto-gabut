<footer class="site-footer">
    <div class="container footer-inner">
        <div>
            <p class="footer-name"><?php echo e($portfolio['identity']['name']); ?> — <?php echo e($portfolio['identity']['role']); ?></p>
            <p class="footer-note"><?php echo e($portfolio['footer']['note']); ?></p>
            <p class="footer-copy">&copy; <?php echo e(now()->year); ?> <?php echo e($portfolio['identity']['name']); ?>. All rights reserved.</p>
        </div>

        <div class="footer-side">
            <ul class="social-list">
                <?php $__currentLoopData = $portfolio['footer']['socials']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e($social['href']); ?>" aria-label="<?php echo e($social['label']); ?>" title="<?php echo e($social['label']); ?>">
                            <?php echo $__env->make('partials.icon', ['name' => $social['icon']], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <a class="back-to-top" href="#top">Back to top</a>
        </div>
    </div>
</footer><?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/footer.blade.php ENDPATH**/ ?>