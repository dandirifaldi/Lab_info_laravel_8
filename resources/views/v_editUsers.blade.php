@extends('layout.v_template')
@section('title','Edit Selected License')

@section('content')
	<div class="card card-primary">
              <!-- form start -->
   		<div class="card-body">
        	<form action="/users/update/{{$users -> id}}" method="POST">
        		@csrf
            	<div class="row">

                <div class="input-group mb-5">
                  <label for="name" class="col-md-1 col-form-label">{{ __('Name :') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name}}" autocomplete="name" autofocus placeholder="Input Name">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                          <div class="invalid-feedback">
                    @error('name')
                      {{$message}}
                    @enderror
                  </div>
                  </div>

                  <div class="input-group mb-5">
                    <label for="email" class="col-md-1 col-form-label">{{ __('Email :') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email}}"  autocomplete="email" placeholder="Input Email">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                          <div class="invalid-feedback">
                    @error('email')
                      {{$message}}
                    @enderror
                  </div>
                  </div>

               <!--    <div class="input-group mb-5">
                    <label for="password" class="col-md-2 col-form-label">{{ __('Password :') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Input Password">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                        <div class="invalid-feedback">
                    @error('password')
                      {{$message}}
                    @enderror
                  </div>
                  </div>

                  <div class="input-group mb-5">
                    <label for="password-confirm" class="col-md-2 col-form-label">{{ __('Confirm Password :') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Input Password Confirmation">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                          
                      </div>
                  </div> -->
                      
                    
                    
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/users" class="btn btn-danger">Kembali</a><br>      
            </div>
            </form>
        </div>
    </div>
@endsection

