<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Base form control examples" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
</head>

<body id="kt_body" class="header-fixed subheader-enabled page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div id="kt_header_mobile" class="header-mobile ">
                    <a href="/">
                        <img alt="Logo" src="{{ asset('/media/logos/logo-default.png') }}" class="max-h-30px" />
                    </a>
                    <div class="d-flex align-items-center">
                        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                            <span></span>
                        </button>
                        <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                            <span class="svg-icon svg-icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="kt_header" class="header  header-fixed ">
                    <div class=" container ">
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <a href="{{ route('administrator.menu') }}" class="mr-20">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo-default.png') }}"
                                    class="logo-default max-h-60px" />
                            </a>
                        </div>
                        <div class="topbar  topbar-minimize ">
                            <div class="topbar-item mr-3 w-100 w-lg-auto justify-content-start">
                                <div class="quick-search quick-search-inline w-auto w-lg-200px"
                                    id="kt_quick_search_inline">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('admin.language') }}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="">English</a>
                                            <a class="dropdown-item" href="">Español</a>
                                        </div>
                                    </div>
                                    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                                    <div
                                        class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350"
                                            data-mobile-height="200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                                    <div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
                                        <span class="svg-icon svg-icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                                    <div class="d-flex align-items-center p-8 rounded-top">
                                        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
                                            <img src="{{ asset('assets/media/svg/avatars/007-boy-2.svg') }}"
                                                alt="" />
                                        </div>
                                        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">
                                            {{ __('admin.session') }}
                                        </div>
                                    </div>
                                    <div class="navi navi-spacer-x-0 pt-5">
                                        <div class="navi-separator mt-3"></div>
                                        <div class="navi-footer  px-8 py-5">
                                            <form action="{{ route('administrator.logout') }}" method="POST">
                                                {{ csrf_field() }}
                                                <button target="_blank"
                                                    class="btn btn-light-primary font-weight-bold">{{ __('admin.logout') }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                    <div class=" container ">
                        <div id="kt_header_menu"
                            class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default ">
                            <ul class="menu-nav ">
                                @if (\Request::is('administrador/menu') || \Request::is('administrador/menu/*'))
                                    <li class="menu-item menu-item-here menu-item-submenu menu-item-rel">
                                    @else
                                    <li class="menu-item  menu-item-submenu menu-item-rel">
                                @endif
                                <a href="{{ route('administrator.menu') }}" class="menu-link">
                                    <span class="menu-text">{{ __('admin.dashboard') }}</span>
                                </a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row flex-column-fluid  container ">
                    <div class="main d-flex flex-column flex-row-fluid">
                        <div class="subheader py-2 py-lg-6 " id="kt_subheader">
                            <div
                                class=" w-100  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <h5 class="text-dark font-weight-bold my-1 mr-5">
                                            @yield('title')
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                        <div class="content flex-column-fluid" id="kt_content">
                            <div class="row">
                                <div class="col-md">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <div class=" container  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">Copyright {{ date('Y') }} &copy; Shake
                                It Studio - {{ __('instructor.rights') }}. </span>
                        </div>
                        <div class="nav nav-dark order-1 order-md-2">
                            <a href="https://shakeitstudio.com" target="_blank"
                                class="nav-link pr-3 pl-0 text-muted text-hover-primary">Shake It Studio</a>
                            <a href="https://shakeitstudio.com/contact_us" target="_blank"
                                class="nav-link px-3 text-muted text-hover-primary">{{ __('instructor.contact') }}</a>
                            <a href="https://www.facebook.com/shakeitcbba" target="_blank"
                                class="nav-link pl-3 pr-0 text-muted text-hover-primary">{{ __('instructor.our_facebook') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#8950FC",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#6993FF",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#EEE5FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#E1E9FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.0.6') }}"></script>
    @yield('javascript')

    @if (app()->getLocale() == 'en')
        <script type="application/javascript">
            $('.delete-confirm').on('click', function(event) {
                event.preventDefault();
                const url = $(this).attr('href');
                swal.fire({
                    title: 'Are you sure?',
                    text: "This record and it's details will be permanantly deleted!",
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-success",
                        cancelButton: "btn font-weight-bold btn-danger"
                    }
                }).then(function(value) {
                    if (value) {
                        if (value.isConfirmed) {
                            window.location.href = url;
                        }
                    }
                });
            });
        </script>
    @else
        <script type="application/javascript">
            $('.delete-confirm').on('click', function(event) {
                event.preventDefault();
                const url = $(this).attr('href');
                swal.fire({
                    title: '¿Estas seguro?',
                    text: "¡Estos datos y sus detalles seran eliminados!",
                    icon: "warning",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: 'Si, eliminar!',
                    cancelButtonText: 'No, cancelar!',
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-success",
                        cancelButton: "btn font-weight-bold btn-danger"
                    }
                }).then(function(value) {
                    if (value) {
                        if (value.isConfirmed) {
                            window.location.href = url;
                        }
                    }
                });
            });
        </script>
    @endif

</body>

</html>
