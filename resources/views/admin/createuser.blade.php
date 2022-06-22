
@include('admin.header')
@include('admin.navbar')


    <div class="page-container">

        <div class="main-content">

            <div class="page-header">
              <h2 class="header-title">Account setting</h2>
                <div class="header-sub-title">
                     <nav class="breadcrumb breadcrumb-dash">
                          <a href="{{ url('dashboard') }}" class="breadcrumb-item">
                            <i class="anticon anticon anticon-home m-r-5"></i>Home</a>

                                <a href="{{ url('/users') }}" class="breadcrumb-item">Administrator</a>
                                     <span class="breadcrumb-item active">Create user</span>
                     </nav>
                </div>
            </div>

                                            <div class="container">
                                                <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add User</h4>
                                    </div>
                                    <div class="card-body">

                                        @if(session()->has('message'))
                                             <div class="alert alert-success">
                                                  {{ session()->get('message') }}
                                             </div>
                                        @endif

                                        <form method="POST" action="{{ url ('/adduser') }}">
                                            @csrf

                                            <div class="form-row">
                                                                 <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Name:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="email">Email:</label>
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" autofocus>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                 </div>

                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="email">LGA:</label>

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

                                                                            @error('lga')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                 </div>

                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="Role">Role:</label>
                                                                    <select name="role" class="form-control" >
                                                                        <option value="Cadmin">Company Admin</option>
                                                                        <option value='LGadmin'>Local Govt. Admin</option>
                                                                        <option value="LGagent">Local Govt. Agent</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="password">Password:</label>
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                     @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                        <button type="submit" class="btn btn-primary col-md-12">Add Account</button>
                                                                    </div>
                                                                </div>

                                                                </div>
                                                            </form>
                                    </div>
                                </div>

                            </div>

@include('admin.footer')

