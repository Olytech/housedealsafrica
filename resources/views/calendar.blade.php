@extends('layouts.master')

@section('title') @lang('translation.Calendar') @endsection

@section('css')
    <!-- Plugin css -->
    <link href="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <!-- start page title -->
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="page-title-box">
                <h4 class="font-size-18">Calendar</h4>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Housedealsafrica</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ol>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="float-right d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-settings mr-2"></i> Settings
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
           
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn font-16 btn-primary btn-block" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Event</button>
                            
                            
                            <div id="external-events" class="m-t-20">
                                <br>
                                <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                <div class="external-event fc-event bg-success" data-class="bg-success">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 mr-2"></i>New Event Planning
                                </div>
                                <div class="external-event fc-event bg-info" data-class="bg-info">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 mr-2"></i>Meeting
                                </div>
                                <div class="external-event fc-event bg-warning" data-class="bg-warning">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 mr-2"></i>Generating Reports
                                </div>
                                <div class="external-event fc-event bg-danger" data-class="bg-danger">
                                    <i class="mdi mdi-checkbox-blank-circle font-size-11 mr-2"></i>Create New theme
                                </div>
                            </div>
                            
                            <div class="mt-5">
                                
                                <h4 class="card-title mb-3">Activity</h4>

                                <ol class="activity-feed mb-0 pl-2 ml-1" >
                                    <li class="feed-item">
                                            <p class="mb-0">Andrei Coman magna sed porta finibus, risus
                                                posted a new article: Forget UX Rowland</p>
                                    </li>
                                    <li class="feed-item">
                                        <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented Developer Moreno</p>
                                    </li>
                                    <li class="feed-item">
                                        <p class="mb-0">Zack Wetass, Chris combined Commented UX Murphy</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div> <!-- end col -->

            </div> 

            <div style='clear:both'></div>
                
            <!-- Add New Event MODAL -->
            <div class="modal fade" id="event-modal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h5 class="modal-title" id="modal-title">Event</h5>
                        </div>
                        <div class="modal-body p-4">
                            <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Event Name</label>
                                            <input class="form-control" placeholder="Insert Event Name"
                                                type="text" name="title" id="event-title" required value="" />
                                            <div class="invalid-feedback">Please provide a valid event name</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control custom-select" name="category"
                                                id="event-category" required>
                                                <option value="bg-danger" selected>Danger</option>
                                                <option value="bg-success">Success</option>
                                                <option value="bg-primary">Primary</option>
                                                <option value="bg-info">Info</option>
                                                <option value="bg-dark">Dark</option>
                                                <option value="bg-warning">Warning</option>
                                            </select>
                                            <div class="invalid-feedback">Please select a valid event category</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button type="button" class="btn btn-light mr-1" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end modal-content-->
                </div> <!-- end modal dialog-->
            </div>
            <!-- end modal-->
        </div>
    </div>
    <!-- end row -->
@endsection

@section('script')
    <!-- plugin js -->
    <script src="{{ URL::asset('/assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jquery-ui-dist/jquery-ui-dist.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.js') }}"></script>

    <!-- Calendar init -->
    <script src="{{ URL::asset('/assets/js/pages/calendar.init.js') }}"></script>
@endsection
