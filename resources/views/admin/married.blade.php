@include('admin.header')
@include('admin.navbar')



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
                            {{-- <div class="m-b-10">
                                <select class="custom-select" style="min-width: 180px;">
                                    <option selected>Status</option>
                                    <option value="all">All</option>
                                    <option value="approved">Approved</option>
                                    <option value="pending">Pending</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div> --}}
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

                     @foreach ($data as $data )

                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="check-item-1" type="checkbox">
                                        <label for="check-item-1" class="m-b-0"></label>
                                    </div>
                                </td>
                                <td>
                                    {{$data->fname}}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <h6 class="m-b-0">{{$data->lname}}</h6>
                                    </div>
                                </td>
                                <td>{{$data->day}}-{{$data->month}}-{{$data->year}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>{{$data->lga}}</div>
                                    </div>
                                </td>
                                <td>{{$data->address}}</td>
                                <td>{{$data->phone_number}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->work}}</td>
                                <td>{{$data->nin}}</td>







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
