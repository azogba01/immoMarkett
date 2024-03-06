@extends('layout.app')
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
         <button type='submit' class="btn btn-success" ><a href="villecreate">Ajouter</a></button>
   

    </tr>
  </thead>
  <tbody>
    @foreach ($villes as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nomville}}</td>
          <td><a href="/edit/{{ $item->id }}">
            <button class="btn btn-primary">Modifier </button>
        </a> </td>
      <td><form action="/delete/{{ $item->id }}" method ="POST">
        @csrf
        @method('Delete')
        <button type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')"> Supprimer </button> </a>
      </td></tr>
       @endforeach

  </tbody>
</table>
    </section>


         
@endsection    
