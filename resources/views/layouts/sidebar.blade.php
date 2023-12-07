<aside class="sidebar bg-light">
    <div class="tab-content h-100" role="tablist">
        <!-- Create -->
        @include('layouts.group')

        <!-- Friends -->
        <div class="tab-pane fade h-100" id="tab-content-friends" role="tabpanel">
            <div class="d-flex flex-column h-100">
                <div class="hide-scrollbar">
                    <div class="container py-8">

                        <!-- Title -->
                        <div class="mb-8">
                            <h2 class="fw-bold m-0">Friends</h2>
                        </div>

                        <!-- Search -->
                        <div class="mb-6">
                            <form action="#">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="icon icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control form-control-lg ps-0"
                                           placeholder="Search messages or users"
                                           aria-label="Search for messages or users...">
                                </div>
                            </form>

                            <!-- Invite button -->
                            <div class="mt-5">
                                <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center"
                                   data-bs-toggle="modal" data-bs-target="#modal-invite">
                                    Find Friends

                                    <span class="icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-user-plus"><path
                                                            d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle
                                                            cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20"
                                                                                                 y2="14"></line><line
                                                            x1="23" y1="11" x2="17" y2="11"></line></svg>
                                                </span>
                                </a>
                            </div>
                        </div>

                        <!-- List -->
                        <div class="card-list">
                            <div class="my-5">
                                <small class="text-uppercase text-muted">B</small>
                            </div>

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar ">

                                                <img class="avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="">


                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Bill Marrow</a></h5>
                                            <p>last seen 3 days ago</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card -->

                            <div class="my-5">
                                <small class="text-uppercase text-muted">D</small>
                            </div>

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar ">

                                                <img class="avatar-img" src="{{ asset('assets/img/avatars/5.jpg') }}" alt="">


                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Damian Binder</a></h5>
                                            <p>last seen within a week</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card --><!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar avatar-online">


                                                <span class="avatar-text">D</span>

                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Don Knight</a></h5>
                                            <p>online</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card -->

                            <div class="my-5">
                                <small class="text-uppercase text-muted">E</small>
                            </div>

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar avatar-online">

                                                <img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="">


                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Elise Dennis</a></h5>
                                            <p>online</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card -->

                            <div class="my-5">
                                <small class="text-uppercase text-muted">M</small>
                            </div>

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar ">


                                                <span class="avatar-text">M</span>

                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Marshall Wallaker</a></h5>
                                            <p>last seen within a month</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card --><!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar ">

                                                <img class="avatar-img" src="{{ asset('assets/img/avatars/11.jpg') }}" alt="">


                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Mila White</a></h5>
                                            <p>last seen a long time ago</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card -->

                            <div class="my-5">
                                <small class="text-uppercase text-muted">O</small>
                            </div>

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar avatar-online">


                                                <span class="avatar-text">O</span>

                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Ollie Chandler</a></h5>
                                            <p>online</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card -->

                            <div class="my-5">
                                <small class="text-uppercase text-muted">W</small>
                            </div>

                            <!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar ">

                                                <img class="avatar-img" src="{{ asset('assets/img/avatars/4.jpg') }}" alt="">


                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">Warren White</a></h5>
                                            <p>last seen recently</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card --><!-- Card -->
                            <div class="card border-0">
                                <div class="card-body">

                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <a href="#" class="avatar avatar-online">

                                                <img class="avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="">


                                            </a>
                                        </div>

                                        <div class="col">
                                            <h5><a href="#">William Wright</a></h5>
                                            <p>online</p>
                                        </div>

                                        <div class="col-auto">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round"
                                                         stroke-linejoin="round"
                                                         class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">New message</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit contact</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">Block user</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- Card -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Chats -->
        <div class="tab-pane fade h-100 show active" id="tab-content-chats" role="tabpanel">
            <div class="d-flex flex-column h-100 position-relative">
                <div class="hide-scrollbar">

                    <div class="container py-8">
                        <!-- Title -->
                        <div class="mb-8">
                            <h2 class="fw-bold m-0">Chats</h2>
                        </div>

                        <!-- Search -->
                        <div class="mb-6">
                            <form action="#">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="icon icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control form-control-lg ps-0"
                                           placeholder="Search messages or users"
                                           aria-label="Search for messages or users...">
                                </div>
                            </form>
                        </div>

                        <!-- Chats -->
                        <div class="card-list">
                            @forelse($rooms as $room)
                                <!-- Card -->
                                <a href="{{route('rooms.show',$room->id )}}" class="card border-0 text-reset">
                                    <div class="card-body">
                                        <div class="row gx-5">
                                            <div class="col-auto">
                                                <div class="avatar avatar-online">
                                                    <span class="avatar-text bg-primary">{{substr($room->name, 0, 1)}}</span>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="d-flex align-items-center mb-3">
                                                    <h5 class="me-auto mb-0">{{$room->name}}</h5>
                                                    <span class="text-muted extra-small ms-2">08:35 PM</span>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <div class="line-clamp me-auto">
                                                        {{$room->description}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-body -->
                                </a>
                            @empty
                                <a href="#" class="card border-0 text-reset">
                                    <div class="card-body">
                                        <div class="row gx-5">
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <svg class="avatar-img placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                        <title>Placeholder</title>
                                                        <rect width="100%" height="100%" fill="#868e96"></rect>
                                                    </svg>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="d-flex align-items-center mb-3">
                                                    <h5 class="placeholder-glow w-100 mb-0">
                                                        <span class="placeholder col-5"></span>
                                                    </h5>
                                                </div>

                                                <div class="placeholder-glow">
                                                    <span class="placeholder col-12"></span>
                                                    <span class="placeholder col-8"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-body -->
                                </a>
                            @endforelse
                            <!-- Card -->
                        </div>
                        <!-- Chats -->
                    </div>

                </div>
            </div>
        </div>

        <!-- Support -->
        <div class="tab-pane fade h-100" id="tab-content-support" role="tabpanel">
            <div class="d-flex flex-column h-100">
                <div class="hide-scrollbar">
                    <div class="container py-8">

                        <!-- Title -->
                        <div class="mb-8">
                            <h2 class="fw-bold m-0">Support</h2>
                        </div>

                        <!-- Search -->
                        <div class="mb-6">
                            <form action="#">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="icon icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control form-control-lg ps-0"
                                           placeholder="Search messages or users"
                                           aria-label="Search for messages or users...">
                                </div>
                            </form>
                        </div>

                        <!-- Docs -->
                        <div class="card border-0">
                            <div class="card-body">

                                <div class="row align-items-center gx-5">
                                    <div class="col-auto text-primary">
                                        <svg version="1.1" width="46px" height="46px" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 46 46" enable-background="new 0 0 46 46"
                                             xml:space="preserve">
                                                        <polygon opacity="0.7" points="45,11 36,11 35.5,1 "/>
                                            <polygon points="35.5,1 25.4,14.1 39,21 "/>
                                            <polygon opacity="0.4" points="17,9.8 39,21 17,26 "/>
                                            <polygon opacity="0.7" points="2,12 17,26 17,9.8 "/>
                                            <polygon opacity="0.7" points="17,26 39,21 28,36 "/>
                                            <polygon points="28,36 4.5,44 17,26 "/>
                                            <polygon points="17,26 1,26 10.8,20.1 "/>
                                                    </svg>

                                    </div>

                                    <div class="col">
                                        <h4 class="mb-1">Documentation</h4>
                                        <p>Setup and build tools</p>
                                    </div>

                                    <div class="col-auto">
                                        <a href="docs/index.html"
                                           class="btn btn-sm btn-icon btn-primary rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-chevron-right">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Docs -->

                        <!-- Account Pages -->
                        <div class="card-list mt-8">
                            <div class="d-flex align-items-center mb-4 px-6">
                                <small class="text-muted me-auto">Pages</small>
                            </div>

                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center gx-0">
                                        <div class="col">
                                            <h4 class="mb-1">Sign In</h4>
                                            <p>Sign in Page</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="signin.html"
                                               class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-chevron-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center gx-0">
                                        <div class="col">
                                            <h4 class="mb-1">Sign Up</h4>
                                            <p>Sign Up Page</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="signup.html"
                                               class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-chevron-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center gx-0">
                                        <div class="col">
                                            <h4 class="mb-1">Password Reset</h4>
                                            <p>Password Reset Page</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="password-reset.html"
                                               class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-chevron-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center gx-0">
                                        <div class="col">
                                            <h4 class="mb-1">Lock screen</h4>
                                            <p>Lock screen Page</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="lockscreen.html"
                                               class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-chevron-right">
                                                    <polyline points="9 18 15 12 9 6"></polyline>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Account Pages -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings -->
        <div class="tab-pane fade h-100" id="tab-content-settings" role="tabpanel">
            <div class="d-flex flex-column h-100">
                <div class="hide-scrollbar">
                    <div class="container py-8">

                        <!-- Title -->
                        <div class="mb-8">
                            <h2 class="fw-bold m-0">Settings</h2>
                        </div>

                        <!-- Search -->
                        <div class="mb-6">
                            <form action="#">
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <div class="icon icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control form-control-lg ps-0"
                                           placeholder="Search messages or users"
                                           aria-label="Search for messages or users...">
                                </div>
                            </form>
                        </div>

                        <!-- Profile -->
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="row align-items-center gx-5">
                                    <div class="col-auto">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/avatars/1.jpg') }}" alt="#" class="avatar-img">

                                            <div
                                                class="badge badge-circle bg-secondary border-outline position-absolute bottom-0 end-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-image">
                                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                    <polyline points="21 15 16 10 5 21"></polyline>
                                                </svg>
                                            </div>
                                            <input id="upload-profile-photo" class="d-none" type="file">
                                            <label class="stretched-label mb-0" for="upload-profile-photo"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h5>{{auth()->user()->name}}</h5>
                                        <p>{{auth()->user()->email}}</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="text-muted">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-log-out">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profile -->

                        <!-- Account -->
                        <div class="mt-8">
                            <div class="d-flex align-items-center mb-4 px-6">
                                <small class="text-muted me-auto">Account</small>
                            </div>

                            <div class="card border-0">
                                <div class="card-body py-2">
                                    <!-- Accordion -->
                                    <div class="accordion accordion-flush" id="accordion-profile">
                                        <div class="accordion-item">
                                            <div class="accordion-header" id="accordion-profile-1">
                                                <a href="#" class="accordion-button text-reset collapsed"
                                                   data-bs-toggle="collapse"
                                                   data-bs-target="#accordion-profile-body-1" aria-expanded="false"
                                                   aria-controls="accordion-profile-body-1">
                                                    <div>
                                                        <h5>Profile settings</h5>
                                                        <p>Change your profile settings</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div id="accordion-profile-body-1" class="accordion-collapse collapse"
                                                 aria-labelledby="accordion-profile-1"
                                                 data-parent="#accordion-profile">
                                                <div class="accordion-body">
                                                    <div class="form-floating mb-6">
                                                        <input type="text" class="form-control" id="profile-name"
                                                               placeholder="Name" value="{{auth()->user()->name}}">
                                                        <label for="profile-name">Name</label>
                                                    </div>

                                                    <div class="form-floating mb-6">
                                                        <input type="email" class="form-control" id="profile-email"
                                                               placeholder="Email address" value="{{auth()->user()->email}}">
                                                        <label for="profile-email">Email</label>
                                                    </div>

                                                    <button type="button"
                                                            class="btn btn-block btn-lg btn-primary w-100">Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Switch -->
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5>Appearance</h5>
                                                        <p>Choose light or dark theme</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a class="switcher-btn text-reset" href="#!" title="Themes">
                                                            <div
                                                                class="switcher-icon switcher-icon-dark icon icon-lg d-none"
                                                                data-theme-mode="dark">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-moon">
                                                                    <path
                                                                        d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="switcher-icon switcher-icon-light icon icon-lg d-none"
                                                                data-theme-mode="light">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-sun">
                                                                    <circle cx="12" cy="12" r="5"></circle>
                                                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                                                    <line x1="4.22" y1="4.22" x2="5.64"
                                                                          y2="5.64"></line>
                                                                    <line x1="18.36" y1="18.36" x2="19.78"
                                                                          y2="19.78"></line>
                                                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                                                    <line x1="4.22" y1="19.78" x2="5.64"
                                                                          y2="18.36"></line>
                                                                    <line x1="18.36" y1="5.64" x2="19.78"
                                                                          y2="4.22"></line>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Account -->

                        <!-- Devices -->
                        <div class="mt-8">
                            <div class="d-flex align-items-center my-4 px-6">
                                <small class="text-muted me-auto">Devices</small>

                                <div class="flex align-items-center text-muted">
                                    <a href="#" class="text-muted small">End all sessions</a>

                                    <div class="icon icon-xs">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="card border-0">
                                <div class="card-body py-3">

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5>Windows ⋅ USA, Houston</h5>
                                                    <p>Today at 2:48 pm ⋅ Browser: Chrome</p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-primary extra-small">active</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5>iPhone ⋅ USA, Houston</h5>
                                                    <p>Yesterday at 2:48 pm ⋅ Browser: Chrome</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <!-- Devices -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
