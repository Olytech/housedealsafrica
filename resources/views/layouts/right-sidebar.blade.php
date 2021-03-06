<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center">Change Appearance</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ URL::asset('/assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail"
                    alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ URL::asset('/assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail"
                    alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                    data-bsStyle="{{ URL::asset('/assets/css/bootstrap-dark.min.css') }}"
                    data-appStyle="{{ URL::asset('/assets/css/app-dark.min.css') }}" />
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            


            <a href="https://olytechdesign.com" class="btn btn-primary btn-block mt-3" target="_blank"><i
                    class="mdi mdi-shield-star-outline"></i> Thank You</a>

        </div>

    </div> <!-- end slimscroll-menu-->
</div>
