<x-app-layout>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <div class="bg-white w-100 p-3 h-25 d-inline-block max-height: 100% max-width: 100%">
        <div class="py-12 d-flex">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <!--<x-jet-welcome />-->
                    <div class="">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary btn-lg">
                                    <a class="nav-link text-light" href="crearPedido">Crear Pedidos</a>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-secondary btn-lg">
                                    <a class="nav-link text-light" href="modificarPedido">Modificar Pedidos</a>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
