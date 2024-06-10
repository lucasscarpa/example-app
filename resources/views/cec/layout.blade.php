@extends('layout.default')

@section('styles')
@stop

@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#home" class="nav-link nav-click align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#admin" class="nav-link nav-click align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#submenu1" class="nav-link nav-click px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href="#submenu2" class="nav-link nav-click px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
            </div>
        </div>
        <div id="main">
            <div id="content" class="col py-3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="spinner-border" id="btn-loading" role="status"></div>
                            <div class="tableInfo">
                                @yield('app')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('script')
<script type="text/javascript">
    $('#btn-loading').hide();
    $('.nav-click').click(function(obj){
        $('.tableInfo').html('');
        $('#btn-loading').show();
        const rota = $(this).attr('href').replace("#", "/");
        console.log(rota);
        $.ajax({
            type: 'GET',
            url: '{{ route("cec") }}' + rota,
            data: {},
            success: function(response){
                $('.tableInfo').html(response);
                $('#btn-loading').hide();
            }
        });
    })
</script>
@stop

