@extends('admin.app')
@section('admincontent')

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
      <th scope="col">Modifier</th>
      <th scope="col">Supression</th>
      <button type='submit' class="btn btn-success" ><a href="typeproprietairecreate">Ajouter</a></button>
   

    </tr>
  </thead>
  <tbody>
    @foreach ($typeproprietaire as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->libelle}}</td>
          <td><a href="/typeproprietairedit/{{ $item->id }}">
            <button class="btn btn-primary">Modifier </button>
      <td><form action="/typeproprietairedelete/{{ $item->id }}" method ="POST">
        @csrf
        @method('Delete')
        <button type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')"> Supprimer </button> </a>
      </td></tr>
       @endforeach

  </tbody>
</table>
    </section>


         
@endsection    
