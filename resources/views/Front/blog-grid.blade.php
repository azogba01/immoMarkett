<style>   
form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin-left: 550px;
    margin-top: 130px;
    
}

h2 {
    text-align: center;
    text-decoration: underline;
    
}

label {
    font-weight: bold;
    color: #080808;
}

input[type="text"],
input[type="email"],
input[type="telephone"],
input[type="password"] {
    width: 100%;
    height: 30px;
    padding: 10px;
    margin-bottom: 10px;
    border: 2px solid #080808;
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
@extends('layout.app')
@section('contenupage')
    
    <form action="/submit_registration" method="post">
        <h2>Inscription</h2>
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>
        
        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br>
        
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>

         <label for="telephone">Télephone:</label><br>
        <input type="telephone" id="tel" name="tel" required><br>
        
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <label for="confirm_password">Confirmer le mot de passe :</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        
           <a href="connection.blade.php"><input type="submit" value="S'inscrire"></a> 
    </form>
@endsection
