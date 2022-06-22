
@include('ladmin.lheader')
@include('ladmin.lnavbar')



<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Registered Users</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ url('dashboard') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                    <span class="breadcrumb-item active">Registered User List</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row m-b-30">
                    <div class="col-lg-8">
                        <div class="d-md-flex">

                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-file-excel m-r-5"></i>
                            <span>Export</span>
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input id="checkAll" type="checkbox">
                                        <label for="checkAll" class="m-b-0"></label>
                                    </div>
                                </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of Birth</th>
                                <th>Email</th>
                                <th>LGA</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Marital Status</th>
                                <th>Work Status</th>
                                <th>NIN</th>

                                <th></th>
                            </tr>
                        </thead>

                     @foreach ($listproducts as $listproduct )

                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="check-item-1" type="checkbox">
                                        <label for="check-item-1" class="m-b-0"></label>
                                    </div>
                                </td>
                                <td>
                                    {{$listproduct->fname}}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6 class="m-b-0">{{$listproduct->lname}}</h6>
                                    </div>
                                </td>
                                <td>{{$listproduct->day}}-{{$listproduct->month}}-{{$listproduct->year}}</td>
                                <td>{{$listproduct->email}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>{{$listproduct->lga}}</div>
                                    </div>
                                </td>
                                <td>{{$listproduct->address}}</td>
                                <td>{{$listproduct->phone_number}}</td>
                                <td>{{$listproduct->gender}}</td>
                                <td>{{$listproduct->status}}</td>
                                <td>{{$listproduct->work}}</td>
                                <td>{{$listproduct->nin}}</td>







                            </tr>
                        </tbody>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->

@include('admin.footer')
