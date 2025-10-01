<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Listado de Productos</h3>
                    
                    <table class="table-auto w-full border">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">Nombre</th>
                                <th class="px-4 py-2 border">Precio</th>
                                <th class="px-4 py-2 border">Stock</th>
                            </tr>
                        </thead>
                        <tbody id="productos-body">
                            <!-- Aquí se insertarán los productos -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Consumir API con fetch
        //Tambien puede buscar el enlace automaticamente para ver el json http://127.0.0.1:8000/productos

        fetch("{{ url('/productos') }}")
            .then(response => response.json())
            .then(data => {
                let tbody = document.getElementById("productos-body");
                data.forEach(producto => {
                    let row = `
                        <tr>
                            <td class="border px-4 py-2">${producto.id}</td>
                            <td class="border px-4 py-2">${producto.nombre}</td>
                            <td class="border px-4 py-2">$${producto.precio}</td>
                            <td class="border px-4 py-2">${producto.stock}</td>
                        </tr>
                    `;
                    tbody.innerHTML += row;
                });
            })
            .catch(error => console.error("Error:", error));
    </script>
</x-app-layout>
