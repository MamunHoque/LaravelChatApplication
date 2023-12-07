<div class="tab-pane fade h-100" id="tab-content-create-chat" role="tabpanel">
    <div class="d-flex flex-column h-100">
        <div class="hide-scrollbar">
            <div class="container py-8">

                <!-- Title -->
                <div class="mb-8">
                    <h2 class="fw-bold m-0">Create chat</h2>
                </div>

                <!-- header -->
                <div class="mb-6">
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#create-chat-info"
                               role="tab" aria-controls="create-chat-info" aria-selected="true">
                                Details
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#create-chat-members" role="tab"
                               aria-controls="create-chat-members" aria-selected="true">
                                People
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tabs content -->
                <div class="tab-content" role="tablist">
                    <div class="tab-pane fade show active" id="create-chat-info" role="tabpanel">
                        <div class="card border-0">
                            <div class="profile">
                                <div class="profile-img text-primary rounded-top">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                         viewBox="0 0 400 140.74">
                                        <defs>
                                            <style>.cls-2 {
                                                    fill: #fff;
                                                    opacity: 0.1;
                                                }</style>
                                        </defs>
                                        <g>
                                            <g>
                                                <path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"/>
                                                <path class="cls-2"
                                                      d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z"/>
                                                <path class="cls-2"
                                                      d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z"/>
                                                <circle class="cls-2" cx="94.5" cy="57.5" r="22.5"/>
                                                <path class="cls-2"
                                                      d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <div class="profile-body p-0">
                                    <div class="avatar avatar-lg">
                                                            <span class="avatar-text bg-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     class="feather feather-image"><rect x="3" y="3"
                                                                                                         width="18"
                                                                                                         height="18"
                                                                                                         rx="2"
                                                                                                         ry="2"></rect><circle
                                                                        cx="8.5" cy="8.5" r="1.5"></circle><polyline
                                                                        points="21 15 16 10 5 21"></polyline></svg>
                                                            </span>

                                        <div
                                            class="badge badge-lg badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                        </div>

                                        <input id="upload-chat-img" class="d-none" type="file">
                                        <label class="stretched-label mb-0" for="upload-chat-img"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form autocomplete="off">
                                    <div class="row gy-6">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="roomName"
                                                       placeholder="Enter a chat name">
                                                <label for="floatingInput">Enter group name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Description"
                                                                      id="roomDescription" rows="8"
                                                                      data-autosize="true"
                                                                      style="min-height: 100px;"></textarea>
                                                <label for="floatingTextarea">What's your purpose?</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-4 px-6">
                            <small class="text-muted me-auto">Enter chat name and add an optional
                                photo.</small>
                        </div>

                        <!-- Options -->
                        <div class="mt-8">
                            <div class="d-flex align-items-center mb-4 px-6">
                                <small class="text-muted me-auto">Options</small>
                            </div>

                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row gx-5">
                                        <div class="col-auto">
                                            <div class="btn btn-sm btn-icon btn-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                     stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-lock">
                                                    <rect x="3" y="11" width="18" height="11" rx="2"
                                                          ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5>Make Private</h5>
                                            <p>Can only be viewed by invites</p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="form-check form-switch ps-0">
                                                <input value="1" class="form-check-input" type="checkbox"
                                                       id="roomIsPublic" checked>
                                                <label class="form-check-label"
                                                       for="new-chat-options-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Members -->
                    <div class="tab-pane fade" id="create-chat-members" role="tabpanel">
                        <nav>
                            @foreach($users as $user)
                                <!-- Card -->
                                <div class="card border-0 mt-5">
                                    <div class="card-body">

                                        <div class="row align-items-center gx-5">
                                            <div class="col-auto">
                                                <div class="avatar ">

                                                    <img class="avatar-img"
                                                         src="{{ asset('assets/img/avatars/6.jpg') }}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h5>{{$user->name}}</h5>
                                                <p>last seen 3 days ago</p>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input name="users[]" class="form-check-input user-checkbox" type="checkbox" id="user-{{ $user->id }}" value="{{ $user->id }}">
                                                    <label class="form-check-label" for="id-member-1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="stretched-label" for="user-{{ $user->id }}"></label>
                                    </div>
                                </div>
                                <!-- Card -->
                            @endforeach
                        </nav>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>

        <!-- Button -->
        <div class="container mt-n4 mb-8 position-relative">
            <button class="btn btn-lg btn-primary w-100 d-flex align-items-center" type="submit" id="addRoom">
                Add Chat Room
                <span class="icon ms-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevron-right"><polyline
                            points="9 18 15 12 9 6"></polyline></svg>
                </span>
            </button>
        </div>
        <!-- Button -->
    </div>
</div>
