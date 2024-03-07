@extends('layout.app')
@section('contenupage')
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
   <marquee behavior="" direction=""><h1>Veuillez proceder a la modification</h1></marquee>
<form action="{{route('bailleur.update', $bailleur->id) }}" method="POST">
        @csrf
    @method('PUT')
   </section>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="{{$bailleur->nom}}" required> <br> <br>
         <label for="prenom">Prenom :</label>
        <input type="integer" name="prenom" value="{{$bailleur->prenom}}" required> <br> <br>
         <label for="tel">téléphone :</label>
        <input type="text" name="tel" value="{{$bailleur->tel}}" required> <br> <br>
        <button type="submit" href="">Enregistrer</button>
     <section>        
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
        margin-left: 100px;
      }
      
      </style>
  @endsection    


