<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php if(session('success')): ?>
        <div style="color: green;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo e(route('tp3.store')); ?>">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td><h1>Login</h1></td>
            </tr>
            <tr>
                <td><label>nom: </label></td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td><label>prenom: </label></td>
                <td><input type="text" name="prenom"></td>
            </tr>
            <tr>
                <td><label>age: </label></td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><button type="submit">Envoyer</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php /**PATH C:\Users\Imane\OneDrive\Bureau\Projet1Laravel\first\resources\views/form.blade.php ENDPATH**/ ?>