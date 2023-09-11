{{-- Base Css --}}
@vite('resources/css/app.css')
@vite('resources/css/custom-styles.css')
{{-- Additional --}}
@stack('styles')

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
{{-- livewire --}}
@livewireStyles