@extends('admin.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Chat</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Chat</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="d-lg-flex mb-4">
                <!-- left sidebar -->
                <div class="chat-leftsidebar card mb-0">
                    <div class="search-box card-body pb-0">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="mdi mdi-magnify search-icon fs-20"></i>
                        </div>
                    </div>

                    <div class="card-body border-bottom">
                        <div class=" d-flex align-items-center justify-content-between mb-3">
                            <h5 class="mb-0">Online now</h5>
                            <a href="#!">All</a>
                        </div>
                        <div class="hstack gap-3 flex-wrap">
                            <div class="user-img online align-self-center">
                                <img src="assets/images/users/avatar-2.png" class="rounded-circle avatar-xs avatar" alt="avatar-2">
                                <span class="user-status"></span>
                            </div>
                            <div class="user-img online align-self-center">
                                <img src="assets/images/users/avatar-6.png" class="rounded-circle avatar-xs avatar" alt="avatar-2">
                                <span class="user-status"></span>
                            </div>
                            <div class="user-img online align-self-center">
                                <img src="assets/images/users/avatar-4.png" class="rounded-circle avatar-xs avatar" alt="avatar-2">
                                <span class="user-status"></span>
                            </div>
                            <div class="user-img online align-self-center">
                                <img src="assets/images/users/avatar-7.png" class="rounded-circle avatar-xs avatar" alt="avatar-2">
                                <span class="user-status"></span>
                            </div>
                            <div class="user-img online align-self-center">
                                <img src="assets/images/users/avatar-8.png" class="rounded-circle avatar-xs avatar" alt="avatar-2">
                                <span class="user-status"></span>
                            </div>
                            <div class="user-img online align-self-center">
                                <img src="assets/images/users/avatar-1.png" class="rounded-circle avatar-xs avatar" alt="avatar-2">
                                <span class="user-status"></span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body border-bottom">
                        <div class="d-flex">
                            <div class="align-self-center me-3">
                                <img src="assets/images/users/avatar-6.png" class="avatar-2xs avatar rounded-circle" alt="avatar-2">
                            </div>
                            <div class="flex-1">
                                <h5 class="font-size-15 mb-1">Ricky Clark</h5>
                                <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active</p>
                            </div>

                            <div>
                                <div class="dropdown chat-noti-dropdown">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal fs-20"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-3 border-bottom">
                        <h5 class="fs-14 px-3 mb-3"><i class="mdi mdi-pin align-middle text-muted"></i> Pinned</h5>
                        <ul class="list-unstyled chat-list" data-simplebar style="max-height: 120px;">
                            <li class="active">
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img online align-self-center me-3">
                                            <img src="assets/images/users/avatar-5.png" class="rounded-circle avatar-2xs avatar" alt="avatar-2">
                                            <span class="user-status"></span>
                                        </div>

                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Frank Vickery</h5>
                                            <p class="text-truncate mb-0">Hey! there I'm available</p>
                                        </div>
                                        <div class="fs-11">04 min</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img away align-self-center me-3">
                                            <img src="assets/images/users/avatar-4.png" class="rounded-circle avatar-2xs avatar" alt="avatar-3">
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Robert Winter</h5>
                                            <p class="text-truncate mb-0">I've finished it! See you so</p>
                                        </div>
                                        <div class="fs-11">09 min</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img online align-self-center me-3">
                                            <img src="assets/images/users/avatar-6.png" class="rounded-circle avatar-2xs avatar" alt="avatar-6">
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Stephen Hadley</h5>
                                            <p class="text-truncate mb-0">I've finished it! See you so</p>
                                        </div>
                                        <div class="fs-11">5hrs</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img online me-3">
                                            <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                <span class="bg-light text-body">
                                                    C
                                                </span>
                                            </div>
                                            <span class="user-status mb-2"></span>
                                        </div>
                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Crystal Elliott</h5>
                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                        </div>
                                        <div class="fs-11">21 min</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img align-self-center me-3">
                                            <img src="assets/images/users/avatar-4.png" class="rounded-circle avatar-2xs avatar" alt="avatar-4">
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Kristen Steele</h5>
                                            <p class="text-truncate mb-0">Nice to meet you</p>
                                        </div>
                                        <div class="fs-11">1 hr</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img away me-3">
                                            <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                <span class="bg-light text-body">
                                                    M
                                                </span>
                                            </div>
                                            <span class="user-status mb-2"></span>
                                        </div>

                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Mitchel Givens</h5>
                                            <p class="text-truncate mb-0">Hey! there I'm available</p>
                                        </div>
                                        <div class="fs-11">3 hrs</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="d-flex">
                                        <div class="user-img online me-3">
                                            <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                <span class="bg-light text-body">
                                                    K
                                                </span>
                                            </div>
                                            <span class="user-status mb-2"></span>
                                        </div>

                                        <div class="flex-1 overflow-hidden">
                                            <h5 class="text-truncate fs-14 mb-1">Tracy Penley</h5>
                                            <p class="text-truncate mb-0">This theme is awesome!</p>
                                        </div>
                                        <div class="fs-11">24/03</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="chat-leftsidebar-nav pt-3">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <i class="mdi mdi-android-messages fs-16 align-middle me-2"></i>
                                    <span class="">Chat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#group" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-account-multiple-outline fs-16 align-middle me-2"></i>
                                    <span class="">Group</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content py-3">
                        <div class="tab-pane show active" id="chat">
                            <div>
                                <h5 class="fs-14 px-3 mb-3"><i class="mdi mdi-android-messages text-muted"></i> Recent</h5>
                                <ul class="list-unstyled chat-list" data-simplebar style="max-height: 250px;">
                                    <li class="active">
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online align-self-center me-3">
                                                    <img src="assets/images/users/avatar-6.png" class="rounded-circle avatar-2xs avatar" alt="avatar-2">
                                                    <span class="user-status"></span>
                                                </div>

                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Frank Vickery</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div>
                                                    <p class="fs-11 mb-0">04 min</p>
                                                    <div><i class="mdi mdi-check-all align-middle ms-2 text-info"></i></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img away align-self-center me-3">
                                                    <img src="assets/images/users/avatar-3.png" class="rounded-circle avatar-2xs avatar" alt="avatar-3">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Robert Winter</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="fs-11">09 min</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online me-3">
                                                    <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                        <span class="bg-light text-body">
                                                            C
                                                        </span>
                                                    </div>
                                                    <span class="user-status mb-2"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Crystal Elliott</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div>
                                                    <p class="fs-11 mb-0">21 min</p>
                                                    <div><i class="mdi mdi-check-all align-middle ms-2 text-info"></i></div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img align-self-center me-3">
                                                    <img src="assets/images/users/avatar-4.png" class="rounded-circle avatar-2xs avatar" alt="avatar-4">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Kristen Steele</h5>
                                                    <p class="text-truncate mb-0">Nice to meet you</p>
                                                </div>
                                                <div class="fs-11">1 hr</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img away me-3">
                                                    <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                        <span class="bg-light text-body">
                                                            M
                                                        </span>
                                                    </div>
                                                    <span class="user-status mb-2"></span>
                                                </div>

                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Mitchel Givens</h5>
                                                    <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                </div>
                                                <div class="fs-11">3 hrs</div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online align-self-center me-3">
                                                    <img src="assets/images/users/avatar-6.png" class="rounded-circle avatar-2xs avatar" alt="avatar-6">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Stephen Hadley</h5>
                                                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                </div>
                                                <div class="fs-11">5hrs</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="d-flex">
                                                <div class="user-img online me-3">
                                                    <div class="avatar-2xs avatar avatar-circle align-self-center">
                                                        <span class="bg-light text-body">
                                                            K
                                                        </span>
                                                    </div>
                                                    <span class="user-status mb-2"></span>
                                                </div>

                                                <div class="flex-1 overflow-hidden">
                                                    <h5 class="text-truncate fs-14 mb-1">Tracy Penley</h5>
                                                    <p class="text-truncate mb-0">This theme is awesome!</p>
                                                </div>
                                                <div class="fs-11">24/03</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane" id="group">
                            <h5 class="fs-14 px-3 mb-3"><i class="mdi mdi-account-multiple-outline align-middle"></i> Group</h5>
                            <ul class="list-unstyled chat-list" data-simplebar style="max-height: 250px;">
                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-2xs avatar avatar-circle me-3">
                                                <span class="bg-light text-body">
                                                    G
                                                </span>
                                            </div>

                                            <div class="flex-1">
                                                <h5 class="fs-14 mb-0">General</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-2xs avatar avatar-circle me-3">
                                                <span class="bg-light text-body">
                                                    R
                                                </span>
                                            </div>

                                            <div class="flex-1">
                                                <h5 class="fs-14 mb-0">Reporting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-2xs avatar avatar-circle me-3">
                                                <span class="bg-light text-body">
                                                    M
                                                </span>
                                            </div>

                                            <div class="flex-1">
                                                <h5 class="fs-14 mb-0">Meeting</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-2xs avatar avatar-circle me-3">
                                                <span class="bg-light text-body">
                                                    A
                                                </span>
                                            </div>

                                            <div class="flex-1">
                                                <h5 class="fs-14 mb-0">Project A</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-2xs avatar avatar-circle me-3">
                                                <span class="bg-light text-body">
                                                    B
                                                </span>
                                            </div>

                                            <div class="flex-1">
                                                <h5 class="fs-14 mb-0">Project B</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- chat content -->
                <div class="w-100 user-chat mt-4 mt-sm-0">
                    <div class="p-3 px-lg-4 user-chat-border">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <h5 class="font-size-15 mb-1 text-truncate">Frank Vickery</h5>
                                <p class="text-muted text-truncate mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
                            </div>
                            <div class="col-md-8 col-6">
                                <ul class="list-inline user-chat-nav text-end mb-0">
                                    <li class="list-inline-item d-inline-block d-sm-none">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-magnify"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                                <form class="p-2">
                                                    <div class="search-box">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control rounded" placeholder="Search...">
                                                            <i class="mdi mdi-magnify search-icon"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item m-0 d-none d-sm-inline-block">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-cog"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Profile</a>
                                                <a class="dropdown-item" href="#">Clear chat</a>
                                                <a class="dropdown-item" href="#">Muted</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="px-lg-2">
                        <div class="chat-conversation p-3">
                            <ul class="list-unstyled mb-0 pe-3" data-simplebar style="max-height: 650px;">
                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-6.png" alt="avatar-2">
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Frank Vickery</div>
                                            <div class="chat-bubble chat-bubble-primary">
                                                <p class="mb-0">
                                                    Hey! I am available
                                                </p>
                                            </div>
                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-outline align-middle me-1"></i> 12:09</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Ricky Clark</div>
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0">
                                                    Hi, How are you? What about our next meeting?
                                                    <i class="mdi mdi-check-all align-middle ms-2 text-info"></i>
                                                </p>
                                            </div>

                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-time-eight-outline align-middle me-1"></i> 10:02</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="chat-day-title">
                                        <span class="title">Today</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-6.png" alt="avatar-2">
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Frank Vickery</div>
                                            <div class="chat-bubble chat-bubble-primary">
                                                <p class="mb-0">
                                                    Hello!
                                                </p>
                                            </div>
                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-outline me-1"></i> 10:00</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Ricky Clark</div>
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0">
                                                    Hi, How are you? What about our next meeting?
                                                    <i class="mdi mdi-check-all align-middle ms-2 text-info"></i>
                                                </p>
                                            </div>

                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-outline me-1"></i> 10:02</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-6.png" alt="avatar-2">
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Frank Vickery</div>
                                            <div class="chat-bubble chat-bubble-primary">
                                                <p class="mb-0">
                                                    Yeah everything is fine
                                                </p>
                                            </div>

                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-outline me-1"></i> 10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-6.png" alt="avatar-2">
                                        </div>
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Frank Vickery</div>
                                            <div class="chat-bubble chat-bubble-primary">
                                                <p class="mb-0">& Next meeting tomorrow 10.00AM</p>
                                            </div>
                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-outline me-1"></i> 10:06</p>
                                        </div>

                                    </div>
                                </li>

                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="ctext-wrap">
                                            <div class="conversation-name">Ricky Clark</div>
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0">
                                                    Wow that's great
                                                    <i class="mdi mdi-check-all align-middle ms-2 text-info"></i>
                                                </p>
                                            </div>

                                            <p class="chat-time mb-0"><i class="mdi mdi-clock-outline me-1"></i> 10:07</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>

                    </div>
                    <div class="px-lg-3">
                        <div class="p-3 chat-input-section">
                            <div class="row">
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control chat-input" placeholder="Enter Message...">

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
@endsection
