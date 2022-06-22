@include('ladmin.lheader')
@include('ladmin.lnavbar')
            <!-- Page Container START -->
        

                            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                       
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Portfolio</h4>
                            <p>View, manage, and track the value of your private company shares and stock options over time.</p>
                            <div class="m-t-25">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Current Holdings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transaction History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Add Holding</a>
                                    </li>
                                </ul>
                                <div class="tab-content m-t-15" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <hr/>
                                    <div class="media align-items-center">
                                      
                                      <span style="text-align:center;" class="font-size-13 font-weight-semibold">No holdings yet</span>
                                    </div>
                                    <hr/>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <hr/>
                                    <div class="media align-items-center">
                                      
                                      <span style="text-align:center;" class="font-size-13 font-weight-semibold">
                                       No stocks, options, or fund investments yet
                                       </span>
                                    </div>
                                    <hr/>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        

                                    <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add a Holding</h4>
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
                                                                    <label class="font-weight-semibold" for="userName">Company Name:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="e.g Google" autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="email">Transaction Date:</label>
                                                                    <input id="email" type="date" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" autofocus>

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                 </div>

                                                                 <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Number of Shares:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>

                                                                     <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Price Per Share:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>

                                                                <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="email">Share Class:</label>

                                                                            <select id="lga" name="lga" class="form-control @error('lga') is-invalid @enderror">
                                                                                <option value="common"> common</option>

                                                                            </select>

                                                                            @error('lga')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                 </div>

                                                                 <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Legal Entity:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>


                                                                                                        <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Counter Party:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>


                                                                                                        <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Certificate Number:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>

                                                                    <div class="form-group col-md-4">
                                                                    <label class="font-weight-semibold" for="userName">Broker:</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>



                                                  

                                                               

                                                                        <button type="submit" class="btn btn-primary col-md-12">Save</button>
                                                                    </div>
                                                                </div>

                                                                </div>
                                                            </form>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                            @include('ladmin.lfooter')
                        </div>
                    </div>
                   
                   
  
                <!-- Content Wrapper END -->

