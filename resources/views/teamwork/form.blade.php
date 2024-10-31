<div class="space-y-6">
    <div>
        <x-input-label for="employee1_id" :value="__('Employee 1')" />
        <select id="employee1_id" name="employee1_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            <option value="">Seleccione un empleado</option>
            @foreach($employees as $employee)
            <option value="{{ $employee->id }}" {{ old('employee1_id') == $employee->id ? 'selected' : '' }}>
                {{ $employee->name }} {{ $employee->lastname }} <!-- Mostrar nombre y apellido -->
            </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('employee1_id')" />
    </div>

    <div>
        <x-input-label for="employee2_id" :value="__('Employee 2')" />
        <select id="employee2_id" name="employee2_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            <option value="">Seleccione un empleado</option>
            @foreach($employees as $employee)
            <option value="{{ $employee->id }}" {{ old('employee2_id') == $employee->id ? 'selected' : '' }}>
                {{ $employee->name }} {{ $employee->lastname }} <!-- Mostrar nombre y apellido -->
            </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('employee2_id')" />
    </div>

    <div>
        <x-input-label for="vehicle_id" :value="__('Vehicle')" />
        <select id="vehicle_id" name="vehicle_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            <option value="">Seleccione un vehículo</option>
            @foreach($vehicles as $vehicle)
            <option value="{{ $vehicle->id }}" {{ old('vehicle_id') == $vehicle->id ? 'selected' : '' }}>
                {{ $vehicle->marca }} {{ $vehicle->modelo }} ({{ $vehicle->patente }}) <!-- Mostrar marca, modelo y patente -->
            </option>
            @endforeach
        </select>
        <x-input-error class="mt-2" :messages="$errors->get('vehicle_id')" />
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>