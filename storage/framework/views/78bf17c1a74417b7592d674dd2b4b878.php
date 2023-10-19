<form action="<?php echo e(route('products.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label>Nome do produto:</label>
        <input type="text" name="nome">
    </div>
    <div>
        <label>Descrição:</label>
        <input type="text" name="descriacao">
    </div>
    <div>
        <label>Preço:</label>
        <input type="text" name="preco">
    </div>
    <div>
        <select name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    

    <button type="submit">Salvar</button>
</form><?php /**PATH C:\xampp\htdocs\Loja\resources\views/products/create.blade.php ENDPATH**/ ?>