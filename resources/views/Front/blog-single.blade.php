
   @extends('layout.app')
@section('contenupage')
<style>
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 550px;
            margin-top: 130px;
            width: 350px;
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <form action="/submit_login" method="post">
        <h2>Connexion</h2>
        <label for="username">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <input type="submit" value="Se connecter">
    </form>
@endsection