<?php include('BDconection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de almacen</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav class="bg-gray border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKeoT-4k19E_8brPg81Sv3N39tpQbe03Gecw&usqp=CAU" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Almacen</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Buscar</span>
                </button>
                <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Buscar ícono</span>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
                </div>
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Abrir menú</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar...">
                </div>
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Almacen</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Abrir menú</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
    </header>
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                </svg>
                <span class="ml-3">Ventas</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Administración</span>
                <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Jefatura</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Mensajes</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Productos</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Inscribirse</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                    <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                    <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Iniciar Sesión</span>
                </a>
            </li>
        </ul>
    </div>
    </aside>
    <div class="p-4 sm:ml-64">
        <div class="sm:hidden">
            <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>ALMACEN</option>
                <option>INGRESOS</option>
                <option>SALIDAS</option>
                <option>OTROS</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
            <li class="w-full">
                <a href="index.php" class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">ALMACEN</a>
            </li>
            <li class="w-full">
                <a href="entrada.php" class="inline-block w-full p-4 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">INGRESOS</a>
            </li>
            <li class="w-full">
            <a href="salida.php" class="inline-block w-full p-4 text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">SALIDAS</a>
            </li>
            <li class="w-full">
                <a href="otros.php" class="inline-block w-full p-4 bg-white rounded-r-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">OTROS</a>
            </li>
        </ul>
        <div class="cuerpo">
            <div class="titulo">
                <h1 class="titulo"> SALIDA DE PRODUCTOS </h1>
            </div>
            <div class="separador">
                <hr class="linea_g">
            </div>
            <div class="centro">
                <div class="tabla_botones">
                    <div class="espacio_tabla">
                                <div class="relative overflow-x-auto">
                                    <table class="w-full text-sm text-left text-white-500 dark:text-white-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <th scope="col" class="px-6 py-3" width="25%"> ID </th>
                                            <th scope="col" class="px-6 py-3" width="25%"> Código de producto </th>
                                            <th scope="col" class="px-6 py-3" width="25%"> Cantidad </th>
                                            <th scope="col" class="px-6 py-3" width="25%"> Fecha </th>
                                        </thead>
                                        <tbody>
                                            <!-- PARA QUE SE AGREGUEN A LA TABLA-->
                                            <?php
                                                $sql = "SELECT * FROM salida"; 
                                                $query = $connect -> prepare($sql); 
                                                $query -> execute(); 
                                                $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                                                if($query -> rowCount() > 0) { 
                                                    foreach($results as $result) { 
                                                    echo "<div class='texto_negro'> <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>
                                                    <td class='px-6 py-4'>".$result -> id_salida."</td>
                                                    <td class='px-6 py-4'>".$result -> codigo."</td>
                                                    <td class='px-6 py-4'>".$result -> cantidad_s."</td>
                                                    <td class='px-6 py-4'>".$result -> fecha_salida."</td>
                                                    </tr> </div>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                    <div class="espacio_botones">
                        <a href="index.php">
                            <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Desabastecer
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </button>
                        </a> 
                    </div>
                </div>
                <div class="espacio2"></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>