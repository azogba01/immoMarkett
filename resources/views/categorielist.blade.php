
@extends('layout.app')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Apprendre aujourd'hui,<br>Apprendre demain</h1>
      <h2>Nous vous presentons ici les classes disponible a ♠♠l'ecole Les Mots♠♠</h2>
      <a href="courses.html" class="btn-get-started">Explorer</a>
    </div>
  </section><!-- End Hero -->
@section('contenupage')
 

    <section>
<table class="table table-dark table-hover">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>
    
  @endif
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Nom</th>
      <th scope="col">Action</th>
      <th scope="col">Supression</th>
      <th scope="col">Detail</th>
      <button type='submit' class="btn btn-success" onclick="return confirm('voulez vous ajouter l\'element en question')"><a href="salles/create">Ajouter</a></button>
   

    </tr>
  </thead>
  <tbody>
    @foreach ($categorie as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->libelle}}</td>
         <td><a href="/categories/{{$item->id}}/edit"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/categories/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/categories/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
    </tr>
       @endforeach

  </tbody>
</table>
    </section>


         
@endsection    
