<div class="space-y-6">
    <div>
        <label for="teamwork_id" class="block text-sm font-medium text-gray-700">Seleccionar Equipo de Trabajo:</label>
        <select name="teamwork_id" id="teamwork_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="">Seleccione un equipo de trabajo</option>
            @foreach ($teamworks as $teamwork)
            <option value="{{ $teamwork->id }}">
                {{ $teamwork->employee1->name }} {{ $teamwork->employee1->lastname }} y {{ $teamwork->employee2->name }} {{ $teamwork->employee2->lastname }} - Vehículo: {{ optional($teamwork->vehicle)->patente ?? 'Sin vehículo' }}
            </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="solicitude_id" class="block text-sm font-medium text-gray-700">Seleccionar Solicitud:</label>
        <select name="solicitude_id" id="solicitude_id" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="">Seleccione una solicitud</option>
            @foreach ($solicitudes as $solicitude)
            <option value="{{ $solicitude->id }}">
                {{ $solicitude->DNI }} - {{ $solicitude->nombre }} {{ $solicitude->apellido }}
            </option>
            @endforeach
        </select>
    </div>


    <div>
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Crear Orden
        </button>
    </div>
</div>