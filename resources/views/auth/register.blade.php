<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Employee Number -->
        <div>
            <x-input-label for="employee_number" :value="__('Número de Empleado')" />
            <x-text-input id="employee_number" class="block mt-1 w-full" type="text" name="employee_number"
                :value="old('employee_number')" required autofocus autocomplete="employee_number" />
            <x-input-error :messages="$errors->get('employee_number')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Company & Department -->
        <div class="mt-4">
            <div class="row">
                <div class="col-md-6">
                    <x-input-label for="company_id" :value="__('Compañia')" />
                    <select name="company_id" id="company_id" class="form-control" required>
                        <option value="" disabled selected>---</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"
                                {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
                </div>

                <div class="col-md-6">
                    <x-input-label for="department_id" :value="__('Departamento')" />
                    <select name="department_id" id="department_id" class="form-control" required>
                        <option value="" disabled selected>---</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" data-company="{{ $department->company_id }}"
                                {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                {{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('department_id')" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('¿Ya se ha registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Script para filtrar departamentos por empresa -->
    <script src="{{ asset('js/filterDepartmentsInCreate.js') }}"></script>
</x-guest-layout>
