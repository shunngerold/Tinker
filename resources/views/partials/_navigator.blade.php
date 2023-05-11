{{-- 1st Navigator --}}
<nav class="p-5 text-white bg-slate-700 shadow-md md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center">
        <span class="text-5xl ml-5">
            <a href="/">🅃🄸🄽🄺🄴🅁</a>
        </span>
        <span class="text-3xl cursor-pointer md:hidden block mx-2">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>

    <ul class="md:flex md:items-center z-40 md:z-auto md:static absolute bg-slate-400 md:bg-slate-700 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0 font-medium">
            <ion-icon class="text-2xl" name="heart-outline"></ion-icon>
            <a href="#" class="text-2xl">FAVORITES</a>
        </li>

        @auth
            <li class="mx-4 my-6 md:my-0 font-medium">
                <ion-icon class="text-2xl" name="person-outline"></ion-icon>
                <a href="{{ route('user.profile') }}" class="text-2xl uppercase">{{ auth()->user()->lname }}</a>
            </li>
        @else
            <li class="mx-4 my-6 md:my-0 font-medium">
                <ion-icon class="text-2xl" name="log-in-outline"></ion-icon>
                <a href="{{ route('user.login') }}" class="text-2xl">LOGIN</a>
            </li>
        @endauth
    </ul>
</nav>

{{-- 2nd Navigator --}}
<div class="md:p-1 top-0 p-4 text-white bg-black shadow-md md:flex md:items-center md:justify-center z-0">
    <ul class="flex items-center justify-center">
        <li class="md:mx-12 mx-4">
            <a href="{{ route('user.category') }}" class="md:text-md text-md font-semibold">CATEGORIES</a>
        </li>
        <li class="md:mx-12 mx-4">
            <a href="{{ route('user.brands') }}" class="md:text-md text-md font-semibold">BRANDS</a>
        </li>
        <li class="md:mx-12 mx-4">
            <a href="#" class="md:text-md text-md font-semibold">COMPONENT CHECKER</a>
        </li>
    </ul>
</div>

{{-- For responsive --}}
<script>
    function Menu(e) {
        let list = document.querySelector('ul')
        e.menu === 'close' ? 
        (
            e.menu = "menu", 
            list.classList.remove('top-[70px]'), 
            list.classList.remove('opacity-100')
        ):
        (
            e.menu = "close", 
            list.classList.add('top-[70px]'), 
            list.classList.add('opacity-100')
        )
    }
</script>
  