<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Modal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background-color: #294165;">
        
        <a class="navbar-brand ps-3" href="/home">
            <img src="{{asset('logoImages/L1.png')}}"
                style="width:140px;height:50px;margin-right:100px;padding-left:5px" />
        </a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar-->
        <div class="ms-auto">
            <!-- User Dropdown -->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw text-white"></i> {{ Auth::guard('web')->user()->first_name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li>
                            <a type="button" class="dropdown-item" data-toggle="modal"
                                data-target="#exampleModalCenter"> <i
                                    class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a>
                        </li>


                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>

        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Personal Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <!-- <img class="img-fluid rounded-circle w-25 h-25 my-3"
                            src="{{ Auth::guard('web')->user()->profile_pic }}"> -->
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ Auth::guard('web')->user()->first_name }}
                                            {{ Auth::guard('web')->user()->last_name }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::guard('web')->user()->email }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <span>0</span>{{ Auth::guard('web')->user()->phone_number }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::guard('web')->user()->address }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Roles</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @foreach (Auth::guard('web')->user()->roles as $role)

                                        <span class="">{{ $role->name }} , </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <div class="d-flex justify-content-end align-items-center ">
                        <a href="change-password" class="btn text-white" style="background-color: #294165;">Change Password </a>
                    </div>
                    <div class="d-flex justify-content-end align-items-center ">
                        <a href="update-profile" class="btn text-white" style="background-color: #294165;">Update Profile </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#exampleModalCenter').on('shown.bs.modal', function() {
            // Modal is shown
        });
    });
    </script>
</body>

</html>