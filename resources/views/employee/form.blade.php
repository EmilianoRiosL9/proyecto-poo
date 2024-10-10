<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $employee?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="lastname" :value="__('Lastname')"/>
        <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full" :value="old('lastname', $employee?->lastname)" autocomplete="lastname" placeholder="Lastname"/>
        <x-input-error class="mt-2" :messages="$errors->get('lastname')"/>
    </div>
    <div>
        <x-input-label for="hired_at" :value="__('Hired At')"/>
        <x-text-input id="hired_at" name="hired_at" type="text" class="mt-1 block w-full" :value="old('hired_at', $employee?->hired_at)" autocomplete="hired_at" placeholder="Hired At"/>
        <x-input-error class="mt-2" :messages="$errors->get('hired_at')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>