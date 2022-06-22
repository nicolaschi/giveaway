@include('admin.header')
@include('admin.navbar')




            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">




                    <form  action="{{ url ('/camp') }}" method="POST" >

                        @csrf

                        <div class="page-header no-gutters has-tab">
                            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                                <div class="media align-items-center m-b-15">
                                    <div class="avatar avatar-image rounded">
                                    </div>

                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                         {{ session()->get('message') }}
                                    </div>
                               @endif

                                    <div class="m-l-15">
                                        <h4 class="m-b-0">ADD NEW CAMPAIGN</h4>
                                    </div>
                                </div>
                                <div class="m-b-15">
                                    <button class="btn btn-primary">
                                        <i class="anticon anticon-save"></i>
                                    </button>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" >
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#">Campaign Info</a>
                                </li>

                            </ul>

                        </div>
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="product-edit-basic" >
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="campaign_name">Campaign Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Unemployed Benefits">
                                        </div>

                                        <div class="form-group">
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

                                    <div class="form-group">
                                        <button class="btn btn-primary">CREATE CAMPAIGN</button>
                                </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Content Wrapper END -->



            </div>
            <!-- Page Container END -->




@include('admin.footer')
