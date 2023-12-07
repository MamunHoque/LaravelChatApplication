@extends('layouts.app')

@section('content')
    <!-- Chat -->
    <main class="main is-visible" data-dropzone-area="" id="app">
        <example-component></example-component>
        <div class="container h-100">

            <div class="d-flex flex-column h-100 position-relative">
                <!-- Chat: Header -->
                <div class="chat-header border-bottom py-4 py-lg-7">
                    <div class="row align-items-center">

                        <!-- Mobile: close -->
                        <div class="col-2 d-xl-none">
                            <a class="icon icon-lg text-muted" href="#" data-toggle-chat="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-left">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </a>
                        </div>
                        <!-- Mobile: close -->

                        <!-- Content -->
                        <div class="col-8 col-xl-12">
                            <div class="row align-items-center text-center text-xl-start">
                                <!-- Title -->
                                <div class="col-12 col-xl-6">
                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <div class="avatar d-none d-xl-inline-block">
                                                <span
                                                    class="avatar-text bg-primary">{{substr($room->name, 0, 1)}}</span>
                                            </div>
                                        </div>

                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate">{{$room->name}}</h5>
                                            <p class="text-truncate">{{$room->users()->count()}} members</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Title -->

                                <!-- Toolbar -->
                                <div class="col-xl-6 d-none d-xl-block">
                                    <div class="row align-items-center justify-content-end gx-6">
                                        <div class="col-auto">
                                            <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas"
                                               data-bs-target="#offcanvas-more-group"
                                               aria-controls="offcanvas-more-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar-group">
                                                @foreach($room->users as $user)
                                                    <a href="#" class="avatar avatar-sm" data-bs-toggle="modal"
                                                       data-bs-target="#modal-user-profile">
                                                        <span
                                                            class="avatar-text bg-primary">{{substr($user->name, 0, 1)}}</span>
                                                    </a>
                                                @endforeach

                                                <a href="#" class="avatar avatar-sm" data-bs-toggle="offcanvas"
                                                   data-bs-target="#offcanvas-add-members"
                                                   aria-controls="offcanvas-add-members">
                                                        <span class="avatar-text" data-bs-toggle="tooltip"
                                                              data-bs-placement="bottom"
                                                              title="<strong>Add People</strong><p>Invite friends to group</p>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-plus"><line x1="12" y1="5"
                                                                                                    x2="12"
                                                                                                    y2="19"></line><line
                                                                    x1="5" y1="12" x2="19" y2="12"></line>
                                                            </svg>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Toolbar -->
                            </div>
                        </div>
                        <!-- Content -->

                        <!-- Mobile: more -->
                        <div class="col-2 d-xl-none text-end">
                            <div class="dropdown">
                                <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <div class="icon icon-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-more-vertical">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="12" cy="5" r="1"></circle>
                                            <circle cx="12" cy="19" r="1"></circle>
                                        </svg>
                                    </div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
                                           data-bs-target="#offcanvas-add-members"
                                           aria-controls="offcanvas-add-members">Add members</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
                                           data-bs-target="#offcanvas-more-group" aria-controls="offcanvas-more-group">More</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile: more -->

                    </div>
                </div>
                <!-- Chat: Header -->

                <!-- Chat: Content -->
                <div class="chat-body hide-scrollbar flex-1 h-100">
                    <div class="chat-body-inner">
                        <div class="py-6 py-lg-12">
                            <!-- Message -->
                            <div class="message message-out">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile"
                                   class="avatar avatar-responsive">
                                     <span
                                         class="avatar-text bg-primary">{{substr($room->name, 0, 1)}}</span>
                                </a>

                                <div class="message-inner">
                                    <!-- Single Message -->
                                    <div class="message-body">
                                        <div class="message-content">
                                            <div class="message-text">
                                                <p>Hey, Marshall! How are you? Can you please change the color theme of
                                                    the website to pink and purple?</p>
                                            </div>

                                            <!-- Dropdown -->
                                            <div class="message-action">
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
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center text-danger"
                                                               href="#">
                                                                <span class="me-auto">Delete</span>
                                                                <div class="icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-trash-2">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Message -->

                                    <div class="message-footer">
                                        <span class="extra-small text-muted">08:45 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chat: Content -->

                <!-- Chat: Footer -->
                <div class="chat-footer pb-3 pb-lg-7 position-absolute bottom-0 start-0">
                    <!-- Chat: Files -->
                    <div class="dz-preview bg-dark" id="dz-preview-row" data-horizontal-scroll="">
                    </div>
                    <!-- Chat: Files -->

                    <!-- Chat: Form -->
                    <form class="chat-form rounded-pill bg-dark" data-emoji-form="">
                        <div class="row align-items-center gx-0">
                            <div class="col-auto">
                                <a href="#" class="btn btn-icon btn-link text-body rounded-circle" id="dz-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-paperclip">
                                        <path
                                            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="col">
                                <div class="input-group">
                                    <textarea class="form-control px-0" placeholder="Type your message..." rows="1"
                                              data-emoji-input="" data-autosize="true"></textarea>

                                    <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
                                                <span class="icon icon-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-smile"><circle cx="12" cy="12"
                                                                                               r="10"></circle><path
                                                            d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9"
                                                                                                     x2="9.01"
                                                                                                     y2="9"></line><line
                                                            x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                                </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-auto">
                                <button class="btn btn-icon btn-primary rounded-circle ms-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-send">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Chat: Form -->
                </div>
                <!-- Chat: Footer -->
            </div>

        </div>
    </main>
    <!-- Chat -->

    <!-- Chat: Info -->
    <div class="offcanvas offcanvas-end offcanvas-aside" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
         id="offcanvas-more-group">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header py-4 py-lg-7 border-bottom">
            <a class="icon icon-lg text-muted" href="#" data-bs-dismiss="offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </a>

            <div class="visibility-xl-invisible overflow-hidden text-center">
                <h5 class="text-truncate">{{$room->name}}</h5>
                <p class="text-truncate">{{$room->users()->count()}} members</p>
            </div>

            <!-- Dropdown -->
            <div class="dropdown">
                <a class="icon icon-lg text-muted" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </a>

                <ul class="dropdown-menu">
                    @if($room->user_id == auth()->user()->id)
                        <li>
                            <a href="#" data-host="{{route('home')}}"
                               data-endpoint="{{route('webapi.rooms.destroy',$room->id)}}" class="dropdown-item d-flex
                               align-items-center text-danger delete-button"> Delete
                                <div class="icon ms-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- Offcanvas Header -->

        <!-- Offcanvas Body -->
        <div class="offcanvas-body hide-scrollbar">
            <!-- Avatar -->
            <div class="text-center py-10">
                <div class="row gy-6">
                    <div class="col-12">
                        <div class="avatar avatar-xl mx-auto">
                            <span class="avatar-text bg-primary">{{substr($room->name, 0, 1)}}</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <h4>{{$room->name}}</h4>
                        <p>{{$room->description}}</p>
                    </div>
                </div>
            </div>
            <!-- Avatar -->

            <!-- Tabs -->
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#offcanvas-group-tab-members" role="tab"
                       aria-controls="offcanvas-group-tab-members" aria-selected="true">
                        People
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#offcanvas-group-tab-media" role="tab"
                       aria-controls="offcanvas-group-tab-media" aria-selected="true">
                        Media
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#offcanvas-group-tab-files" role="tab"
                       aria-controls="offcanvas-group-tab-files" aria-selected="false">
                        Files
                    </a>
                </li>
            </ul>
            <!-- Tabs -->

            <!-- Tabs: Content -->
            <div class="tab-content py-2" role="tablist">
                <!-- Members -->
                <div class="tab-pane fade show active" id="offcanvas-group-tab-members" role="tabpanel">
                    <ul class="list-group list-group-flush">
                        @foreach($room->users as $user)
                            <li class="list-group-item">
                                <div class="row align-items-center gx-5">
                                    <!-- Avatar -->
                                    <div class="col-auto">
                                        <a href="#" class="avatar avatar-online">
                                            <img class="avatar-img" src="{{ asset('assets/img/avatars/1.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                    <!-- Avatar -->

                                    <!-- Text -->
                                    <div class="col">
                                        <h5><a href="#">{{$user->name}}</a></h5>
                                        <p>online</p>
                                    </div>
                                    <!-- Text -->

                                    @if($room->user_id == $user->id)
                                        <!-- Owner -->
                                        <div class="col-auto">
                                            <span class="extra-small text-primary">owner</span>
                                        </div>
                                        <!-- Owner -->
                                    @endif

                                    <!-- Dropdown -->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                               aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Promote
                                                        <div class="icon ms-auto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round"
                                                                 class="feather feather-trending-up">
                                                                <polyline
                                                                    points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                                                <polyline points="17 6 23 6 23 12"></polyline>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Restrict
                                                        <div class="icon ms-auto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round"
                                                                 class="feather feather-trending-down">
                                                                <polyline
                                                                    points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                                                <polyline points="17 18 23 18 23 12"></polyline>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center text-danger"
                                                       href="#">
                                                        Delete
                                                        <div class="icon ms-auto">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round"
                                                                 class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Dropdown -->
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Members -->

                <!-- Media -->
                <div class="tab-pane fade" id="offcanvas-group-tab-media" role="tabpanel">
                    <div class="row row-cols-3 g-3 py-6">
                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-1.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/1.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-2.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/2.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-3.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/3.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-1.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/4.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-2.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/5.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-3.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/6.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-1.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/7.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-2.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/8.jpg') }}" alt="">
                            </a>
                        </div>

                        <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview"
                               data-theme-img-url="{{ asset('assets/img/chat/media-3.jpg') }}">
                                <img class="img-fluid rounded" src="{{ asset('assets/img/chat/9.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Media -->

                <!-- Files -->
                <div class="tab-pane fade" id="offcanvas-group-tab-files" role="tabpanel">
                    <ul class="list-group list-group-flush">

                        <!-- Item -->
                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <!-- Icons -->
                                <div class="col-auto">
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm">
                                            <img src="{{ asset('assets/img/avatars/6.jpg') }}" class="avatar-img"
                                                 alt="#">
                                        </a>

                                        <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-file-text"><path
                                                                d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline
                                                                points="14 2 14 8 20 8"></polyline><line x1="16" y1="13"
                                                                                                         x2="8"
                                                                                                         y2="13"></line><line
                                                                x1="16" y1="17" x2="8" y2="17"></line><polyline
                                                                points="10 9 9 9 8 9"></polyline></svg>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Icons -->

                                <!-- Text -->
                                <div class="col overflow-hidden">
                                    <h5 class="text-truncate">
                                        <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                    </h5>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">79.2 KB</small>
                                        </li>

                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">txt</small>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Text -->

                                <!-- Dropdown -->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-download">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                    <span class="me-auto">Delete</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Dropdown -->
                            </div>
                        </li>

                        <!-- Item -->
                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">

                                <!-- Icons-->
                                <div class="col-auto">
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm">
                                            <img class="avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}"
                                                 alt="#">
                                        </a>

                                        <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-film"><rect
                                                                x="2" y="2" width="20" height="20" rx="2.18"
                                                                ry="2.18"></rect><line x1="7" y1="2" x2="7"
                                                                                       y2="22"></line><line
                                                                x1="17" y1="2" x2="17" y2="22"></line><line x1="2"
                                                                                                            y1="12"
                                                                                                            x2="22"
                                                                                                            y2="12"></line><line
                                                                x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17"
                                                                                                         x2="7"
                                                                                                         y2="17"></line><line
                                                                x1="17" y1="17" x2="22" y2="17"></line><line x1="17"
                                                                                                             y1="7"
                                                                                                             x2="22"
                                                                                                             y2="7"></line></svg>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Icons -->

                                <!-- Text -->
                                <div class="col overflow-hidden">
                                    <h5 class="text-truncate">
                                        <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                    </h5>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">54.2 KB</small>
                                        </li>

                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">mp4</small>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Text -->

                                <!-- Dropdown -->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-download">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                    <span class="me-auto">Delete</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Dropdown -->
                            </div>
                        </li>

                        <!-- Item -->
                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">

                                <!-- Icons -->
                                <div class="col-auto">
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm">
                                            <img class="avatar-img" src="{{ asset('assets/img/avatars/5.jpg') }}"
                                                 alt="#">
                                        </a>

                                        <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-file-text"><path
                                                                d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline
                                                                points="14 2 14 8 20 8"></polyline><line x1="16" y1="13"
                                                                                                         x2="8"
                                                                                                         y2="13"></line><line
                                                                x1="16" y1="17" x2="8" y2="17"></line><polyline
                                                                points="10 9 9 9 8 9"></polyline></svg>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Icons -->

                                <!-- Text -->
                                <div class="col overflow-hidden">
                                    <h5 class="text-truncate">
                                        <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                    </h5>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">64.8 KB</small>
                                        </li>

                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">jpg</small>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Text -->

                                <!-- Dropdown -->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-download">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                    <span class="me-auto">Delete</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Dropdown -->
                            </div>
                        </li>

                        <!-- Item -->
                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">

                                <!-- Icons-->
                                <div class="col-auto">
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm">
                                            <img class="avatar-img" src="{{ asset('assets/img/avatars/11.jpg') }}"
                                                 alt="#">
                                        </a>

                                        <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-film"><rect
                                                                x="2" y="2" width="20" height="20" rx="2.18"
                                                                ry="2.18"></rect><line x1="7" y1="2" x2="7"
                                                                                       y2="22"></line><line
                                                                x1="17" y1="2" x2="17" y2="22"></line><line x1="2"
                                                                                                            y1="12"
                                                                                                            x2="22"
                                                                                                            y2="12"></line><line
                                                                x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17"
                                                                                                         x2="7"
                                                                                                         y2="17"></line><line
                                                                x1="17" y1="17" x2="22" y2="17"></line><line x1="17"
                                                                                                             y1="7"
                                                                                                             x2="22"
                                                                                                             y2="7"></line></svg>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Icons-->

                                <!-- Text -->
                                <div class="col overflow-hidden">
                                    <h5 class="text-truncate">
                                        <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                    </h5>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">80.8 KB</small>
                                        </li>

                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">mp4</small>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Text -->

                                <!-- Dropdown -->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-download">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                    <span class="me-auto">Delete</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Dropdown -->
                            </div>
                        </li>

                        <!-- Item -->
                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">

                                <!-- Icons-->
                                <div class="col-auto">
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm">
                                            <img class="avatar-img" src="{{ asset('assets/img/avatars/3.jpg') }}"
                                                 alt="#">
                                        </a>

                                        <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-image"><rect
                                                                x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle
                                                                cx="8.5" cy="8.5" r="1.5"></circle><polyline
                                                                points="21 15 16 10 5 21"></polyline></svg>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Icons-->

                                <!-- Text -->
                                <div class="col overflow-hidden">
                                    <h5 class="text-truncate">
                                        <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                    </h5>
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">100 KB</small>
                                        </li>

                                        <li class="list-inline-item">
                                            <small class="text-uppercase text-muted">jpg</small>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Text -->

                                <!-- Dropdown -->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Download
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-download">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <polyline points="7 10 12 15 17 10"></polyline>
                                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    Share
                                                    <div class="icon ms-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-share-2">
                                                            <circle cx="18" cy="5" r="3"></circle>
                                                            <circle cx="6" cy="12" r="3"></circle>
                                                            <circle cx="18" cy="19" r="3"></circle>
                                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                    <span class="me-auto">Delete</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Dropdown -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Files -->
            </div>
            <!-- Tabs: Content -->
        </div>
        <!-- Offcanvas Body -->
    </div>

    <!-- Chat: Add member -->
    <div class="offcanvas offcanvas-end offcanvas-aside" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
         id="offcanvas-add-members">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header py-4 py-lg-7 border-bottom ">
            <a class="icon icon-lg text-muted" href="#" data-bs-dismiss="offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </a>

            <div class="visibility-xl-invisible overflow-hidden text-center">
                <h5 class="text-truncate">Members</h5>
                <p class="text-truncate">Add new members</p>
            </div>

            <a class="icon icon-lg text-muted" data-bs-toggle="collapse" href="#search-members" role="button"
               aria-expanded="false" aria-controls="search-members" onclick="event.preventDefault();">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-filter">
                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                </svg>
            </a>
        </div>
        <!-- Offcanvas Header -->

        <!-- Offcanvas Body -->
        <div class="offcanvas-body hide-scrollbar py-0">

            <!-- Search -->
            <div class="collapse" id="search-members">
                <div class="border-bottom py-6">

                    <form action="#">
                        <div class="input-group">
                            <div class="input-group-text" id="search-user">
                                <div class="icon icon-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
                            </div>

                            <input type="text" class="form-control form-control-lg ps-0"
                                   placeholder="User name or phone" aria-label="User name or phone"
                                   aria-describedby="search-user">
                        </div>
                    </form>

                </div>
            </div>
            <!-- Search -->

            <!-- Members -->
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <small class="text-uppercase text-muted">B</small>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar ">

                                <img class="avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="">


                            </div>
                        </div>
                        <div class="col">
                            <h5>Bill Marrow</h5>
                            <p>last seen 3 days ago</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-1">
                                <label class="form-check-label" for="id-add-user-user-1"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-1"></label>
                </li>

                <li class="list-group-item">
                    <small class="text-uppercase text-muted">D</small>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar ">

                                <img class="avatar-img" src="{{ asset('assets/img/avatars/5.jpg') }}" alt="">


                            </div>
                        </div>
                        <div class="col">
                            <h5>Damian Binder</h5>
                            <p>last seen within a week</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-2">
                                <label class="form-check-label" for="id-add-user-user-2"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-2"></label>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar avatar-online">


                                <span class="avatar-text">D</span>

                            </div>
                        </div>
                        <div class="col">
                            <h5>Don Knight</h5>
                            <p>online</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-3">
                                <label class="form-check-label" for="id-add-user-user-3"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-3"></label>
                </li>

                <li class="list-group-item">
                    <small class="text-uppercase text-muted">E</small>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar avatar-online">

                                <img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="">


                            </div>
                        </div>
                        <div class="col">
                            <h5>Elise Dennis</h5>
                            <p>online</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-4">
                                <label class="form-check-label" for="id-add-user-user-4"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-4"></label>
                </li>

                <li class="list-group-item">
                    <small class="text-uppercase text-muted">M</small>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar ">

                                <img class="avatar-img" src="{{ asset('assets/img/avatars/11.jpg') }}" alt="">


                            </div>
                        </div>
                        <div class="col">
                            <h5>Mila White</h5>
                            <p>last seen a long time ago</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-5">
                                <label class="form-check-label" for="id-add-user-user-5"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-5"></label>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar avatar-online">


                                <span class="avatar-text">M</span>

                            </div>
                        </div>
                        <div class="col">
                            <h5>Michael Fuller</h5>
                            <p>online</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-6">
                                <label class="form-check-label" for="id-add-user-user-6"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-6"></label>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar ">


                                <span class="avatar-text">M</span>

                            </div>
                        </div>
                        <div class="col">
                            <h5>Marshall Wallaker</h5>
                            <p>last seen within a month</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-7">
                                <label class="form-check-label" for="id-add-user-user-7"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-7"></label>
                </li>

                <li class="list-group-item">
                    <small class="text-uppercase text-muted">O</small>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar avatar-online">


                                <span class="avatar-text">O</span>

                            </div>
                        </div>
                        <div class="col">
                            <h5>Ollie Chandler</h5>
                            <p>online</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-8">
                                <label class="form-check-label" for="id-add-user-user-8"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-8"></label>
                </li>

                <li class="list-group-item">
                    <small class="text-uppercase text-muted">W</small>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar ">

                                <img class="avatar-img" src="{{ asset('assets/img/avatars/4.jpg') }}" alt="">


                            </div>
                        </div>
                        <div class="col">
                            <h5>Warren White</h5>
                            <p>last seen recently</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-9">
                                <label class="form-check-label" for="id-add-user-user-9"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-9"></label>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar avatar-online">

                                <img class="avatar-img" src="{{ asset('assets/img/avatars/7.jpg') }}" alt="">


                            </div>
                        </div>
                        <div class="col">
                            <h5>William Wright</h5>
                            <p>online</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-10">
                                <label class="form-check-label" for="id-add-user-user-10"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-10"></label>
                </li>

                <li class="list-group-item">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar avatar-online">


                                <span class="avatar-text">W</span>

                            </div>
                        </div>
                        <div class="col">
                            <h5>Winton Wilkinson</h5>
                            <p>online</p>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-11">
                                <label class="form-check-label" for="id-add-user-user-11"></label>
                            </div>
                        </div>
                    </div>
                    <label class="stretched-label" for="id-add-user-user-11"></label>
                </li>
            </ul>
            <!-- Members -->
        </div>
        <!-- Offcanvas Body -->

        <!-- Offcanvas Footer -->
        <div class="offcanvas-footer border-top py-4 py-lg-7">
            <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center">
                Add members

                <span class="icon ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right"><polyline
                                    points="9 18 15 12 9 6"></polyline></svg>
                        </span>
            </a>
        </div>
        <!-- Offcanvas Footer -->
    </div>

@endsection
