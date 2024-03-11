@extends('layout.app')
@section('contenupage')
<section>
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
     <form action="{{ route('propriete.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <label for="etat">Etat :</label>
         <input type="text" name="etat" required> <br><br>
         <label for="prix">Prix :</label>
         <input type="integer" name="prix" required> <br><br>
         <label for="superficie">Superficie :</label>
         <input type="integer" name="superficie" required> <br><br>
         <label for="condition">Condition :</label>
         <input type="text" name="condition" required> <br><br>
         {{-- <label for="condition">Image :</label>
         <input type="file" name="propriete_image" required> <br><br> --}}
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
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
</section>
@endsection 
