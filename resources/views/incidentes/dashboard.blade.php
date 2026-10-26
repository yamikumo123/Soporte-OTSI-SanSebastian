<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Soporte OTSI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-900 text-white p-4 flex justify-between items-center shadow-lg">
        <h1 class="text-xl font-bold">Muni San Sebastián - Panel de Soporte OTSI</h1>
        <span class="text-sm bg-blue-800 px-3 py-1 rounded-full">Personal Técnico</span>
    </nav>

    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Tickets Pendientes</h2>
            <a href="{{ route('incidentes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 font-medium">+ Nuevo Ticket</a>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-xs">
                        <th class="p-3">ID Ticket</th>
                        <th class="p-3">Solicitante</th>
                        <th class="p-3">Área</th>
                        <th class="p-3">Prioridad</th>
                        <th class="p-3">Estado</th>
                        <th class="p-3 text-center">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <tr>
                        <td class="p-3 font-semibold text-blue-600">#TK-001</td>
                        <td class="p-3">María Delgado</td>
                        <td class="p-3">Rentas</td>
                        <td class="p-3"><span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded">Alta</span></td>
                        <td class="p-3"><span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded">Pendiente</span></td>
                        <td class="p-3 text-center">
                            <a href="#" class="bg-indigo-600 text-white px-3 py-1 rounded text-xs hover:bg-indigo-700">Diagnosticar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>