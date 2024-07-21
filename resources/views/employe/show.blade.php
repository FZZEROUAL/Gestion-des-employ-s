<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background: linear-gradient(to right, #803a3a, #f3bf97);
            color: #fff;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background:rgba(240, 255, 255, 0.26);
            border-radius: 30px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 45%;
            margin: 0 auto;
            height: 80%;
        }
        .card-body {
            padding: 35px;
            text-align: center;
            margin-top: 10%;

        }

        .card-title {
            margin-bottom: 20px;
            color: #803a3a;
        }

        .list-group {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-group-item {
            background-color: #803a3a44;
            border: none;
            border-bottom: 1px solid #803a3a;
            padding: 10px;
            transition: background-color 0.3s ease; 
            color: white

        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .list-group-item strong {
            font-weight: bold;
            margin-right: 10px;
        }

        .list-group-item:hover {
            background-color: #803a3a73;
        }
    </style>
    <title>Employe</title>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Employés Information</h1><br>
            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> {{$employe->id}}</li>
                <li class="list-group-item"><strong>Nom:</strong> {{$employe->nom}}</li>
                <li class="list-group-item"><strong>Prénom:</strong> {{$employe->prenom}}</li>
                <li class="list-group-item"><strong>Email:</strong> {{$employe->email}}</li>
                <li class="list-group-item"><strong>Image:</strong> {{$employe->img}}</li>
            </ul>
        </div>
    </div>
</body>

</html>
