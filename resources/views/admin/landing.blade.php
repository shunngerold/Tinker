<!DOCTYPE html>
<html lang="en">
<head>
    <x-head_links />
    <title>CMS | Tinker</title>
</head>
<body class="flex flex-col h-screen justify-between">
    {{-- Navigator --}}
    @include('partials._navigator')

    {{-- Content --}}
    <x-content class="md:pb-20 md:px-20 pb-16 px-auto">
        <form action="" method="post">
            <div class="grid grid-cols-2 w-full h-full mt-10">
                {{-- SideBar --}}
                @include('partials._sidebar')
                {{-- Dashboard --}}
                <div class="">
                    This is a landing Page!!!
                </div>
            </div>
        </form>
    </x-content>

    {{-- Footer --}}
    @include('partials._footer')
</body>
</html>