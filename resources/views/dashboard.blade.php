<x-app-layout>
    <div class="home">
                        <h1 class="home__title">Luxury Concessionaire</h1>

                        <div class="home__img">
                            <img src="../img/lamborghini.png" alt="">
                        </div>

                        <div class="home__information">
                            <h2 class="home__subtitle">LAMBORGHINI<br>GALLARDO LP560</h2>
                            <p class="home__description"></p>
                        </div>

                        <div class="box">
                            <div class="box__medium box--dark">
                                <ion-icon name="speedometer-outline" class="icon-box"></ion-icon>
                                <h3 class="box__medium-title d-inline">3.7</h3>
                                <span class="box__medium-description d-block">Sec.</span>
                                <span class="box__medium-detail">0-100 km/h</span>
                            </div>

                            <div>
                                <div class="box__small box--dark">
                                    <ion-icon name="trending-up-outline" class="icon-box icon-box--small"></ion-icon>
                                    <h3 class="box__small-title d-inline">325</h3>
                                    <span class="box__small-description d-block">km/h</span>
                                    <span class="box__small-detail">Top Speed</span>
                                </div>
                                <div class="box__small box--dark">
                                    <ion-icon name="car-sport-outline" class="icon-box icon-box--small"></ion-icon>
                                    <h3 class="box__small-title d-inline">8.000</h3>
                                    <span class="box__small-description d-block">r.p.m</span>
                                    <span class="box__small-detail">Power</span>
                                </div>
                            </div>
                        </div>



                        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                                <div class="flex items-center gap-4">

                                </div>
                            </div>

                            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                            </div>
                        </div>
                    </div>
    <style>
        /*Google fonts*/
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap");
        /*----- VARIABLES CSS -----*/
        /*Varibles en general*/
        /*Colores*/
        :root {
            --first-color: #EFD50C;
            --text-color: #B7B7B7;
            --bg-color: #141313;
            --white-color: #fff;
            --icon-color: #ED4C50; }

        /*Fuente y Tipografia*/
        :root {
            --body-font: 'Montserrat', sans-serif;
            --big-font-size: 3rem;
            --h2-font-size: 1.25rem;
            --normal-font-size: 0.93rem;
            --small-font-size: 0.75rem;
            --smaller-font-size: 0.5rem; }
        @media screen and (min-width: 768px) {
            :root {
                --big-font-size: 6rem;
                --h2-font-size: 1.5rem;
                --normal-font-size: 1rem; } }

        /*z index*/
        :root {
            --z-back: -10;
            --z-normal: 1;
            --z-tooltip: 10;
            --z-fixed: 100;
            --z-modal: 1000; }

        /*----- BASE -----*/
        *, ::before, ::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box; }

        body {
            margin: 3rem 0 0 0;
            font-family: var(--body-font);
            font-weight: initial;
            background-color: var(--bg-color);
            overflow: hidden; }

        h1, h2, h3 {
            margin: 0;
            font-weight: bold; }

        ul {
            margin: 0;
            padding: 0;
            list-style: none; }

        a {
            text-decoration: none; }

        img {
            max-width: 100%;
            height: auto; }

        p {
            font-size: var(--normal-font-size); }

        /*CONTENT*/
        .d-block {
            display: block; }

        .d-inline {
            display: inline-block; }

        /*----- LAYOUT -----*/
        .bd-grid {
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: 100%;
            grid-template-columns: 100%;
            max-width: 1200px;
            margin-left: 1rem;
            margin-right: 1rem; }

        .l-header {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--bg-color);
            color: var(--first-color);
            z-index: var(--z-fixed); }

        /*----- PAGES -----*/
        /*Nav*/
        .nav {
            height: 3rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-weight: bold; }
        @media screen and (max-width: 768px) {
            .nav__menu {
                position: fixed;
                top: -100%;
                left: 0;
                background-color: var(--bg-color);
                width: 100%;
                height: 40%;
                padding: 2rem;
                border-radius: 0 0 1rem 1rem;
                -webkit-box-shadow: 10px 10px 10px #000;
                box-shadow: 10px 10px 10px #000;
                -webkit-transition: .5s;
                transition: .5s; } }
        .nav__list {
            text-align: center; }
        .nav__item {
            margin-bottom: 1.5rem; }
        .nav__link {
            padding: .5rem;
            color: var(--text-color); }
        .nav__link:hover {
            color: var(--first-color); }
        .nav__logo {
            font-size: var(--normal-font-size); }
        .nav__toggle {
            font-size: 1.5rem;
            cursor: pointer; }

        /*Aparecer menu*/
        .show {
            top: 3rem; }

        /*Home*/
        .main-home {
            height: calc(100vh - 3rem);
            padding-left: 1rem;
            background-color: var(--bg-color); }

        .home {
            position: relative;
            margin-top: -10vh;
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: 1fr;
            grid-template-columns: 1fr;
            row-gap: 2.3rem;
            height: 100%;
            -ms-flex-line-pack: end;
            align-content: flex-end;
            overflow: hidden; }
        .home__title {
            position: absolute;
            margin-top: -3vh;
            font-size: var(--big-font-size);
            -webkit-writing-mode: vertical-rl;
            -ms-writing-mode: tb-rl;
            writing-mode: vertical-rl;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            color: var(--text-color); }
        .home__img {
            position: absolute;
            top: 30%;
            left: 20%;
            width: 394px;
            z-index: var(--z-normal);
        }
        .home__information {
            margin-top: 15vh;
            padding-left: 4.25rem;
            padding-right: 2rem;
            color: var(--text-color); }
        .home__subtitle {
            font-size: var(--h2-font-size);
            color: var(--first-color); }

        /*----- COMPONENTS -----*/
        .icon-box {
            color: var(--icon-color);
            font-size: 3rem; }
        .icon-box--small {
            font-size: 1rem; }

        .box {
            margin-top: 10vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-bottom: 1rem; }
        .box--dark {
            background-color: var(--bg-color);
            color: var(--text-color);
            -webkit-box-shadow: 10px 10px 30px #000;
            box-shadow: 10px 10px 30px #000;
            border-radius: 1rem;
            text-align: center; }
        .box__medium {
            width: 150px;
            height: 150px;
            padding: 1.5rem .75rem;
            margin-right: 2rem; }
        .box__medium-title {
            font-size: 3rem;
            color: var(--white-color); }
        .box__medium-description {
            font-size: var(--normal-font-size);
            margin-bottom: .5rem; }
        .box__medium-detail {
            font-size: var(--small-font-size); }
        .box__small {
            width: 70px;
            height: 70px;
            padding: .75rem 0;
            margin-bottom: .625rem; }
        .box__small-title {
            font-size: var(--small-font-size);
            color: var(--white-color); }
        .box__small-detail {
            font-size: var(--smaller-font-size); }

        /*MEDIA QUERIES*/
        @media screen and (min-width: 768px) {
            body {
                margin: 0; }
            .main-home {
                height: 100vh;
                padding: 0; }
            .nav__list {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex; }
            .nav__item {
                margin-right: 2rem;
                margin-bottom: 0; }
            .nav__toggle {
                display: none; }
            .home {
                height: 100vh;
                -ms-grid-columns: 402px 322px;
                grid-template-columns: 402px 322px;
                -ms-grid-rows: 152px;
                grid-template-rows: 152px;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-bottom: 2rem; }
            .home__title {
                top: 23%;
                left: 0;
                right: 0;
                -webkit-writing-mode: initial;
                -ms-writing-mode: initial;
                writing-mode: initial;
                -webkit-transform: initial;
                transform: initial;
                text-align: center; }
            .home__img {
                width: 569px;
                top: 32%;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto; }
            .home__information {
                padding: 0; } }

        @media screen and (min-width: 1200px) {
            .bd-grid {
                margin-left: auto;
                margin-right: auto; } }
    </style>
    <!-- ICONOS -->
    <script  type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>

    <!-- ANIMATION -->
    <script>
        /*TITLE Y IMG*/
        gsap.from('.home__title', {opacity: -1, duration: 1.5, delay:1})
        gsap.from('.home__img', {opacity: 0, duration: 1, delay:1, x: 100})
        gsap.from('.home__information', {opacity: 0, duration: 1, delay:1.2, y: -30})

        /*BOX*/
        gsap.from('.box__medium', {opacity: 0, duration: 1.5, delay:1.3, y: -50})
        gsap.from('.box__small', {opacity: -1, duration: 1.5, delay:1.4, y: -50})
    </script>

    <script>
        const showMenu = (toggleId, navId) =>{
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId)

            if(toggle && nav){
                toggle.addEventListener('click', ()=>{
                    nav.classList.toggle('show')
                })
            }
        }

        showMenu('nav__toggle','nav-menu')
    </script>
</x-app-layout>
