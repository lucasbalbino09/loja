<ul>
    <li><h1> <?php echo e($product->nome); ?></h1></li>
    <li>Descricao: <?php echo e($product->descriacao); ?></li>
    <li>Preço: R$ <?php echo e($product->preco); ?></li>
    <li>Categoria: <?php echo e($product->Category->nome); ?></li>
</ul>
<Form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
<?php echo method_field('delete'); ?>
<?php echo csrf_field(); ?>
<button type="submit">Excluir Produto</button>
</Form>

<a href="<?php echo e(route('products.index')); ?>">
<button>Voltar para o menu</button>
</button>
</a>
<?php /**PATH C:\xampp\htdocs\Loja\resources\views/products/show.blade.php ENDPATH**/ ?>