<section id="work" class="section section-tinted">
    <div class="container">
        <header class="section-head reveal">
            <p class="eyebrow">Portfolio</p>
            <h2><?php echo e($portfolio['work']['heading']); ?></h2>
            <p class="lead"><?php echo e($portfolio['work']['lead']); ?></p>
        </header>

        <ul class="card-grid work-grid">
            <?php $__currentLoopData = $portfolio['work']['projects']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="reveal">
                    <article class="card work-card">
                        <a class="work-link" href="<?php echo e($project['href']); ?>">
                            <span class="visually-hidden">View <?php echo e($project['name']); ?></span>
                        </a>

                        <div class="work-media">
                            <img
                                src="<?php echo e(asset($project['image']['src'])); ?>"
                                srcset="<?php echo e($project['image']['srcset']); ?>"
                                sizes="(min-width: 64rem) 32rem, (min-width: 48rem) 45vw, 90vw"
                                width="640"
                                height="480"
                                loading="lazy"
                                decoding="async"
                                alt="<?php echo e($project['image']['alt']); ?>"
                            >
                        </div>

                        <div class="work-body">
                            <p class="kicker"><?php echo e($project['kicker']); ?></p>
                            <h3>
                                <?php echo e($project['name']); ?>

                                <?php echo $__env->make('partials.icon', ['name' => 'arrow-up-right'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            </h3>
                            <p><?php echo e($project['description']); ?></p>

                            <ul class="tag-list" aria-label="Stack used">
                                <?php $__currentLoopData = $project['stack']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($tag); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </article>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>
<?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/work.blade.php ENDPATH**/ ?>