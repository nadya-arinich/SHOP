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
                            <h2 class="breadcrumb-heading">Корзина</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product_remove">Действие</th>
                                <th class="product-thumbnail">Изображение</th>
                                <th class="cart-product-name">Наименование</th>
                                <th class="product-price">Цена</th>
                                
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <td class="product_remove">
                                    <a href="<?php echo e(asset('basket/delete/'. $product->id)); ?>">
                                        <i class="pe-7s-close" data-tippy="Remove" data-tippy-inertia="true"
                                        data-tippy-animation="shift-away" data-tippy-delay="50"
                                        data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                    </a>
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
            <div class="row">
                <div class="col-md-5 ml-auto">
                    <div class="cart-page-total">
                        <h2>Итого к оплате: <?php echo e($sum); ?>  BYN</h2>
                    </div>
                </div>
            </div>
            </br>
            </br>
            <form method="post" action="<?php echo e(asset('basket/order')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName" name="name">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmailAdress" class="form-label">Адресс доставки</label>
                    <input type="text" class="form-control" id="exampleInputEmailAdress" name="adress">
                </div>
                <button type="submit" class="btn btn-custom-size lg-size btn-pronia-primary">Оформить</button>
            </form>
        </div>
    </main>
                
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\shop\resources\views/basket.blade.php ENDPATH**/ ?>