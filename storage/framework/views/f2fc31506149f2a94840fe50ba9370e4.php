<section id="testimonials" class="section">
    <div class="container">
        <header class="section-head reveal">
            <p class="eyebrow">Notes</p>
            <h2><?php echo e($portfolio['testimonials']['heading']); ?></h2>
            <p class="lead"><?php echo e($portfolio['testimonials']['lead']); ?></p>
        </header>

        <ul class="card-grid quote-grid">
            <?php $__currentLoopData = $portfolio['testimonials']['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="reveal">
                    <figure class="card quote-card">
                        <blockquote>
                            <p><?php echo e($testimonial['quote']); ?></p>
                        </blockquote>
                        <figcaption>
                            <span class="quote-avatar" aria-hidden="true">
                                <?php echo e($testimonial['initials'] ?? Illuminate\Support\Str::initials($testimonial['name'])); ?>

                            </span>
                            <span class="quote-attribution">
                                <strong><?php echo e($testimonial['name']); ?></strong>
                                <span><?php echo e($testimonial['role']); ?></span>
                            </span>
                        </figcaption>
                    </figure>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>
<?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/testimonials.blade.php ENDPATH**/ ?>