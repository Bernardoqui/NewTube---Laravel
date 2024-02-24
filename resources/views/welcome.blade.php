<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NewTube</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/6fac992168.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])


    </head>

    <body>

        <header>
            <nav class="h-screen flex items-center max-h-28 justify-between z-50 relative" style="background-color: #2d0a31">
                <div class="flex items-center ml-10 logo">
                    <i class="fa-solid fa-circle-play text-white text-6xl shadow-2xl m-2 "></i>
                    <p class="text-white text-4xl">Tube</p>
                </div>


                <!-- component -->
                <div class='w-1/3'>
                    <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <input
                            class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                            type="text"
                            id="search"
                            placeholder="Search something.." />
                    </div>
                </div>

                <div class="icons text-white text-3xl  mr-10">
                    <i class="fa-regular fa-bell shadow-2xl m-5 cursor-pointer"></i>
                    <a href="{{ url('/login') }}" class="{{ request()->is('login') ? 'active' : '' }}"><i class="fa-regular fa-user shadow-2xl m-5 cursor-pointer"></i></a>

                </div>
            </nav>



            <div class="slide-menu z-40 ">

                <div class="relative top-1/4 flex justify-center">
                    <div class="menuLinks">
                        <ul>
                            <li>DashboardPage</li>
                            <li>Subscricoes</li>
                            <li>Tendências</li>
                        </ul>
                        <ul>
                            <li>Meu Canal</li>
                            <li>Histórico</li>
                            <li>Ver mais tarde</li>
                        </ul>
                        <ul>
                            <li>Meu Canal</li>
                            <li>Histórico</li>
                            <li>Ver mais tarde</li>
                        </ul>
                    </div>
                </div>


                <i class="fa-solid fa-chevron-up text-white text-3xl closeMenu" onclick="closeMenu()"></i>
                <i class="fa-solid fa-chevron-down text-white text-3xl openMenu" onclick="openMenu()"></i>
            </div>

        </header>


        <main class="mainHomePage">

            <div class="cards flex justify-between flex-wrap text-white">

                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>
                <div class="vid-card">
                    <img class="vid-img" src="/img/vid_test.png">
                    <div class="card-content">
                        <img src="/img/userimg.jpg">
                        <h3>Titulo teste Titulo teste Titulo teste Titulo teste itulo teste Titulo teste Titulo teste Titulo teste</h3>
                    </div>
                </div>

            </div>


        </main>


        <script>
            function openMenu() {
                document.querySelector('.slide-menu').style.transform = 'translateY(0)';
                document.querySelector('.closeMenu').style.display = 'block';
                document.querySelector('.openMenu').style.display = 'none';
            }

            function closeMenu() {
                document.querySelector('.slide-menu').style.transform = 'translateY(-96%)';
                document.querySelector('.closeMenu').style.display = 'none';
                document.querySelector('.openMenu').style.display = 'block';
            }
        </script>

    </body>
</html>
