@include('admin.header')
@include('admin.navbar')
            <!-- Page Container START -->
            <div class="page-container">

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/users') }}">
                                <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Administrators</p>
                                            <h2 class="m-b-0">
                                                <span> {{ $count }} </span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/registeeredusers') }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Registered Users</p>
                                            <h2 class="m-b-0">
                                                <span>{{ $countR }}</span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/single') }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Single</p>
                                            <h2 class="m-b-0">
                                                <span> {{ $single }}</span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/married') }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Married</p>
                                            <h2 class="m-b-0">
                                                <span> {{$married}} </span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/widowed') }}">

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Widowed</p>
                                            <h2 class="m-b-0">
                                                <span> {{  $widowed }} </span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/employed') }}">

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Employed</p>
                                            <h2 class="m-b-0">
                                                <span> {{  $employed }} </span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <a href="{{ url('/unemployed') }}">

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="m-b-0">Unemployed </p>
                                            <h2 class="m-b-0">
                                                <span> {{  $unemployed }} </span>
                                            </h2>
                                        </div>
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-bar-chart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>






                </div>
                <!-- Content Wrapper END -->
@include('admin.footer')
