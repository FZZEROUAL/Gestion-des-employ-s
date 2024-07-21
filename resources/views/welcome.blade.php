<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('Form.store') }}" >    
        @csrf  
        <label for="NOM">
            NOM
        </label><br>
        <input type="text" name="NOM" id="NOM">   <br><br>     
        <label for="PRENOM">
            PRENOM
        </label><br>
        <input type="text" name="PRENOM" id="PRENOM"><br><br>
        <label for="AGE">
            AGE
        </label><br>
        <input type="number" name="AGE" id="AGE"><br><br>
        <input type="submit" value="ENVOYER">
    </form>
</body>
</html>