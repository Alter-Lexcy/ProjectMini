<x-guest-layout>
    <div class="h-screen md:flex">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 justify-around items-center hidden">

            <!-- Logo Smart-Lab di pojok kiri atas -->
            <div class="absolute top-0 left-0 p-2 z-10">
                <img src="img/SMART-LAB (DARK MODE).png" alt="LOGO SMART-LAB" class="w-64">
                <!-- Ukuran bisa disesuaikan -->
            </div>

            <!-- Animasi Lottie di tengah -->
            <div class="flex justify-center items-center w-full h-full">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

                <dotlottie-player src="https://lottie.host/2c3a78ed-ffee-496e-8b09-efbaba20b693/QwmGtW4fee.json"
                    background="transparent" speed="1" style="width: 500px;" loop autoplay></dotlottie-player>
            </div>
        </div>


        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form method="POST" action="{{ route('register') }}" class="bg-white w-full max-w-lg">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Register</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Daftarkan diri anda dan buat akun sekarang juga!</p>

                <!-- Name and Email (full width) -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <!-- Name -->
                    <div
                        class="flex items-center border-2 py-2 px-3 rounded-2xl focus-within:border-blue-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input id="name"
                            class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none" type="text"
                            name="name" :value="old('name')" autofocus placeholder="Nama" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div
                        class="flex items-center border-2 py-2 px-3 rounded-2xl focus-within:border-blue-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor">
                            <path d="M16 12v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input id="email"
                            class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none" type="email"
                            name="email" :value="old('email')" placeholder="Email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Password and Confirm Password (side by side) -->
                <div class="flex flex-col md:flex-row gap-4 mt-4">
                    <!-- Password -->
                    <div
                        class="flex items-center border-2 py-2 px-3 rounded-2xl focus-within:border-blue-500 transition w-full md:w-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <input id="password"
                            class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none" type="password"
                            name="password" placeholder="Password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div
                        class="flex items-center border-2 py-2 px-3 rounded-2xl focus-within:border-blue-500 transition w-full md:w-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <input id="password_confirmation"
                            class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none" type="password"
                            name="password_confirmation" placeholder="Konfirmasi Password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>


                <!-- Register Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <p class="text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                            Log in sekarang!
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
