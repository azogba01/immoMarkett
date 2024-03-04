@extends('layout.app')
@section('contenupage')
 
   <marquee behavior="" direction=""><h1>Veuillez proceder a la modification</h1></marquee>
<form action="{{route('propriete.update', $propriete->id) }}" method="POST">
        @csrf
    @method('PUT')
   </section>
        <label for="etat">Etat :</label>
        <input type="text" name="etat" value="{{$propriete->etat}}" required> <br> <br>
         <label for="prix">Prix :</label>
        <input type="integer" name="prix" value="{{$propriete->prix}}" required> <br> <br>
         <label for="superficie">Superficie :</label>
        <input type="text" name="superficie" value="{{$propriete->superficie}}" required> <br> <br>
         <label for="condition">Condition :</label>
        <input type="text" name="condition" value="{{$propriete->condition}}" required> <br> <br>

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


