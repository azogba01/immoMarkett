
@extends('layout.app')
@section('contenupage')
<table class="table table-dark table-hover">
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}

        </div>
    
  @endif
   <br>
 <br>
 <br>
 <br>
 <br>
 <br>
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">etat</th>
      <th scope="col">prix</th>
      <th scope="col">superficie</th>
      <th scope="col">condition</th>
      <th scope="col">Action</th>
      <th scope="col">Supression</th>
      <th scope="col">Detail</th>
      <button type='submit' class="btn btn-success" onclick="return confirm('voulez vous ajouter l\'element en question')"><a href="proprietecreate">Ajouter</a></button>
   

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
         <td><a href="/proprietedit/{{$item->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
        <td>
        <form action="/proprietedelete/{{$item->id}}" method="POST">
           @csrf
           @method('delete')
           <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
        </form>  
      </td>
      <td><a href="/delete/{{$item->id}}"><button class="btn btn-success">Detail</button></a></td>
    </tr>
       @endforeach

  </tbody>
</table>
    </section>


         
@endsection    
