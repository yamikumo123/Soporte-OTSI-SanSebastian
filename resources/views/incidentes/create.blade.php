<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Incidentes - OTSI San Sebastián</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-2xl">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Registrar Nuevo Incidente OTSI</h2>
        
        <form action="{{ route('incidentes.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre del Solicitante</label>
                <input type="text" name="solicitante" required class="w-full border-gray-300 rounded-md p-2 border focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Ej. Juan Pérez">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Área / Subgerencia Municipal</label>
                <input type="text" name="area" required class="w-full border-gray-300 rounded-md p-2 border focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Ej. Gerencia de Infraestructura">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Categoría</label>
                    <select name="categoria" class="w-full border-gray-300 rounded-md p-2 border focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="Redes / Internet">Redes / Internet</option>
                        <option value="Sistema SIGA/SIAF">Sistema SIGA/SIAF</option>
                        <option value="Hardware / Equipos">Hardware / Equipos</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Prioridad</label>
                    <select name="prioridad" class="w-full border-gray-300 rounded-md p-2 border focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option value="baja">Baja</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                        <option value="urgente">Urgente</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción del Problema</label>
                <textarea name="descripcion" rows="4" required class="w-full border-gray-300 rounded-md p-2 border focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Describa brevemente la falla reportada..."></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="reset" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">Limpiar</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Enviar Ticket</button>
            </div>
        </form>
    </div>
</body>
</html>