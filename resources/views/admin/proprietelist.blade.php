@extends('admin.app')
@section('admincontent')
<section>
<table class="table table-dark table-hover">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>
    
  @endif
  {{-- <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Nom</th>
      <th scope="col">Action</th>
      <th scope="col">Supression</th>
      <th scope="col">Detail</th>
      <button type='submit' class="btn btn-success" ><a href="createpropriete">Ajouter</a></button>
   

    </tr>
  </thead>
  <tbody>
    @foreach ($propriete as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->libelle}}</td>
         {{-- <td><a href="/edit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/proprietes/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/proprietes/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
      // <td><a href="{{ route('propriete.edit', ['id' => $item->id]) }}">Editer</a></td>
    </tr> --}}
          

  {{-- </tbody>
</table> --}}  
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description"> Add class <code>.table</code>
        </p>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Num</th>
      <th scope="col">Etat</th>
      <th scope="col">Prix</th>
      <th scope="col">Superficie</th>
      <th scope="col">Condition</th>
      <th scope="col">Image</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supression</th>
      <th scope="col">Detail</th>
      <button type='submit' class="btn btn-success" ><a href="createpropriete">Ajouter</a></button>
   
            </tr>
          </thead>
          <tbody>
            @foreach ($propriete as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->etat}}</td>
      <td>{{$item->prix}}</td>
      <td>{{$item->superficie}}</td>
      <td>{{$item->condition}}</td>
      <td>{{$item->propriete_image}}</td>
      <td>{{$item->p}}</td>

          <td><a href="/edit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/proprietes/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/proprietes/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
       <td><a href="/proprieteedit/{{ $item->id }}/">

        <button class="btn btn-primary">Modifier</button>
    </a> </td>
  <td><a href="proprieteshow/{{ $item->id }}">
    <button class="btn btn-secondary">Details</button>
  </a></td>
  <td><form action="/proprietedelete/{{ $item->id }}" method="POST">
    @csrf
    @method('Delete')
    <button type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')"> Supprimer </button> </a>
  </td></tr>
   @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
</div>
</div>
</section>      
@endsection    
