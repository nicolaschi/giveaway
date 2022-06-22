@include('admin.header')
@include('admin.navbar')




            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">

                    @if(session()->has('message'))
                    <div class="alert alert-success">
                         {{ session()->get('message') }}
                    </div>
               @endif



                    <form enctype="multipart/form-data" action="{{ url ('/importt') }}" method="POST" >

                        @csrf

                        <div class="page-header no-gutters has-tab">
                            <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                                <div class="media align-items-center m-b-15">
                                    <div class="avatar avatar-image rounded">
                                    </div>
                                    <div class="m-l-15">
                                        <h4 class="m-b-0">ADD BENEFICIARIES</h4>
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
                                    <a class="nav-link active" data-toggle="tab" href="#">Add Beneficiaries</a>
                                </li>

                            </ul>

                        </div>
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="product-edit-basic" >
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="campaign_name">Select Campaign</label>
                                            @foreach ($data as $data )

                                                <select id="lga" name="campaign_id" class="form-control @error('lga') is-invalid @enderror">
                                                <option value="{{$data->id}}">{{$data->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="filee"  type=".csv">
                                    </div>

                                    <input type="hidden" id="address" name="unique_id" class="form-control" />


                                    <div class="form-group">
                                        <button class="btn btn-primary">ADD BENEFICIARIES</button>
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
