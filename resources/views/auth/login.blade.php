<x-guest-layout>
    <div class="w-full max-w-md bg-white/70 backdrop-blur-lg border border-gray-200 rounded-2xl shadow-xl p-8">

        <!-- Judul -->
        <div class="text-center mb-6">
            <h1 class="text-xl font-bold text-gray-800 leading-tight">Rapor Mutu Pendidikan</h1>
            <p class="text-sm text-gray-600">SMKS Wahyu Makassar</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4 relative">
                <x-input-label for="email" :value="__('Email')" class="text-gray-700" />
                <x-text-input id="email" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username"
                    class="mt-1 w-full pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-indigo-500" />
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>

            <!-- Password -->
            <div class="mb-4 relative">
                <x-input-label for="password" :value="__('Password')" class="text-gray-700" />
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                    class="mt-1 w-full pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-indigo-500" />
                <x-input-error :messages="$errors->get('password')" class="mt-1" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="flex items-center text-sm text-gray-600">
                    <input id="remember_me" type="checkbox" class="mr-2 rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    {{ __('Ingat saya') }}
                </label>

                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                    {{ __('Lupa password?') }}
                </a>
                @endif
            </div>

            <!-- Submit -->
            <div class="mt-6">
                <x-primary-button class="w-full justify-center">
                    {{ __('Masuk') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>