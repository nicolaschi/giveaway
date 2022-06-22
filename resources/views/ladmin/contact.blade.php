
@include('ladmin.lheader')
@include('ladmin.lnavbar')


    <div class="page-container">

        <div class="main-content">

            <div class="page-header">
              
                <div class="header-sub-title">
                     
                </div>
            </div>

                                            <div class="container col-4">
                                                <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ask Your Private Market Specialist a Question</h4>
                                        <p style="padding-bottom:12px;"> Enter your question or request for your Private Securities Specialist. All communications with Forge are kept confidential.</p>
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
                                                                 <div class="form-group col-md-12">
                                                                    <label class="font-weight-semibold" for="userName">How can we help?</label>
                                                                    <textarea  class="form-control id="w3review" name="w3review" rows="4" cols="50">
</textarea>
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>
                                                             

                                                                  <div class="form-row">
                                                                 <div class="form-group col-md-12">
                                                                    <label class="font-weight-semibold" for="userName">Phone</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    </div>
                                                             
                                                                 
                    

                                                                

                                                                        <button type="submit" class="btn btn-primary col-md-12">SEND</button>
                                                                    </div>
                                                                </div>

                                                                </div>
                                                            </form>
                                    </div>
                                </div>

                            </div>
</div>

@include('admin.footer')