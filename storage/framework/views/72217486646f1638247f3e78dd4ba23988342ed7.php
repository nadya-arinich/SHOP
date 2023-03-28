
    <div class="col-md-4 col-sm-6">
        <div class="product-item">
            <div class="product-img">
                <?php if($product->picture): ?>
                    <a href="<?php echo e(asset('product')); ?>">
                        <img src="<?php echo e(asset('products/'.$product->picture)); ?>" width="80%" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="product-content">
                <a class="product-name"><?php echo e($product->name); ?></a>
                <div class="price-box">
                    <span class="new-price">Цена: <?php echo e($product->price); ?>  BYN </span>
                    <br>
                    <button data-id="<?php echo e($product->id); ?>" data-price="<?php echo e($product->price); ?>" class="add_to_cart">В корзину</button>
                </div>
            </div>
            <br>
        </div>
    </div>
<?php /**PATH C:\OSPanel\domains\shop\resources\views/components/product.blade.php ENDPATH**/ ?>