<button
    {{ $attributes->merge(['type' => 'submit', 'class' => "block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2"]) }}>
    {{ $slot }}
</button>
