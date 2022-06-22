

            <!-- Side Nav START -->
            <div class="side-nav" >
                <div class="side-nav-inner" style="margin-top:20px;">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">

                        <div style="margin-left:11%; padding:15px;" class="media align-items-center card col-9">
                                                
                                                <div class="m-l-15">
                                                    <h2 class="font-weight-bold font-size-30 m-b-0">
                                                        
                                                       
                                                    </h2>
                                                    <h4 class="m-b-0">Hi {{ Auth::user()->name }}</h4>
                                                    <span class=" text-muted font-size-13 font-weight-semibold">Welcome back</span>
                                                </div>

                                                <div>

                                            <div style="padding-top:12px;">
                                                <button class="btn btn-primary btn-tone m-r-5"><a href="{{ url('/buy') }}">Buy</a></button>

                                                <button class="btn btn-primary btn-tone m-r-5"><a href="{{ url('/sell') }}">Sell</a></button>
                                            </div>
                                                    </div>
                                            </div>

                                            <div style="margin-left:11%;" class="media alert alert-success card col-9">
                                                
                                            <div class="d-flex ">
                                                <div class="media">
                                                    <!-- <div class="avatar avatar-image">
                                                    <i class="anticon anticon-message"></i>
                                                    </div> -->
                                                    <div class="m-l-10">
                                                        
                                                        <span class="text-muted font-size-13">Contact your specialist </span>
                                                        <br/>
                                                        <a class="dropdown-toggle" href="{{ url('/contact') }}">
                                                        <span class=" font-size-13">Mark Smith </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                </div>
</div>

                        

                        
                            <a class="dropdown-toggle" href="{{ url('ldashboard') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('/portfolio') }}">
                                <span class="icon-holder">
                                <i class="anticon anticon-folder-open"></i>
                                </span>
                                <span class="title">Portfolio</span>
                                
                            </a>
                            
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="{{ url('/enti') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user-add"></i>
                                </span>
                                <span class="title">Enities</span>
                            </a>
                            
                        </li>
                </div>
            </div>
            <!-- Side Nav END -->
