<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #803a3a, #f3bf97);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            margin-top: 50px;
            background-color: rgba(240, 255, 255, 0.26);
            border-radius: 30px;
            padding: 50px;
            overflow: hidden;
            box-shadow: 50px 20px 30px rgba(0, 0, 1, 0.1);
        }

        h3 {
            color: #803a3a;
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #803a3a;
            color: #fff;
            padding: 7px 10px;
            text-decoration: none;
            border-radius: 20px;
            display: block;
            margin: 20px auto;
            text-align: center;
            width: 15%;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #8b4d4d;
        }

        .btn-edit,
        .btn-delete {
            display: inline-block;
            margin: 5px;
            padding: 8px 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, opacity 0.3s ease;
            color: #fff;
            cursor: pointer;
            opacity: 0.7;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            background-color: #0056b3;
            opacity: 1;
        }

        .table {
            margin-bottom: 0;
            width: 80%;
        }

        .table thead {
            background-color: #007bff;
            color: #fff;
        }

        .table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.2);
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .table tbody tr:hover .btn-edit,
        .table tbody tr:hover .btn-delete {
            opacity: 1;
            transition: opacity 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Employers</h3>
        <div class="table-responsive">
            <table class="table mx-auto">
                <thead class="bg-primary text-light">
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Show</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <!-- Loop through your employes and display data -->
                    <?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($employe->id); ?></td>
                        <td><?php echo e($employe->nom); ?></td>
                        <td><?php echo e($employe->prenom); ?></td>
                        <td><?php echo e($employe->email); ?></td>
                        <td>
                            <img src="<?php echo e($employe->img); ?>" alt="Employe">
                        </td>
                        <td>
                            <a href="<?php echo e(route('employe.show', $employe->id)); ?>" class="btn btn-info btn-sm btn-edit">Show</a>
                        </td>
                        <td>
                            <a href="<?php echo e(route('employe.edit', $employe->id)); ?>" class="btn btn-primary btn-sm btn-edit">Modifier</a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('employe.destroy', $employe->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("DELETE"); ?>
                                <button type="submit" class="btn btn-danger btn-sm btn-delete"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <a href="<?php echo e(route('employe.create')); ?>" class="btn-custom">Ajouter</a>
    </div>
</body>

</html>
<?php /**PATH C:\Users\Administrateur\Desktop\first - Copie\resources\views/employe/index.blade.php ENDPATH**/ ?>