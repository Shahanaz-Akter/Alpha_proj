<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">Nowak Helme</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="{{url('/login')}}" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <p class="text-muted left-user-info">Admin Head</p>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="index.html#" class="text-muted left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="index.html#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">


                <li>
                    <a href="index.html">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end">9+</span>
                        <span> Home </span>
                    </a>
                </li>



                <li>
                    <a href="apps-calendar.html">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span> Website Editor </span>
                    </a>
                </li>



                <li>
                    <a href="index.html#Orders" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Orders </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="Orders">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">All Orders</a>
                            </li>
                            <li>
                                <a href="email-inbox.html">Section 1</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Section 2</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="index.html#Inventory" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Inventory </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="Inventory">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">All Inventory</a>
                            </li>
                            <li>
                                <a href="/add_product">Add Product</a>
                            </li>
                            <li>
                                <a href="email-inbox.html">Section 1</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Section 2</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="index.html#Campaigns" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Campaigns </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="Campaigns">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">All Campaigns</a>
                            </li>
                            <li>
                                <a href="email-inbox.html">Section 1</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Section 2</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="index.html#Marketing" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-outline"></i>
                        <span> Marketing </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="Marketing">
                        <ul class="nav-second-level">
                            <li>
                                <a href="task-kanban-board.html">Section 1</a>
                            </li>
                            <li>
                                <a href="task-details.html">Section 2</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li>
                    <a href="widgets.html">
                        <i class="mdi mdi-gift-outline"></i>
                        <span> CRM </span>
                    </a>
                </li>

                <li>
                    <a href="widgets.html">
                        <i class="mdi mdi-gift-outline"></i>
                        <span> Plugins </span>
                    </a>
                </li>

                <li>
                    <a href="index.html#sidebarExtendedui" data-bs-toggle="collapse">
                        <i class="mdi mdi-layers-outline"></i>
                        <span class="badge bg-info float-end">Hot</span>
                        <span> Delivery </span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/pagebuilderztrios/template_upload.php">
                        <i class="mdi mdi-gift-outline"></i>
                        <span> Template Upload </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/login')}}">
                        <i class="mdi mdi-gift-outline"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->