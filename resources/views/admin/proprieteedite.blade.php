@extends('admin.app')
@section('admincontent') 
<form action="{{ route('proprietes.update', $propriete->id) }}" method="POST">
        @csrf
        @method('PUT')

   </section>
        <label for="etat">Etat :</label>
        <input type="text" name="etat" value="{{$propriete->eta}}" required> <br> <br>
         <label for="prix">Prix :</label>
        <input type="text" name="prix" value="{{$propriete->prix}}" required> <br> <br>
         <label for="superficie">Superficie :</label>
        <input type="text" name="superficie" value="{{$propriete->superficie}}" required> <br> <br>
         <label for="condition">Condition :</label>
        <input type="text" name="condition" value="{{$propriete->condition}}" required> <br> <br>
        <label for="condition">Images :</label>
        <input type="file" name="propriete_image" value="{{$propriete->propriete_image}}" required> <br> <br>
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

