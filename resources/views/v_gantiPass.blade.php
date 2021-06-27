@extends('layout.v_template')
@section('title','Ganti Password User')

@section('content')
  <div class="card card-primary">
              <!-- form start -->
      <div class="card-body">
          <form action="ganti/{{$profile->id}}" method="POST">
            @csrf
              <div class="row">
                <div class="input-group mb-5">
                    <label for="lama" class="col-md-2 col-form-label">{{ __('Password Sekarang :') }}</label>
                    <input id="lama" type="password" class="form-control @error('lama') is-invalid @enderror" name="lama"  autocomplete="old-password" placeholder="Input Password Lama">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                        <div class="invalid-feedback">
                    @error('lama')
                      {{$message}}
                    @enderror
                  </div>
                  </div>
                  <div class="input-group mb-5">
                    <label for="password" class="col-md-2 col-form-label">{{ __('Password Baru:') }}</label>
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
                  </div>
                      
                    
                    
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/profile/{{ Auth::user()->id }}" class="btn btn-danger">Kembali</a><br>      
            </div>
            </form>
        </div>
    </div>
@endsection

