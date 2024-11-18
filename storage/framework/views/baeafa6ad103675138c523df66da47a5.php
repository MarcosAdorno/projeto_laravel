<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...your-integrity-hash..." crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Criar Produto</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo:
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('produtos.store')); ?>" method="POST" class="mt-4">
            <?php echo csrf_field(); ?> <!-- Token CSRF -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="custo" class="form-label">Custo</label>
                <input type="text" id="custo" name="custo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" id="preco" name="preco" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="text" id="quantidade" name="quantidade" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?php echo e(route('produtos.index')); ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>

    <!-- Scripts do Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha384-hzvD4zBO8zP66nmLXUbtgP5AONR5MTxS9AqV8DNk7q5N8xUevgiXsnXTX8vOPaN4" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\pedro\Desktop\crud_basico\resources\views/produtos/create.blade.php ENDPATH**/ ?>