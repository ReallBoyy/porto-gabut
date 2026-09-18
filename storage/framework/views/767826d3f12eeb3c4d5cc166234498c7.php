<section id="top" class="section hero">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <p class="eyebrow"><?php echo e($portfolio['hero']['eyebrow']); ?></p>

            <h1>
                <?php echo e($portfolio['hero']['headline']); ?>

                <span class="headline-accent"><?php echo e($portfolio['hero']['headline_accent']); ?></span>
            </h1>

            <p class="lead"><?php echo e($portfolio['hero']['lead']); ?></p>

            <p class="hero-cta">
                <a class="button" href="<?php echo e($portfolio['hero']['primary_cta']['href']); ?>">
                    <?php echo e($portfolio['hero']['primary_cta']['label']); ?>

                    <?php echo $__env->make('partials.icon', ['name' => 'arrow-right'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </a>
                <a class="button button-ghost" href="<?php echo e($portfolio['hero']['secondary_cta']['href']); ?>">
                    <?php echo e($portfolio['hero']['secondary_cta']['label']); ?>

                </a>
            </p>

            <dl class="hero-facts">
                <?php $__currentLoopData = $portfolio['hero']['facts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <dt><?php echo e($fact['label']); ?></dt>
                        <dd><?php echo e($fact['value']); ?></dd>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </dl>
        </div>

        <figure class="hero-figure reveal">
            <div class="hero-terminal" role="img" aria-label="<?php echo e($portfolio['hero']['terminal']['alt']); ?>">
                <div class="terminal-bar">
                    <span class="terminal-dot dot-red"></span>
                    <span class="terminal-dot dot-yellow"></span>
                    <span class="terminal-dot dot-green"></span>
                    <span class="terminal-title"><?php echo e($portfolio['hero']['terminal']['title']); ?></span>
                </div>
                <div class="terminal-body" aria-hidden="true">
                    <p><span class="t-prompt">➜</span> <span class="t-cmd">npm run dev</span></p>
                    <p><span class="t-ok">✔</span> VITE ready in 42 ms</p>
                    <p><span class="t-path">➜ Local:</span> http://localhost:5173/</p>
                    <p><span class="t-dim"># no vibes, just deploys</span></p>
                    <p><span class="t-prompt">➜</span> <span class="t-cmd">git commit -m "ship it"</span></p>
                    <p><span class="t-ok">✔</span> main · deployed to production</p>
                    <p class="t-line">
                        <span class="t-prompt">➜</span> <span class="t-cursor"></span>
                    </p>
                </div>
            </div>
            <figcaption><?php echo e($portfolio['hero']['terminal']['caption']); ?></figcaption>
        </figure>
    </div>
</section>
<?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/hero.blade.php ENDPATH**/ ?>