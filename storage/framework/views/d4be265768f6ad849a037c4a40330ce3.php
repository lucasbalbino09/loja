<h1>Lista de todos os produtos</h1>
<h2>Aqui é a index de produto</h2>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li><?php echo e($produto -> nome); ?></li>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="<?php echo e(route('products.edit', $produto->id)); ?>">
    <button>Voltar para o menu</button>
</button>
</a>
<a href="<?php echo e(route('products.create')); ?>">Cadastrar novo produto</a>

<?php /**PATH C:\xampp\htdocs\Loja\resources\views/products/index.blade.php ENDPATH**/ ?>