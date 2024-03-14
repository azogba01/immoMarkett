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
      <button type='submit' class="btn btn-success" ><a href="createcategorie">Ajouter</a></button>
   

    </tr>
  </thead>
  <tbody>
    @foreach ($categorie as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->libelle}}</td>
         {{-- <td><a href="/edit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/categories/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/categories/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
      // <td><a href="{{ route('categorie.edit', ['id' => $item->id]) }}">Editer</a></td>
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
      <th scope="col">Action</th>
      <th scope="col">Supression</th>
      <button type='submit' class="btn btn-success" ><a href="createcategorie">Ajouter</a></button>
   
            </tr>
          </thead>
          <tbody>
            @foreach ($categorie as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->libelle}}</td>
          <td><a href="/categoryedit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="{{url('/categoriedelete/'.$item->id)}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
   @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
</div>
</div>
</section>      
@endsection    
