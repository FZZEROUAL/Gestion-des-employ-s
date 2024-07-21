<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body
        {
            background: linear-gradient(to right, #803a3a, #f3bf97);
        }
        form
        {
            width: 45%;
            padding-left: 8%;
            padding-right: 8%;
            padding-top: 2%;
            padding-bottom: 2%;
            margin: 0 auto;
            border: none;
            border-radius: 30px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            margin-top: 7%;
            background-color: rgba(240, 255, 255, 0.26)
        }
        .group {
            position: relative;
            margin-bottom: 30px;

        }

        .input {
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 100%;
            border: none;
            border-bottom: 1px solid #ffffff;
            background: transparent;
        }

        .input:focus {
            outline: none;
        }

        label {
            color: #ffffff;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .input:focus~label,
        .input:valid~label {
            top: -20px;
            font-size: 14px;
            color: #803a3a;
        }

        .bar {
            position: relative;
            display: block;
            width: 100%;
        }

        .bar:before,
        .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #803a3a;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .bar:before {
            left: 50%;
        }

        .bar:after {
            right: 50%;
        }

        .input:focus~.bar:before,
        .input:focus~.bar:after {
            width: 50%;
        }

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }

        .input:focus~.highlight {
            animation: inputHighlighter 0.3s ease;
        }

        @keyframes inputHighlighter {
            from {
                background: #803a3a;
            }

            to {
                width: 0;
                background: transparent;
            }
        }
        .input[type="file"] {
                color: transparent;
                overflow: hidden;
            }
        .mb-4
            {
                text-align: center;
                color: #803a3a;
            }
        .btn
        {
            text-align: center;
            border: none;
            background: #803a3a;
            color: #ffffff;
            padding: 7px 7px;
            font-size: 15px;
            width: 30%;
            border-radius: 20px;
        }
        .btn:hover
        {
            background: #8b4d4d;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo e(route('employe.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h1 class="mb-4">Formulaire pour l'ajout des employés</h1><br>
        <div class="group">
            <input type="text" class="input" name="nom">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Nom</label>
        </div>

        <div class="group">
            <input type="text" class="input" name="prenom">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Prénom</label>
        </div>

        <div class="group">
            <input type="email" class="input" name="email">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Email</label>
        </div>

        <div class="group">
            <input type="file" class="input" name="img">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Image</label>
        </div>
        <center><button type="submit" class="btn">Ajouter</button></center>
    </form>
</body>

</html>
<?php /**PATH C:\Users\Administrateur\Desktop\first - Copie\resources\views/employe/FormEmploye.blade.php ENDPATH**/ ?>