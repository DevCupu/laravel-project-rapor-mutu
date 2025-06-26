@props(['color' => 'gray', 'title' => '', 'icon' => 'info'])

<div class="relative bg-{{ $color }}-50 rounded-xl shadow hover:shadow-md p-5 transition">
    <div class="absolute -top-5 left-5 bg-{{ $color }}-200 p-3 rounded-full shadow-md">
        <i class="fas fa-{{ $icon }} text-{{ $color }}-700 text-xl"></i>
    </div>
    <div class="pt-6">
        <h4 class="text-md font-semibold text-{{ $color }}-900">{{ $title }}</h4>
        <p class="text-sm text-gray-700 mt-2">
            {{ $slot }}
        </p>
    </div>
</div>
