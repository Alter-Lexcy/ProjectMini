<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="h-screen md:flex">
        <div class="relative overflow-hidden md:flex w-1/2 justify-around items-center hidden"
            style="background-image: url('img/background-login.png'); background-size: cover; background-position: center;">

            <!-- Logo Smart-Lab di pojok kiri atas -->
            <div class="absolute top-0 left-0 p-2 z-10">
                <img src="img/SMART-LAB (DARK MODE).png" alt="LOGO SMART-LAB" class="w-64">
                <!-- Ukuran bisa disesuaikan -->
            </div>

            <!-- Animasi Lottie di tengah -->
            <div class="flex justify-center items-center w-full h-full">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/f256ae59-5457-4979-9aaa-4e825312fbfd/Ycwn8A8gFH.json"
                    background="transparent" speed="1" style="width: 450px;" loop autoplay></dotlottie-player>
            </div>
        </div>
        <!-- Main form section -->
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form method="POST" action="{{ route('login') }}" class="bg-white w-full max-w-md">
                @csrf
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Masuk</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Masukkan akun anda sesuai dengan email dan password
                    yang benar!</p>

                {{-- Account --}}
                <div
                    class="flex items-center border-2 py-2 px-4 rounded-2xl mb-4 w-full focus-within:border-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none text-lg py-3"
                        type="email" name="email" placeholder="Email" :value="old('email')" autofocus
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- Password --}}
                <div
                    class="flex items-center border-2 py-2 px-4 rounded-2xl w-full focus-within:border-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <input id="passwordInput"
                        class="pl-2 outline-none border-none w-full focus:ring-0 focus:border-none text-lg py-3"
                        type="password" name="password" placeholder="Password" autocomplete="current-password" />
                    <button type="button" onclick="togglePasswordVisibility()">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-400 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 3C5.58 3 2 6.58 2 10s3.58 7 8 7 8-3.58 8-7-3.58-7-8-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" />
                            <path d="M10 8a2 2 0 110 4 2 2 0 010-4z" />
                        </svg>
                    </button>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Masuk') }}
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

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById("passwordInput");
        const eyeIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.setAttribute("d", "M10 3C5.58 3 2 6.58 2 10s3.58 7 8 7 8-3.58 8-7-3.58-7-8-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"); // Gambar mata terbuka
        } else {
            passwordInput.type = "password";
        }
    }
</script>
