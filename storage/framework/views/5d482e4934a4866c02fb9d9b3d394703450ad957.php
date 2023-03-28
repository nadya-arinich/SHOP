<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <?php echo $__env->make('adminka.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="clear"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-post-comments">
                                <?php $__currentLoopData = $maintexts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $main): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><?php echo e($main->name); ?> <a href="<?php echo e(asset('adminka/maintext/'.$main->id)); ?>">Edit</a></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply </h3>
                                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <p>Name *</p>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <p>Email *</p>
                                                <input type="email">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <p>Website</p>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                <p>Website</p>
                                                <textarea id="message-box" cols="30" rows="10"></textarea>
                                                <input type="submit" value="Post Comment">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\shop\resources\views/adminka/maintext.blade.php ENDPATH**/ ?>