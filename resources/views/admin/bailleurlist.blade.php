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
      <button type='submit' class="btn btn-success" ><a href="createbailleur">Ajouter</a></button>
   

    </tr>
  </thead>
  <tbody>
    @foreach ($bailleur as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->libelle}}</td>
         {{-- <td><a href="/edit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/bailleurs/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/bailleurs/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
      // <td><a href="{{ route('bailleur.edit', ['id' => $item->id]) }}">Editer</a></td>
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
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Téléphone</th>  
      <th scope="col">Modifier</th>
      <th scope="col">Supression</th>
      <th scope="col">Detail</th>
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
     
          <td><a href="/edit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>    
        <form action="/bailleurs/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      
  <td><a href="bailleurshow/{{ $item->id }}">
    <button class="btn btn-secondary">Details</button>
  </a></td>
  <td><form action="/bailleurdelete/{{ $item->id }}" method="POST">
    @csrf
    @method('Delete')
     
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

