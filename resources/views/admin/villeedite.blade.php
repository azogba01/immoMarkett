@extends('admin.app')
@section('admincontent')
 
   <marquee behavior="" direction=""><h1>Veuillez proceder a la modification</h1></marquee>
 
<form action="{{ route('villes.update', $ville->id) }}" method="POST">
        @csrf
        @method('PUT')

   </section>
        <label for="nomville">Nom de la ville :</label>
        <input type="text" name="nomville" value="{{$villes->nomville}}" required> <br> <br>

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

