
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="#top">
            
<span class="brand-mark" aria-hidden="true">
    <?php echo e($portfolio['identity']['initials']); ?>

    <img
        class="brand-avatar"
        src="<?php echo e(asset($portfolio['identity']['avatar'])); ?>"
        alt=""
        width="80"
        height="80"
        loading="eager"
        decoding="async"
        onerror="this.remove()"
    >
</span>
            <span class="brand-text">
                <strong><?php echo e($portfolio['identity']['name']); ?></strong>
                <small><?php echo e($portfolio['identity']['role']); ?></small>
            </span>
        </a>

        <nav class="site-nav" aria-label="Sections">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#testimonials">Notes</a></li>
            </ul>
        </nav>

        <a class="button button-small" href="#contact">Get in touch</a>
    </div>
</header><?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/header.blade.php ENDPATH**/ ?>