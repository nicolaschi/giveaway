

            <!-- Side Nav START -->
            <div class="side-nav" >
                <div class="side-nav-inner" style="margin-top:40px;">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="{{ url('dashboard') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user-add"></i>
                                </span>
                                <span class="title">Administrators</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/users') }}">Users</a>
                                </li>
                                <li>
                                    <a href="{{ url('/createuser') }}">Create Users</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-trophy"></i>
                                </span>
                                <span class="title">Campaign</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/createcampaign') }}">Create Campaign</a>
                                </li>
                                <li>
                                    <a href="{{ url('/campaign') }}">Add Beneficiaries</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">Campaign List</a>
                                </li>
                                <li>
                                    <a href="{{ url('/registeeredusers') }}">Registered Users</a>
                                </li>


                            </ul>
                        </li>
                </div>
            </div>
            <!-- Side Nav END -->
