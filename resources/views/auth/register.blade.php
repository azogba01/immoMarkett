 {{-- <style>   
form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin-left: 550px;
    margin-top: 130px;   
}
h2 {
    text-align: center;
    
    
}

label {
    font-weight: bold;
   
}

input[type="text"],
input[type="email"],
input[type="telephone"],
input[type="password"] {
    width: 100%;
    height: 30px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #080808;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style> --}}
@extends('layout.app')
@section('contenupage')
    
   
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vous devez vous s\'incrire avant de publier un article') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group">
                                {{-- <label for="exampleInputUsername1">status</label> --}}
                                <input type="hidden" class="form-control" name="status"  value="1"  id="status" placeholder="status">
                              </div>
                            <div class="col-md-6">
                                <input id="role" type="hidden" class="form-control @error('role') is-invalid @enderror" name="role" value="{{'bailleur'}}"  required autocomplete="role" autofocus>

                             </div>
                        </div>
                        <div class="row mb-3">
                            {{-- <label for="hidden" class="col-md-4 col-form-label text-md-end">{{ __('type abonnement') }}</label> --}}

                            <div class="col-md-6">
                                <input id="type" type="hidden" class="form-control @error('type') is-invalid @enderror" name="type"   value="{{'bailleur'}}"  required autocomplete="type" autofocus>
 
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inscrire') }}
                                </button>
            {{-- <a class="nav-link " href="{{ url('/login') }}">Se connecter</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <br>
    <br>
    <br>
    <br>
@endsection

 
