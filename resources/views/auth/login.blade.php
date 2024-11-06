<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="h-screen md:flex">
        <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">Smart-LAB</h1>
                <p class="text-white mt-1">Smart People, Smarter Learning.</p>
                <button type="button" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">
                    Selengkapnya
                </button>
            </div>
        </div>

        <!-- Main form section -->
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form method="POST" action="{{ route('login') }}" class="bg-white w-full max-w-md">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Login</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Masukkan akun anda sesuai dengan email dan password yang benar!</p>

                {{-- Account --}}
                <div class="flex items-center border-2 py-2 px-4 rounded-2xl mb-4 w-full focus-within:border-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none text-lg py-3"
                        type="email" name="email" placeholder="Email" :value="old('email')" required
                        autofocus autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                {{-- Password --}}
                <div class="flex items-center border-2 py-2 px-4 rounded-2xl w-full focus-within:border-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none text-lg py-3"
                        type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <p class="text-sm text-gray-600">
                        Belum memiliki akun?
                        <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                            Daftar di sini!
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
