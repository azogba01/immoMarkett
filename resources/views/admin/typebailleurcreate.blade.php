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
            <h4 class="card-title">Ajouter type de bailleur</h4>
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
    @endif
            {{--<p class="card-description"> ajout </p> --}}
            <form class="forms-sample" action="{{ route('typebailleurs.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
                <label for="exampleInputUsername1">Libelle</label>
                <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Echéance">
            </div> 
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
