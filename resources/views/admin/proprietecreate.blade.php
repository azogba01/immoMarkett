@extends('admin.app')
@section('admincontent')
 
 <div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Form elements </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Form elements</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col  grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ajouter une propriete</h4>
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
    @endif
            {{--<p class="card-description"> ajout </p> --}}
            <form class="forms-sample" action="{{ route('propriete.store') }}" method="POST" enctype="multipart/form-data">
              @csrf


            
               <div class="form-group">
              <label for="exampleFormControlSelect1">Etat du bien </label>
              <select class="form-control form-control-lg" name="etat" id="exampleFormControlSelect1">
                <option>LOUER</option>
                <option>VENDRE</option>
              </select>
            </div>
             <div class="form-group">
              <label for="exampleFormControlSelect1">Categorie </label>
              <select class="form-control form-control-lg" name="id_categorie" id="exampleFormControlSelect1">
                @foreach ($categorie as $item)
                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                @endforeach
                 
              </select>
            </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Prix</label>
                <input type="number" class="form-control" name="prix" id="libelle" placeholder="Prix">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Superficie</label>
                <input type="number" class="form-control" name="superficie" id="libelle" placeholder="Superficie">
              </div>

               <div class="form-group">
                <label for="exampleInputUsername1">Condition</label>
                <input type="text" class="form-control" name="condition" id="libelle" placeholder="Condition à remplir pour l'aquisition du bien">
              </div>
              <div class="form-group">
                {{-- <label for="exampleInputUsername1">status</label> --}}
                <input type="hidden" class="form-control" name="status"  value="1"  id="status" placeholder="status">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Image</label>
                <input type="file" class="form-control" name="propriete_image" id="propriete_image" placeholder=" ">
              </div>
              {{-- <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Libelle :</label>
        <input type="text" name="libelle" required> <br><br>
          <button type="submit">Envoyer</button>

 </form> --}}
              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
              </div>
              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input"> Remember me </label>
              </div> --}}
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   
</div>
@endsection 
