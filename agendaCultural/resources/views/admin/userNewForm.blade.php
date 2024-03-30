<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Panel</title>


</head>

<body class="text-gray-800 font-inter">
    <!--sidenav -->
    <div class="fixed left-0 top-0 w-56 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

            <h2 class="font-bold text-2xl">LOREM <span class="bg-[#f84525] text-white px-2 rounded-md">IPSUM</span></h2>
        </a>
        <ul class="mt-4">
            <span class="text-gray-400 font-bold">ADMIN</span>
            <li class="mb-1 group">
                <a href="{{route('admin.dashboard')}}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Resumen</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{route('admin.users')}}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bx-user mr-3 text-lg'></i>
                    <span class="text-sm">Usuarios</span>
                </a>

            </li>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>
                    <span class="text-sm">Eventos</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bxl-blogger mr-3 text-lg'></i>
                    <span class="text-sm">Experiencias</span>
                </a>

            </li>

        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end sidenav -->

    <main class="w-full md:w-[calc(100%-224px)] md:ml-56 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>

            <ul class="ml-auto flex items-center">
                <li class="mr-1 dropdown">
                    <button type="button"
                        class="dropdown-toggle text-gray-400 mr-4 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24"
                            style="fill: gray;transform: ;msFilter:;">
                            <path
                                d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden max-w-xs w-full bg-white rounded-md border border-gray-100">
                        <form action="" class="p-4 border-b border-b-gray-100">
                            <div class="relative w-full">
                                <input type="text"
                                    class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                                    placeholder="Search...">
                                <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-900"></i>
                            </div>
                        </form>
                    </div>
                </li>

                <button id="fullscreen-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24"
                        style="fill: gray;transform: ;msFilter:;">
                        <path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"></path>
                    </svg>
                </button>
                <script>
                const fullscreenButton = document.getElementById('fullscreen-button');

                fullscreenButton.addEventListener('click', toggleFullscreen);

                function toggleFullscreen() {
                    if (document.fullscreenElement) {
                        // If already in fullscreen, exit fullscreen
                        document.exitFullscreen();
                    } else {
                        // If not in fullscreen, request fullscreen
                        document.documentElement.requestFullscreen();
                    }
                }
                </script>

                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full"
                                    src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg"
                                    alt="" />
                                <div
                                    class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping">
                                </div>
                                <div
                                    class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                        </div>
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">{{ Auth::user()->nombre }}</h2>
                            <p class="text-xs text-gray-500">Administrador</p>
                        </div>
                    </button>
                    <ul
                        class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50"
                                    :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end navbar -->

        <!-- Content -->
        <section class="container px-4 mx-auto">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2 class="text-lg font-medium text-gray-800 dark:text-white">Creación de un nuevo usuario</h2>

                    </div>

                </div>

                <div class="flex items-center mt-4 gap-x-3">


                    <button id="guardarUsuario"
                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 8a3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4 3.91 3.91 0 0 0-4 4zm6 0a1.91 1.91 0 0 1-2 2 1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2zM4 18a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3v1h2v-1a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v1h2z">
                            </path>
                        </svg>


                        <span>Guardar</span>
                    </button>

                </div>
            </div>

            <!-- component -->
            <form id="formularioGuardarUsuario" method="post" action="{{route('admin.storeUser')}}">
                @csrf
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Nombre
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="grid-first-name" type="text" name="nombre" required autofocus placeholder="nombre">

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                Apellidos
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-last-name" type="text" name="apellidos" required autofocus
                                placeholder="apellidos">
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                edad
                            </label>

                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-last-name" type="number" name="edad" required autofocus placeholder="18">

                        </div>
                        <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                telefono
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="grid-first-name" type="text" name="telefono" required autofocus
                                placeholder="telefono">


                        </div>
                        <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                Email
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-last-name" type="email" name="email" required autofocus placeholder="email">
                        </div>

                    </div>

                    <div class="-mx-3 md:flex mb-2">
                        <div class="md:w-1/3 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-zip">
                                Dirección
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-zip" type="text" name="direccion" required autofocus placeholder="direccion">
                        </div>
                        <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-city">
                                Ciudad
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-city" type="text" name="ciudad" required autofocus placeholder="ciudad">
                        </div>
                        <div class="md:w-1/3 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-state">
                                Rol
                            </label>
                            <div class="relative">
                                <select
                                    class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                    id="rol" name="rol" required autofocus>
                                    <option value="asistente">Asistente
                                    </option>
                                    <option value="empresa">Empresa
                                    </option>
                                    <option value="admin">Administrador
                                    </option>
                                </select>
                                <div
                                    class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="-mx-3 md:flex mb-6" id="empresas" style="display: none">
                        <div class="md:w-full px-3">

                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-state">
                                Empresa
                            </label>
                            <div class="relative">

                                <select
                                    class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                    name="empresa" required autofocus>
                                    @foreach($empresas as $empresa)
                                    @if($empresa->nombre != 'admin' && $empresa->nombre != 'asistente')

                                    <option value="{{$empresa->id}}">{{$empresa->nombre}}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                                <div
                                    class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="mt-3 text-grey-dark text-xs italic">Selecciona la empresa asociada al usuario</p>
                        </div>
                    </div>

                </div>
            </form>
        </section>

        <!-- End Content -->
    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    // start: Sidebar
    const sidebarToggle = document.querySelector('.sidebar-toggle')
    const sidebarOverlay = document.querySelector('.sidebar-overlay')
    const sidebarMenu = document.querySelector('.sidebar-menu')
    const main = document.querySelector('.main')
    sidebarToggle.addEventListener('click', function(e) {
        e.preventDefault()
        main.classList.toggle('active')
        sidebarOverlay.classList.toggle('hidden')
        sidebarMenu.classList.toggle('-translate-x-full')
    })
    sidebarOverlay.addEventListener('click', function(e) {
        e.preventDefault()
        main.classList.add('active')
        sidebarOverlay.classList.add('hidden')
        sidebarMenu.classList.add('-translate-x-full')
    })
    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault()
            const parent = item.closest('.group')
            if (parent.classList.contains('selected')) {
                parent.classList.remove('selected')
            } else {
                document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(i) {
                    i.closest('.group').classList.remove('selected')
                })
                parent.classList.add('selected')
            }
        })
    })
    // end: Sidebar

    //Enviar Formulario y validar si están rellenos los campos

    document.getElementById("guardarUsuario").addEventListener("click", function() {
        if (validarCampos()) {
            document.getElementById("formularioGuardarUsuario").submit();
        } else {
            alert("Debe rellenar todos los campos");
        }
    })

    function validarCampos() {
        let nCampos = document.querySelectorAll(
            '#formularioGuardarUsuario input[required], #formularioGuardarUsuario select[required]');

        for (let i = 0; i < nCampos.length; i++) {
            if (nCampos[i].value === '') {
                return false;
            }
        }
        return true;
    }
    //Fin enviar formulario y validar campos

    //Mostrar selector de empresas si el rol seleccionado es de empresa
    if (document.getElementById("rol").value == "empresa") {
        document.getElementById("empresas").style.display = "block";
    }
    document.getElementById("rol").addEventListener("change", function() {
        let rolSeleccionado = this.value;
        let mostrarEmpresas = document.getElementById("empresas");

        if (rolSeleccionado == "empresa") {
            mostrarEmpresas.style.display = "block";
        } else {
            mostrarEmpresas.style.display = "none";
        }
    })
    //Fin mostrar selector de empresas si el rol seleccionado es de empresa



    // start: Popper
    const popperInstance = {}
    document.querySelectorAll('.dropdown').forEach(function(item, index) {
        const popperId = 'popper-' + index
        const toggle = item.querySelector('.dropdown-toggle')
        const menu = item.querySelector('.dropdown-menu')
        menu.dataset.popperId = popperId
        popperInstance[popperId] = Popper.createPopper(toggle, menu, {
            modifiers: [{
                    name: 'offset',
                    options: {
                        offset: [0, 8],
                    },
                },
                {
                    name: 'preventOverflow',
                    options: {
                        padding: 24,
                    },
                },
            ],
            placement: 'bottom-end'
        });
    })
    document.addEventListener('click', function(e) {
        const toggle = e.target.closest('.dropdown-toggle')
        const menu = e.target.closest('.dropdown-menu')
        if (toggle) {
            const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
            const popperId = menuEl.dataset.popperId
            if (menuEl.classList.contains('hidden')) {
                hideDropdown()
                menuEl.classList.remove('hidden')
                showPopper(popperId)
            } else {
                menuEl.classList.add('hidden')
                hidePopper(popperId)
            }
        } else if (!menu) {
            hideDropdown()
        }
    })

    function hideDropdown() {
        document.querySelectorAll('.dropdown-menu').forEach(function(item) {
            item.classList.add('hidden')
        })
    }

    function showPopper(popperId) {
        popperInstance[popperId].setOptions(function(options) {
            return {
                ...options,
                modifiers: [
                    ...options.modifiers,
                    {
                        name: 'eventListeners',
                        enabled: true
                    },
                ],
            }
        });
        popperInstance[popperId].update();
    }

    function hidePopper(popperId) {
        popperInstance[popperId].setOptions(function(options) {
            return {
                ...options,
                modifiers: [
                    ...options.modifiers,
                    {
                        name: 'eventListeners',
                        enabled: false
                    },
                ],
            }
        });
    }
    // end: Popper



    // start: Tab
    document.querySelectorAll('[data-tab]').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault()
            const tab = item.dataset.tab
            const page = item.dataset.tabPage
            const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page +
                '"]')
            document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function(i) {
                i.classList.remove('active')
            })
            document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function(i) {
                i.classList.add('hidden')
            })
            item.classList.add('active')
            target.classList.remove('hidden')
        })
    })
    // end: Tab
    </script>

</body>

</html>