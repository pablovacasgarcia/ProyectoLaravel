<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="icon" href='../img/PMJLogoFondo.png' type="image/png">

        <title>PMJ Luxury</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        />
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
                <!--Preloader-->
                <div class="preloader d-flex justify-content-center align-items-center">
                    <img src="../img/preloader.gif" alt="preloader" />
                </div>
                <!--End Preloader-->
                <!-- end Nav element-->
                <!-- Header-->
                <header class="header" id="header">
                    <div class="container-fluid">
                        <div class="row height-max align-items-center">
                            <div class="col-md-9 ml-auto text-right mr-5">
                                <h5 class="title-heading d-inline-block text-uppercase p-2">
                                    the all new
                                </h5>
                                <h2 class="text-uppercase my-2 title">2024</h2>
                                <h3 class="text-uppercase">mercedes-benz</h3>
                                <h6 class="text-capitalize">starts from</h6>
                                <h2 class="">
                                    60.000€
                                    <a href="#" class="title-icon">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- end Header-->
                <!--Skills Section-->
                <section class="skills py-5">
                    <div class="container">
                        <div class="row mb-5">
                            <div
                                class="col flex-wrap text-uppercase d-flex justify-content-center"
                            >
                                <h1 class="font-weight-bold align-self-center mx-1">Why choose</h1>
                                <h1 class="section-title-special mx-1">car dealer</h1>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <!--Skills-->
                            <div class="text-center my-3 col-sm-6 col-lg-3">
                                <a href="#" class="p-2 skills-icon rounded-circle">
                                    <i class="fas fa-car fa-fw"></i>
                                </a>
                                <h6 class="text-uppercase font-weight-bold my-3">all brands</h6>
                                <div class="skills-underline"></div>
                                <p class="w-75 text-muted mx-auto">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At,
                                </p>
                            </div>
                            <!--End Skills-->
                            <!--Skills-->
                            <div class="text-center my-3 col-sm-6 col-lg-3">
                                <a href="#" class="p-2 skills-icon rounded-circle">
                                    <i class="fas fa-comments fa-fw"></i>
                                </a>
                                <h6 class="text-uppercase font-weight-bold my-3">free support</h6>
                                <div class="skills-underline"></div>
                                <p class="w-75 text-muted mx-auto">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At,
                                </p>
                            </div>
                            <!--End Skills-->
                            <!--Skills-->
                            <div class="text-center my-3 col-sm-6 col-lg-3">
                                <a href="#" class="p-2 skills-icon rounded-circle">
                                    <i class="fas fa-people-carry fa-fw"></i>
                                </a>
                                <h6 class="text-uppercase font-weight-bold my-3">caring</h6>
                                <div class="skills-underline"></div>
                                <p class="w-75 text-muted mx-auto">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At,
                                </p>
                            </div>
                            <!--End Skills-->
                            <!--Skills-->
                            <div class="text-center my-3 col-sm-6 col-lg-3">
                                <a href="#" class="p-2 skills-icon rounded-circle">
                                    <i class="fas fa-wallet fa-fw"></i>
                                </a>
                                <h6 class="text-uppercase font-weight-bold my-3">affordable</h6>
                                <div class="skills-underline"></div>
                                <p class="w-75 text-muted mx-auto">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. At,
                                </p>
                            </div>
                            <!--End Skills-->
                        </div>
                    </div>
                </section>
                <!-- end Skills Section-->

                <!--Inventory Section-->
                <section class="py-5 inventory" id="inventory">
                    <div class="container">
                        <!--Section Title-->
                        <div class="row mb-5">
                            <div
                                class="col flex-wrap text-uppercase d-flex justify-content-center"
                            >
                                <h1 class="font-weight-bold align-self-center mx-1">our</h1>
                                <h1 class="section-title-special mx-1">inventory</h1>
                            </div>
                        </div>
                        <!--end Section Title-->
                        <!--Filter buttons-->
                        <div class="row mb-5">
                            <div class="mx-auto d-flex justify-content-end col-10 col-md-12">
                                <button
                                    class="
                btn
                filter-button
                btn-outline-secondary
                mx-1
                text-uppercase
              "
                                    data-id="all"
                                >
                                    All
                                </button>
                                <button
                                    class="
                btn
                filter-button
                btn-outline-secondary
                mx-1
                text-uppercase
              "
                                    data-id="american"
                                >
                                    american
                                </button>
                                <button
                                    class="
                btn
                filter-button
                btn-outline-secondary
                mx-1
                text-uppercase
              "
                                    data-id="german"
                                >
                                    german
                                </button>
                            </div>
                        </div>
                        <!--/Filter buttons-->
                        <div class="row">
                            <!--single car-->
                            <div
                                class="col-10 mx-auto mx-md-0 my-3 col-md-6 col-lg-4"
                                data-group="[german-car]"
                            >
                                <div class="card car-card">
                                    <img
                                        src="../img/car-german-1.jpeg"
                                        class="card-img-top car-img"
                                        alt="German car"
                                    />
                                    <!--card body-->
                                    <div class="card-body">
                                        <div class="car-info d-flex justify-content-between">
                                            <div class="car-text text-uppercase">
                                                <h6 class="font-weight-bold">car maker</h6>
                                                <h6>model</h6>
                                            </div>
                                            <h5 class="car-value align-self-center py-2 px-3">
                                                <span class="car-price">10.000€</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <footer
                                        class="
                  card-footer
                  text-capitalize
                  d-flex
                  justify-content-between
                "
                                    >
                                        <p>
                                            <span><i class="fas fa-car px-1"></i></span>sedan
                                        </p>
                                        <p>
                                            <span><i class="fas fa-cogs px-1"></i></span>automatic
                                        </p>
                                        <p>
                                            <span><i class="fas fa-gas-pump px-1"></i></span>50
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <!--single car-->
                            <div
                                class="col-10 mx-auto mx-md-0 my-3 col-md-6 col-lg-4"
                                data-group="[german-car]"
                            >
                                <div class="card car-card">
                                    <img
                                        src="../img/car-german-5.jpeg"
                                        class="card-img-top car-img"
                                        alt="German car"
                                    />
                                    <!--card body-->
                                    <div class="card-body">
                                        <div class="car-info d-flex justify-content-between">
                                            <div class="car-text text-uppercase">
                                                <h6 class="font-weight-bold">car maker</h6>
                                                <h6>model</h6>
                                            </div>
                                            <h5 class="car-value align-self-center py-2 px-3">
                                                <span class="car-price">10.000€</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <footer
                                        class="
                  card-footer
                  text-capitalize
                  d-flex
                  justify-content-between
                "
                                    >
                                        <p>
                                            <span><i class="fas fa-car px-1"></i></span>sedan
                                        </p>
                                        <p>
                                            <span><i class="fas fa-cogs px-1"></i></span>automatic
                                        </p>
                                        <p>
                                            <span><i class="fas fa-gas-pump px-1"></i></span>50
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <!--single car-->
                            <div
                                class="col-10 mx-auto mx-md-0 my-3 col-md-6 col-lg-4"
                                data-group="[american-car]"
                            >
                                <div class="card car-card">
                                    <img
                                        src="../img/car-american-4.jpeg"
                                        class="card-img-top car-img"
                                        alt="american car"
                                    />
                                    <!--card body-->
                                    <div class="card-body">
                                        <div class="car-info d-flex justify-content-between">
                                            <div class="car-text text-uppercase">
                                                <h6 class="font-weight-bold">car maker</h6>
                                                <h6>model</h6>
                                            </div>
                                            <h5 class="car-value align-self-center py-2 px-3">
                                                <span class="car-price">10.000€</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <footer
                                        class="
                  card-footer
                  text-capitalize
                  d-flex
                  justify-content-between
                "
                                    >
                                        <p>
                                            <span><i class="fas fa-car px-1"></i></span>sedan
                                        </p>
                                        <p>
                                            <span><i class="fas fa-cogs px-1"></i></span>automatic
                                        </p>
                                        <p>
                                            <span><i class="fas fa-gas-pump px-1"></i></span>50
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <!--single car-->
                            <div
                                class="col-10 mx-auto mx-md-0 my-3 col-md-6 col-lg-4"
                                data-group="[german-car]"
                            >
                                <div class="card car-card">
                                    <img
                                        src="../img/car-german-3.jpeg"
                                        class="card-img-top car-img"
                                        alt="German car"
                                    />
                                    <!--card body-->
                                    <div class="card-body">
                                        <div class="car-info d-flex justify-content-between">
                                            <div class="car-text text-uppercase">
                                                <h6 class="font-weight-bold">car maker</h6>
                                                <h6>model</h6>
                                            </div>
                                            <h5 class="car-value align-self-center py-2 px-3">
                                                <span class="car-price">10.000€</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <footer
                                        class="
                  card-footer
                  text-capitalize
                  d-flex
                  justify-content-between
                "
                                    >
                                        <p>
                                            <span><i class="fas fa-car px-1"></i></span>sedan
                                        </p>
                                        <p>
                                            <span><i class="fas fa-cogs px-1"></i></span>automatic
                                        </p>
                                        <p>
                                            <span><i class="fas fa-gas-pump px-1"></i></span>50
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <!--single car-->
                            <div
                                class="col-10 mx-auto mx-md-0 my-3 col-md-6 col-lg-4"
                                data-group="[german-car]"
                            >
                                <div class="card car-card">
                                    <img
                                        src="../img/car-german-2.jpeg"
                                        class="card-img-top car-img"
                                        alt="German car"
                                    />
                                    <!--card body-->
                                    <div class="card-body">
                                        <div class="car-info d-flex justify-content-between">
                                            <div class="car-text text-uppercase">
                                                <h6 class="font-weight-bold">car maker</h6>
                                                <h6>model</h6>
                                            </div>
                                            <h5 class="car-value align-self-center py-2 px-3">
                                                <span class="car-price">10.000€</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <footer
                                        class="
                  card-footer
                  text-capitalize
                  d-flex
                  justify-content-between
                "
                                    >
                                        <p>
                                            <span><i class="fas fa-car px-1"></i></span>sedan
                                        </p>
                                        <p>
                                            <span><i class="fas fa-cogs px-1"></i></span>automatic
                                        </p>
                                        <p>
                                            <span><i class="fas fa-gas-pump px-1"></i></span>50
                                        </p>
                                    </footer>
                                </div>
                            </div>
                            <!--single car-->
                            <div
                                class="col-10 mx-auto mx-md-0 my-3 col-md-6 col-lg-4"
                                data-group="[american-car]"
                            >
                                <div class="card car-card">
                                    <img
                                        src="../img/car-american-1.jpeg"
                                        class="card-img-top car-img"
                                        alt="american car"
                                    />
                                    <!--card body-->
                                    <div class="card-body">
                                        <div class="car-info d-flex justify-content-between">
                                            <div class="car-text text-uppercase">
                                                <h6 class="font-weight-bold">car maker</h6>
                                                <h6>model</h6>
                                            </div>
                                            <h5 class="car-value align-self-center py-2 px-3">
                                                <span class="car-price">10.000€</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <!--footer-->
                                    <footer
                                        class="
                  card-footer
                  text-capitalize
                  d-flex
                  justify-content-between
                "
                                    >
                                        <p>
                                            <span><i class="fas fa-car px-1"></i></span>sedan
                                        </p>
                                        <p>
                                            <span><i class="fas fa-cogs px-1"></i></span>automatic
                                        </p>
                                        <p>
                                            <span><i class="fas fa-gas-pump px-1"></i></span>50
                                        </p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Inventory Section-->

                <!--Question section-->
                <div class="question section py-2">
                    <div class="container" style="height: 20vh;">
                    </div>
                </div>
                <!--End Question section-->

                <!--featured section-->
                <section class="featured py-5" id="featured">
                    <div class="container">
                        <!--Title-->
                        <div class="row mb-5">
                            <div
                                class="col flex-wrap text-uppercase d-flex justify-content-center"
                            >
                                <h1 class="font-weight-bold align-self-center mx-1">featured</h1>
                                <h1 class="section-title-special mx-1">car</h1>
                            </div>
                        </div>
                        <!--end Title-->

                        <!--featured info-->
                        <div class="row">
                            <div class="col-10 col-lg-6 mx-auto featured-info my-3">
                                <!--Single item-->
                                <div
                                    class="
                featured-item
                my-3
                d-flex
                p-2
                text-capitalize
                align-items-baseline
                flex-wrap
              "
                                >
              <span class="featured-icon mr-2">
                <i class="fas fa-car"></i>
              </span>
                                    <h5 class="font-weight-bold mx-1">mercedes</h5>
                                    <h5 class="mx-1">new model</h5>
                                </div>
                                <!-- end Single item-->
                                <!--Single item-->
                                <div
                                    class="
                featured-item
                my-3
                d-flex
                p-2
                text-capitalize
                align-items-baseline
                flex-wrap
              "
                                >
              <span class="featured-icon mr-2">
                <i class="fas fa-car"></i>
              </span>
                                    <h5 class="font-weight-bold mx-1">mercedes</h5>
                                    <h5 class="mx-1">new model</h5>
                                </div>
                                <!-- end Single item-->
                                <!--Single item-->
                                <div
                                    class="
                featured-item
                my-3
                d-flex
                p-2
                text-capitalize
                align-items-baseline
                flex-wrap
              "
                                >
              <span class="featured-icon mr-2">
                <i class="fas fa-car"></i>
              </span>
                                    <h5 class="font-weight-bold mx-1">mercedes</h5>
                                    <h5 class="mx-1">new model</h5>
                                </div>
                                <!-- end Single item-->
                                <!--Single item-->
                                <div
                                    class="
                featured-item
                my-3
                d-flex
                p-2
                text-capitalize
                align-items-baseline
                flex-wrap
              "
                                >
              <span class="featured-icon mr-2">
                <i class="fas fa-car"></i>
              </span>
                                    <h5 class="font-weight-bold mx-1">mercedes</h5>
                                    <h5 class="mx-1">new model</h5>
                                </div>
                                <!-- end Single item-->
                                <!--Single item-->
                                <div
                                    class="
                featured-item
                my-3
                d-flex
                p-2
                text-capitalize
                align-items-baseline
                flex-wrap
              "
                                >
              <span class="featured-icon mr-2">
                <i class="fas fa-car"></i>
              </span>
                                    <h5 class="font-weight-bold mx-1">mercedes</h5>
                                    <h5 class="mx-1">new model</h5>
                                </div>
                                <!-- end Single item-->
                            </div>
                            <!--featured img-->
                            <div
                                class="col-10 mx-auto col-lg-6 featured-info my-3 align-self-center"
                            >
                                <div class="img-container">
                                    <img
                                        src="../img/featured.jpeg"
                                        class="img-fluid featured-photo"
                                        alt=""
                                    />
                                    <a href="#" class="featured-link">
                                        <img src="../img/PMJLogoFondo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--End featured section-->

                <!-- Gallery section-->
                <section class="gallery py-5" id="gallery">
                    <div class="container">
                        <!--Title-->
                        <div class="row mb-5">
                            <div
                                class="col flex-wrap text-uppercase d-flex justify-content-center"
                            >
                                <h1 class="font-weight-bold align-self-center mx-1">our</h1>
                                <h1 class="section-title-special mx-1">gallery</h1>
                            </div>
                        </div>
                        <!--end Title-->
                        <!--Gallery-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="gallery-item">
                                    <img
                                        src="../img/car-american-4.jpeg"
                                        class="img-fluid gallery-img"
                                        alt="american car"
                                    />
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex flex-column justify-content-between">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img
                                                src="../img/car-german-2.jpeg"
                                                class="img-fluid gallery-img"
                                                alt="germany car"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img
                                                src="../img/car-german-3.jpeg"
                                                class="img-fluid gallery-img"
                                                alt="germany car"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img
                                                src="../img/car-american-2.jpeg"
                                                class="img-fluid gallery-img"
                                                alt="american car"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="gallery-item">
                                            <img
                                                src="../img/car-german-5.jpeg"
                                                class="img-fluid gallery-img"
                                                alt="german car"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Gallery section-->

                <!--contact section-->
                <section class="contact py-5" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 mx-auto col-md-6">
                                <form action="">
                                    <div class="form-group" style="height: 20vh">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--end contact section-->

                <!--Services Section-->
                <div class="container" id="services">
                    <!--Section Title-->
                    <div class="row my-5">
                        <div class="col d-flex flex-wrap text-uppercase justify-content-center">
                            <h1 class="font-weight-bold align-self-center mx-1">our</h1>
                            <h1 class="section-title-special mx-1">Services</h1>
                        </div>
                    </div>
                    <!-- End Section Title-->
                </div>
                <section class="services py-5 d-flex align-items-center">
                    <!--End Video Container-->
                    <!--Video overlay-->
                    <div class="video-overlay"></div>
                    <!--End Video overlay-->
                    <!--Service Content-->
                    <div class="container py-5">
                        <div class="row my-3">
                            <!--Col-->
                            <div class="col-8 mx-auto col-lg-6 col-md-4 my-3">
                                <div class="service py-5 pl-4">
              <span class="service-icon">
                <i class="fas fa-cogs"></i>
              </span>
                                    <h6 class="text-capitalize service-title">vehicle</h6>
                                    <h5 class="text-uppercase font-weight-bold">repairing</h5>
                                </div>
                            </div>
                            <!--End Col-->

                            <!--Col-->
                            <div class="col-8 mx-auto col-lg-6 col-md-4 my-3">
                                <div class="service py-5 pl-4">
              <span class="service-icon">
                <i class="fas fa-car-battery"></i>
              </span>
                                    <h6 class="text-capitalize service-title">battery</h6>
                                    <h5 class="text-uppercase font-weight-bold">replacement</h5>
                                </div>
                            </div>
                            <!--End Col-->

                            <!--Col-->
                            <div class="col-8 mx-auto col-lg-6 col-md-4 my-3">
                                <div class="service py-5 pl-4">
              <span class="service-icon">
                <i class="fas fa-car-crash"></i>
              </span>
                                    <h6 class="text-capitalize service-title">roadside</h6>
                                    <h5 class="text-uppercase font-weight-bold">assistance</h5>
                                </div>
                            </div>
                            <!--End Col-->
                        </div>
                    </div>
                </section>
                <!--End Services Section-->

                <!--Qoute section-->
                <section class="quotes py-5 my-5">
                    <div class="container">
                        <!--Title-->
                        <div class="row mb-5 my-5">
                            <div
                                class="col flex-wrap text-uppercase d-flex justify-content-center"
                            >
                                <h1 class="font-weight-bold align-self-center mx-1">our</h1>
                                <h1 class="section-title-special mx-1">services</h1>
                            </div>
                        </div>
                        <!--end Title-->
                        <div class="row">
                            <!--single card-->
                            <div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
                                <div class="card">
                                    <img
                                        src="../img/car-german-1.jpeg"
                                        class="card-img-top"
                                        alt="Germany car"
                                    />
                                    <!--card body-->
                                    <div class="card-body text-center customer-card-body">
                                        <img
                                            src="../img/customer-1.jpg"
                                            class="rounded-circle customer-img w-25"
                                            alt="customer qoute"
                                        />
                                        <!--card title-->
                                        <div class="card-title">
                                            <h6 class="customer-name text-capitalize">customer name</h6>
                                        </div>
                                        <!--end card title-->
                                        <h5 class="customer-job text-capitalize">customer job</h5>
                                        <div>
                                            <p class="customer-quote text-center">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Error?
                                            </p>
                                            <span class="customer-icon"
                                            ><i class="fas fa-quote-left"></i
                                                ></span>
                                        </div>
                                    </div>
                                    <!--end card body-->
                                </div>
                            </div>
                            <!--end single card-->
                            <!--single card-->
                            <div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
                                <div class="card">
                                    <img
                                        src="../img/car-german-2.jpeg"
                                        class="card-img-top"
                                        alt="Germany car"
                                    />
                                    <!--card body-->
                                    <div class="card-body text-center customer-card-body">
                                        <img
                                            src="../img/customer-2.jpg"
                                            class="rounded-circle customer-img w-25"
                                            alt="customer qoute"
                                        />
                                        <!--card title-->
                                        <div class="card-title">
                                            <h6 class="customer-name text-capitalize">customer name</h6>
                                        </div>
                                        <!--end card title-->
                                        <h5 class="customer-job text-capitalize">customer job</h5>
                                        <div>
                                            <p class="customer-quote text-center">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Error?
                                            </p>
                                            <span class="customer-icon"
                                            ><i class="fas fa-quote-left"></i
                                                ></span>
                                        </div>
                                    </div>
                                    <!--end card body-->
                                </div>
                            </div>
                            <!--end single card-->
                            <!--single card-->
                            <div class="col-10 mx-auto my-5 col-md-6 col-lg-4">
                                <div class="card">
                                    <img
                                        src="../img/car-german-3.jpeg"
                                        class="card-img-top"
                                        alt="Germany car"
                                    />
                                    <!--card body-->
                                    <div class="card-body text-center customer-card-body">
                                        <img
                                            src="../img/customer-3.jpg"
                                            class="rounded-circle customer-img w-25"
                                            alt="customer qoute"
                                        />
                                        <!--card title-->
                                        <div class="card-title">
                                            <h6 class="customer-name text-capitalize">customer name</h6>
                                        </div>
                                        <!--end card title-->
                                        <h5 class="customer-job text-capitalize">customer job</h5>
                                        <div>
                                            <p class="customer-quote text-center">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Error?
                                            </p>
                                            <span class="customer-icon"
                                            ><i class="fas fa-quote-left"></i
                                                ></span>
                                        </div>
                                    </div>
                                    <!--end card body-->
                                </div>
                            </div>
                            <!--end single card-->
                        </div>
                    </div>
                </section>
                <!--End Qoute section-->
                <!--Footer-->
                <footer class="footer py-5">
                    <div class="d-flex justify-content-around">
                        <a href="#" class="footer-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="footer-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a
                            href="https://www.linkedin.com/"
                            class="footer-icon"
                        >
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="footer-icon">
                            <i class="fab fa-google-plus"></i>
                        </a>
                    </div>
                </footer>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
                <!-- jsDeliver -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        </div>
    </body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,700');

    :root {
        --mainBlue: #40acf1;
        --transparentBlue: rgba(64, 172, 241, 0.7);
        --mainWhite: #ffffff;
        --mainBlack: #292f36;
        --mainGrey: rgb(216, 214, 214);
        --mainYellow: #e3b505;
    }
    * {
        scroll-behavior: smooth !important;
    }
    body {
        font-family: 'Roboto', sans-serif;
        color: var(--mainBlack);
        background: var(--mainWhite);
    }

    /*Preloader*/
    .preloader {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 999;
        background-color: var(--mainWhite);
    }
    .hidePreloader {
        display: none !important;
    }
    /*End Preloader*/

    /*NavBar styles*/

    .navbar {
        background-color: var(--mainWhite);
    }
    .navbar-icon {
        font-size: 2rem;
        color: var(--mainBlue);
    }
    .navbar-toggler {
        outline-color: var(--mainBlue) !important;
    }
    .nav-link {
        color: var(--mainBlack);
        text-transform: capitalize;
        font-size: 1.2rem;
        transition: color 0.1s ease-in;
    }
    .nav-link::before {
        content: ' ';
        width: 0%;
        height: 1px;
        top: 35px;
        background-color: var(--mainBlue);
        position: relative;
        display: block;
        transition: width 0.2s ease-in;
    }
    .nav-link:hover::before {
        width: 100%;
        transition: width 0.2s ease-in;
    }
    .nav-link:hover {
        color: var(--mainBlue);
    }

    .nav-icon {
        font-size: 1.5rem;
        text-decoration: none !important;
        color: var(--mainBlue);
        transition: color 0.2s ease-in;
    }
    .nav-icon:hover {
        color: var(--mainBlack);
    }
    /* End of navbar*/
    /* Header */

    .header {
        color: var(--mainWhite);
        clip-path: polygon(0 0, 100% 0, 100% 95%, 50% 100%, 0 95%);
        overflow: hidden;
    }
    .height-max {
        min-height: calc(100vh - 76px);
        background: url('../../img/headerBcg.jpeg') center no-repeat;
        background-attachment: fixed;
        background-size: cover;
        animation: zoomInHeader 20s 1s infinite;
    }
    @keyframes zoomInHeader {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2) translateX(-5%);
        }
        100% {
            transform: scale(1);
        }
    }
    .title-heading {
        background-color: rgb(0, 0, 0, 0.4);
        border-left: 0.3rem solid var(--mainBlue);
    }
    .title {
        font-weight: 700;
        font-size: 1.9rem;
    }
    @media screen and (min-width: 768px) {
        .title {
            font-size: 3rem;
        }
    }
    .title-icon {
        color: var(--mainBlue);
        text-decoration: none !important;
    }
    .title-icon:hover {
        color: var(--mainBlue);
        opacity: 0.6;
    }
    /*End of header*/

    /* Skills Title*/
    .section-title-special {
        color: var(--mainWhite);
        background-color: var(--mainBlue);
        padding: 0.5rem 2rem;
        clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
    }

    /*Skills*/

    .skills-icon {
        color: var(--mainYellow);
        background-color: var(--mainGrey);
        font-size: 3rem;
    }
    .skills-icon:hover {
        color: var(--mainYellow);
    }
    .skills-underline {
        width: 4rem;
        height: 0.3rem;
        background-color: var(--mainBlue);
        margin: 1rem auto;
    }

    /*Car inventory*/
    .inventory {
        background-color: var(--mainGrey);
    }
    .car-card {
        border-radius: 0 !important;
    }
    .card-img {
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
    }
    .car-value {
        background-color: var(--mainBlue);
        color: var(--mainWhite);
        clip-path: polygon(15% 0, 85% 0, 100% 100%, 0 100%);
        transition: all 0.5s linear;
    }
    .car-value:hover {
        clip-path: polygon(0% 0, 100% 0, 100% 100%, 0 100%);
    }

    /*Question section*/
    .question {
        background: url('../../img/questionBcg.jpeg') center/cover fixed no-repeat;
    }
    .question-gray {
        background: rgba(79, 109, 122, 0.75);
    }
    .question-yellow {
        background: rgba(277, 181, 5, 0.75);
    }
    .question-icon {
        font-size: 4rem;
        color: var(--mainBlue);
        transition: all 0.5s ease-in-out;
    }
    .question-icon:hover {
        color: var(--mainBlue);
        transform: translateY(-10%);
    }
    .question-info {
        color: var(--mainWhite);
    }

    /*Featured*/
    .featured {
        background-color: var(--mainGrey);
    }
    .featured-item {
        background-color: var(--mainWhite);
        border-radius: 0.5rem;
        cursor: pointer;
        opacity: 0.5;
        transition: all 0.5s ease-in-out;
    }
    .featured-item:hover {
        opacity: 1;
        transform: scale(1.05);
    }
    .featured-icon {
        font-size: 1.5rem;
        color: var(--mainBlue);
        cursor: pointer;
        transition: all 0.5s ease-in-out;
    }
    .featured-icon:hover {
        color: var(--mainBlue);
    }
    .img-container {
        background-color: var(--mainBlue);
        position: relative;
        overflow: hidden;
    }
    .featured-photo {
        transition: all 1s ease-in-out;
    }
    .img-container:hover .featured-photo {
        opacity: 0.5;
        transform: scale(1.3);
    }
    .featured-link {
        position: absolute;
        top: 50%;
        left: 50%;
        font-size: 3rem;
        transform: translate(-50%, -50%);
        color: var(--mainBlack);
        opacity: 0;
        transition: all 1s ease-in-out;
    }
    .featured-link:hover {
        color: var(--mainWhite);
    }
    .img-container:hover .featured-link {
        color: var(--mainWhite);
        opacity: 1;
    }

    /*Gallery section*/
    .gallery-item {
        background-color: var(--mainYellow);
        position: relative;
        cursor: pointer;
    }
    .gallery-img {
        transition: all 0.5s ease-in-out;
    }
    .gallery-item:hover .gallery-img {
        opacity: 0.5;
    }
    .gallery-item::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all 1s ease-in-out;
        transform: scale(0);
        background-image: url("../img/PMJLogoFondo.png");
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        opacity: 0.8;
    }
    .gallery-item:hover:after {
        transform: scale(1);
    }

    /*contact section*/
    .contact {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url(../../img/headerBcg.jpeg) center/cover fixed no-repeat;
    }
    .contact-input {
        font-size: 1.5rem;
        text-transform: capitalize;
        background-color: transparent;
        border-color: var(--mainYellow);
        color: var(--mainYellow) !important;
    }
    .contact-input::placeholder {
        color: var(--mainYellow);
    }
    .contact-input:focus {
        background-color: transparent;
        border-color: var(--mainYellow);
    }
    .contact-btn {
        text-transform: uppercase;
        color: var(--mainYellow);
        border-color: var(--mainYellow);
    }
    .contact-btn:hover {
        background-color: var(--mainYellow);
        color: var(--mainWhite);
    }

    /*Services Section*/
    .services {
        position: relative;
        min-height: 85vh;
        min-width: 95vw;
        margin: 0 auto;
        clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
    }
    .video-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -3;
    }
    .video-item {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--transparentBlue);
        z-index: -2;
    }
    .service {
        background-color: var(--mainBlack);
        color: var(--mainWhite);
        transition: all 1s ease-in-out;
    }
    .service:hover {
        background-color: var(--mainWhite);
        color: var(--mainBlack);
        padding-left: 2.2rem !important;
    }
    .service-icon {
        font-size: 4rem;
        color: var(--mainYellow);
    }

    /* Customer section */
    .customer-card-body {
        margin-top: -4rem;
        color: var(--mainGrey);
    }
    .customer-img {
        border: 0.4rem solid var(--mainWhite);
    }
    .customer-name {
        color: var(--mainBlue);
        margin: 0.2rem !important;
    }
    .customer-icon {
        font-size: 2rem;
        color: var(--mainGrey);
    }
    .customer-quote {
        max-width: 90%;
    }
    /* Footer */

    .footer {
        background-color: var(--mainBlack);
    }
    .footer-icon {
        color: var(--mainYellow);
        font-size: 1.5rem !important;
        text-decoration: none !important;
        transition: all 0.5s ease-in-out;
    }
    .footer-icon:hover {
        color: var(--mainWhite);
    }
    .hide {
        display: none;
    }
</style>
<script>
    // hide Preloader after page load finish
    const hidePreloader = () => {
        document.querySelector('.preloader').classList.add('hidePreloader');
    };
    window.addEventListener('load', hidePreloader);

    // Car filtering
    const filterButtons = document.querySelectorAll('.filter-button');

    filterButtons.forEach(button => {
        button.addEventListener('click', e => {
            const category = e.currentTarget.dataset.id;
            const germanCars = document.querySelectorAll('[data-group="[german-car]"]');
            const americanCars = document.querySelectorAll('[data-group="[american-car]"');

            switch (category) {
                case 'all': {
                    americanCars.forEach(americanCar => americanCar.classList.remove('hide'));
                    germanCars.forEach(germanCar => germanCar.classList.remove('hide'));
                    break;
                }
                case 'american': {
                    germanCars.forEach(germanCar => germanCar.classList.add('hide'));
                    americanCars.forEach(americanCar => americanCar.classList.remove('hide'));
                    break;
                }
                case 'german': {
                    americanCars.forEach(americanCar => americanCar.classList.add('hide'))
                    germanCars.forEach(germanCar => germanCar.classList.remove('hide'));
                    break;
                }
                default:
                    throw new Error('should not reach out here');
            }
        });
    });
</script>
</html>

