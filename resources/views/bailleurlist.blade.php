@extends('layout.app')
@section('contenupage')
<br>
 <br>
 <br>
 <br>
 <br>
 <br>
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
      <th scope="col">prenom</th>
      <th scope="col">Telephone</th>
      <th scope="col">Action</th>
      <th scope="col">Supression</th>
         <button type='submit' class="btn btn-success" ><a href="bailleurcreate">Ajouter</a></button>
</tr>
  </thead>
  <tbody>
    @foreach ($bailleurs as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nom}}</td>
      <td>{{$item->prenom}}</td>
      <td>{{$item->tel}}</td>
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
