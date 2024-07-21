<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Utilisateurs</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form, table {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        .actions {
            display: flex;
            gap: 5px;
        }

        .edit-btn, .delete-btn {
            padding: 8px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .edit-btn {
            background-color: #2196F3;
        }

        .delete-btn {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo e(route('tp3.store')); ?>">
        <?php echo csrf_field(); ?>
        <h1>Login</h1>
        <label>nom: </label>
        <input type="text" name="nom">

        <label>prenom: </label>
        <input type="text" name="prenom">

        <label>age: </label>
        <input type="text" name="age">

        <button type="submit">Envoyer</button>
        <?php if(session('success')): ?>
            <div style="color: green;"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Âge</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->nom); ?></td>
                    <td><?php echo e($user->prenom); ?></td>
                    <td><?php echo e($user->age); ?></td>
                    <td class="actions">
                        <a href="<?php echo e(route('tp3.edit', $user->id)); ?>" class="edit-btn">Modifier</a>
                        <form action="<?php echo e(route('tp3.destroy', $user->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="delete-btn">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\Users\Imane\OneDrive\Bureau\Projet1Laravel\first\resources\views/table.blade.php ENDPATH**/ ?>