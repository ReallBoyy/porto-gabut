<section id="contact" class="section section-tinted">
    <div class="container contact-grid">
        <div class="reveal">
            <header class="section-head">
                <p class="eyebrow">Contact</p>
                <h2><?php echo e($portfolio['contact']['heading']); ?></h2>
                <p class="lead"><?php echo e($portfolio['contact']['lead']); ?></p>
            </header>

            <ul class="channel-list">
                <?php $__currentLoopData = $portfolio['contact']['channels']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <span class="channel-label"><?php echo e($channel['label']); ?></span>
                        <a href="<?php echo e($channel['href']); ?>"><?php echo e($channel['value']); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        
        <form
            class="card contact-form reveal"
            method="post"
            action="<?php echo e($portfolio['contact']['form']['action']); ?>"
            enctype="text/plain"
            novalidate
            data-contact-form
            data-success-message="<?php echo e($portfolio['contact']['form']['success']); ?>"
        >
            <p class="form-status" role="status" aria-live="polite" data-form-status></p>

            <?php $__currentLoopData = $portfolio['contact']['form']['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="field">
                    <label for="contact-<?php echo e($field['name']); ?>"><?php echo e($field['label']); ?></label>
                    <input
                        id="contact-<?php echo e($field['name']); ?>"
                        name="<?php echo e($field['name']); ?>"
                        type="<?php echo e($field['type']); ?>"
                        autocomplete="<?php echo e($field['autocomplete']); ?>"
                        placeholder="<?php echo e($field['placeholder']); ?>"
                        required
                    >
                    <p class="field-error" data-field-error="<?php echo e($field['name']); ?>" hidden></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="field">
                <label for="contact-message"><?php echo e($portfolio['contact']['form']['message']['label']); ?></label>
                <textarea
                    id="contact-message"
                    name="<?php echo e($portfolio['contact']['form']['message']['name']); ?>"
                    rows="5"
                    placeholder="<?php echo e($portfolio['contact']['form']['message']['placeholder']); ?>"
                    required
                ></textarea>
                <p class="field-error" data-field-error="message" hidden></p>
            </div>

            <button class="button" type="submit">
                <?php echo e($portfolio['contact']['form']['submit']); ?>

                <?php echo $__env->make('partials.icon', ['name' => 'send'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </button>
        </form>
    </div>
</section><?php /**PATH /home/riq/Projects/laravel-nexts/landing-porto/resources/views/partials/contact.blade.php ENDPATH**/ ?>