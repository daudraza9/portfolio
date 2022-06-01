<!-- Jquery JS-->
<script src="{{asset('admin-assets/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('admin-assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('admin-assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('admin-assets/vendor/wow/wow.min.js')}}"></script>

<!--Dropify-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<!--Chart -->
<script src="{{asset('admin-assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('admin-assets/js/main.js')}}"></script>
<script src="{{asset('admin-assets/js/select2.min.js')}}"></script>

<script>

    $(document).ready(function(){
        $(".dropify").dropify();
    })
</script>