@extends('layout.app')
@section('contenupage')
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
<marquee behavior="" direction=""><h1>Veuillez ajouter une salle de classe</h1></marquee>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form action="{{ route('bailleur.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required> <br><br>
        <label for="prenom">Prenom :</label>
        <input type="integer" name="prenom" required> <br><br>
        <label for="tel">Téléphone :</label>
        <input type="integer" name="tel" required> <br><br>
          <button type="submit">Envoyer</button>


</form>

<style>
          form{
           
            width: 230px;
            height: 200px;
            margin-left: 600px;
            border-radius: 20px;
            background-color: rgba(54, 81, 133, 0.267);
          }
      form label{
        margin-left: 50px;
      }
      form input{
        margin-left: 20px;
      }
      form button{
        margin-left: 150px;
      }
      
      </style>
@endsection 
