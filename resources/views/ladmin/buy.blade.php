
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
                                        <h4 class="card-title">Buy Private Securities</h4>
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
                                                                    <label class="font-weight-semibold" for="userName">In what company or companies are you interested in buying shares?</label>
                                                                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"  autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                                                        </div>
                                                             


                                                                 <div class="form-group col-md-12">
                                                                    <label class="font-weight-semibold" for="Role">In general, what is the range of a typical investment for you?:</label>
                                                                    <select name="role" class="form-control" >
                                                                    <option value="100000-250000">Between $100,000 and $250,000</option>
                                                                 <option value="250000-500000">Between $250,000 and $500,000</option>
                                                                 <option value="500000-1000000">Between $500,000 and $1 million</option>
                                                                 <option value="1000000-10000000">Between $1 million and $10 million</option>
                                                                 <option value="10000000">Greater than $10 million</option>
                                                                    </select>
                                                                </div>
                                                                

                                                                

                                                                <div class="form-group col-md-12">
                                                                    <label class="font-weight-semibold" for="password">Additional comments or questions?</label>
                                                                    <input id="password" type="textarea" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                     @error('password')
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



                                                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                                                <div class="row" style="margin-bottom:40px;">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <p>
                                                                            <div>
                                                                                Lagos Eyo Print Tee Shirt
                                                                                ₦ 2,950
                                                                            </div>
                                                                        </p>
                                                                        <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                                                                        <input type="hidden" name="orderID" value="345">
                                                                        <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                                                                        <input type="hidden" name="quantity" value="3">
                                                                        <input type="hidden" name="currency" value="NGN">
                                                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                                        
                                                                        <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> {{-- to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
                                                                        <input type="hidden" name="split" value="{{ json_encode($split) }}"> {{-- to support dynamic transaction split. More details https://paystack.com/docs/payments/multi-split-payments/#dynamic-splits --}}
                                                                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                                                            
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                                            
                                                                        <p>
                                                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                                                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                                                            </button>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </form>
                                    </div>
                                </div>

                            </div>

@include('admin.footer')