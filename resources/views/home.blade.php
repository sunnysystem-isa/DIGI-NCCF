<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>NCCF 2.0</title>
    <!--begin::Favicon-->
    <link rel="shortcut icon" href="/assets/media/logos/Icon-sunny.png" />
    <!--end::Favicon-->
    <!--begin::Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--begin::Bootstrap Icon-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Bootstrap v5.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--end::Bootstrap v5.2-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .card {
            background-color: white;
        }
		
		a{
			color: #004AAD;

		}
        
        .badge.badge-light.rounded-pill{
            max-width: 100px !important;
        }
		/* .min-w-1000px{
			min-width: 2000px !important;
		} */
    </style>
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" style="background-color: #001871">
    <!--begin::Main-->

    <!--begin::Page-->
    <div class="h-100 d-flex align-items-center justify-content-center">
        <!--begin::Container-->
        <div>
            <img src="assets/media/logos/logo.png" height="500" style=" ">
        </div>
        <!--end::Container-->
    </div>
    <!--end::Page-->
    
    <!--begin::Modal-->
    <div id="myModal" class="modal fade h-75 d-flex align-items-center justify-content-center" tabindex="-1">
        <div class="modal-dialog min-w-500px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign to NCCF 2.0</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Your Conection to this site is not private<span class="badge"></p>

                <!--begin::Row-->
                <div class="row fv-row">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Input group Website-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">Username</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" id="username" placeholder="Input Username" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--End begin::Col-->
                </div>
                <!--End begin::Row-->
                <!--begin::Row-->
                <div class="row fv-row">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Input group Website-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">Password</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input oninput="homePage()" type="password" class="form-control form-control-solid" id="password" placeholder="Input Password" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--End begin::Col-->
                </div>
                <!--End begin::Row-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="sign1" type="button" class="btn btn-secondary" disabled>Sign In</button>
                <a id="sign2" href="/main-page" class="btn btn-primary" style="display: none">Sign In</a>
            </div>
            </div>
        </div>
    </div>
    <script>
        function homePage(e) {
            let user = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            if (user == password) {
                document.getElementById("sign1").style.display = "none";
                document.getElementById("sign2").style.display = "";
                // console.log(user, password);
            }

        }
    </script>
    <!--end::Modal-->

    <!--end::Main-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/modals/create-app.js"></script>
    <script src="assets/js/custom/modals/upgrade-plan.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

    <!--begin::JS script-->
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    
    <!--end::JS script-->
  

    
</body>
<!--end::Body-->

</html>

<!--begin::sweet alert-->
{{-- @include('sweetalert::alert') --}}
<!--end::sweet alert-->

