<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/img/breadcrumb/bg/1-1-1919x388.jpg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading"><?php echo e(__('Личный кабинет')); ?>, <?php echo e(Auth::user()->name); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="account-page-area section-space-y-axis-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <div class="table">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">Мои заказы</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                <th class="product_id">ID-товара</th>
                                                <th class="product-thumbnail">Изображение</th>
                                                <th class="cart-product-name">Наименование</th>
                                                <th class="product-price">Цена</th>
                                                </tr>
                                            </thead>
                                            <?php $__currentLoopData = $basket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tbody>
                                                <tr>
                                                    <td class="product_id">
                                                        <a href="<?php echo e(asset('products/'. $product->id)); ?>"></a>
                                                    </td>
                                                    <td width="200px">
                                                        <img src="<?php echo e(asset('products/'.$product->picture)); ?>" width="100%">
                                                    </td>
                                                    <td class="product-name"><?php echo e($product->name); ?></td>
                                                    <td class="product-price"><?php echo e($product->price); ?> BYN</td>
                                                    
                                                </tr>
                                            </tbody>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
        

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\shop\resources\views/dashboard.blade.php ENDPATH**/ ?>