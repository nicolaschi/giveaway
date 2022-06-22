@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <select id="lga" name="role" class="form-control @error('name') is-invalid @enderror">
	                                <option value="">Select Local Govt. Area ...</option>
	                                 <option value="admin">admin</option>
                                </select>
                                {{-- <input id="name" type="text" class="form-control @error('role') is-invalid @enderror" name="name" value="{{ old('role') }}" required autocomplete="name" autofocus> --}}

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lga') }}</label>
                            <div class="col-md-6">
                                <select id="lga" name="lga" class="form-control @error('lga') is-invalid @enderror">
	                                <option value="">Select Local Govt. Area ...</option>
	                                 <option value="Alimosho">Alimosho</option>
	                                <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
	                                <option value="Kosofe">Kosofe</option>
	                                <option value="Mushin">Mushin</option>
	                                <option value="Oshodi-Isolo">Oshodi-Isolo</option>
	                                <option value="Ojo">Ojo</option>
	                                <option value="Ikorodu">Ikorodu</option>
	                                <option value="Surulere">Surulere</option>
	                                <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
	                                <option value="Agege">Agege</option>
	                                <option value="Somolu">Somolu</option>
	                                <option value="Amuwo-Odofin">Amuwo-Odofin</option>
	                                <option value="Lagos Mainland">Lagos Mainland</option>
	                                <option value="Ikeja">Ikeja</option>
	                                <option value="Eti-Osa">Eti-Osa</option>
	                                <option value="Badagry">Badagry</option>
	                                <option value="Apapa">Apapa</option>
	                                <option value="Lagos Island">Lagos Island</option>
	                                <option value="Epe">Epe</option>
	                                <option value="Ibeju-Lekki">Ibeju-Lekki</option>
                                </select>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="lga" value="{{ old('lga') }}" required autocomplete="name" autofocus>

                                @error('lga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

