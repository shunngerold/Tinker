<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>Profile | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')
    
    {{-- Content --}}
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        Computer Finder Page
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>