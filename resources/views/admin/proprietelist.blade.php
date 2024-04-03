@extends('admin.app')
@section('admincontent')
<section>
<table class="table table-dark table-hover">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>
    
  @endif
    
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
      <button type='submit' class="btn btn-success" ><a href="{{url('/proprietecreate')}}">Ajouter</a></button>
   
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
      <td><img src="{{asset($item->propriete_image)}}" alt="Propriete_image" ></td>
      

          <td><a href="{{route('propriete.edite',$item->id)}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/proprietedelete/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/proprietes/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
 </tr>
   @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
</div>
</div>
</section>      
@endsection    
