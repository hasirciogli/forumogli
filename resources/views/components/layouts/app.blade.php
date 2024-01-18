<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-black">

    <div class="flex flex-row w-full h-16 min-h-16 border-b bg-black duration-300">
        <div id="shitnav" class="flex flex-row w-full h-16 min-h-16 border-b bg-black duration-300">
            <nav class="flex max-w-6xl w-full mx-auto items-center text-white gap-16 border-b border-b-black2 duration-300">
                <h1 class="font-quicksand font-semibold md:pl-14 text-2xl text-white">
                    Forumogli
                </h1>
    
                <a href="/resources" class="flex flex-row items-center gap-4 lettercase text-white2 text-sm font-quicksand duration-300">
                    Resources
                    <img src="https://cdn-icons-png.flaticon.com/512/1091/1091669.png" class="w-6 h-6" alt=""
                        srcset=""></a>
                </a>
                <a href="/resources" class="flex flex-row items-center gap-4 lettercase text-white2 text-sm font-quicksand duration-300">
                    Games
                    <img src="https://cdn-icons-png.flaticon.com/512/1374/1374723.png" class="w-6 h-6" alt=""
                        srcset=""></a>
                </a>
                <a href="/resources" class="flex flex-row items-center gap-4 lettercase text-white2 text-sm font-quicksand duration-300">
                    Cheats
                    <img src="https://cdn-icons-png.flaticon.com/512/5508/5508225.png" class="w-6 h-6" alt=""
                        srcset=""></a>
                </a>
                <a href="/resources" class="flex flex-row items-center gap-4 lettercase text-white2 text-sm font-quicksand duration-300">
                    NSWF
                    <img src="https://cdn-icons-png.flaticon.com/512/8855/8855362.png" class="w-6 h-6" alt=""
                        srcset=""></a>
    
                <div class="flex flex-1 justify-end">
                    <div
                        class="px-4 py-2 w-fit h-fit text-xs rounded-md bg-orange hover:bg-orange1 hover:cursor-pointer duration-300 ease-in-out font-quicksand font-semibold duration-300">
                        Sign In / Sign Up</div>
                </div>
            </nav>
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function() {
            var nav = document.getElementById('shitnav');
            if (window.scrollY > 100) { // Change 100 to the desired scroll position in pixels
                nav.classList.add('fixed');
                nav.classList.add('shadow');
            } else {
                nav.classList.remove('shadow');
                nav.classList.remove('fixed');
            }
        });
    </script>

    <div
        class="py-14 flex flex-row items-center justify-center w-full border-b border-b-black2 bg-black overflow-hidden rounded-md">
        <div
            class="flex max-w-6xl w-full h-16 min-h-16 mx-auto items-center bg-red rounded-md justify-center text-xl font-quicksand text-white gap-16">
            Place your ads here, starts from $15
        </div>
    </div>



    <div class="flex flex-row w-full bg-black h-full">
        <div class="flex max-w-6xl w-full mx-auto text-white h-full">


            <div class="flex flex-col w-3/12 p-4 gap-2 h-fit">
                <a href="/"
                    class="flex flex-row gap-3 h-10 max-h-10 min-h-10 font-normal font-quicksand text-sm hover:bg-black3 rounded px-2 py-1 flex-1 hover:cursor-pointer hover:gap-4 items-center duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/512/9437/9437514.png" class="w-6 h-6" alt=""
                        srcset="">
                    Welcome
                </a>

                <a href="/forums"
                    class="flex flex-row gap-3 h-10 max-h-10 min-h-10 font-normal font-quicksand text-sm hover:bg-black3 rounded px-2 py-1 flex-1 hover:cursor-pointer hover:gap-4 items-center duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/6576/6576146.png" class="w-6 h-6" alt=""
                        srcset="">
                    Forums
                </a>
            </div>


            <div class="flex flex-1 flex-col w-9/12 overflow-hidden">

                {{ $slot }}

            </div>



        </div>
    </div>

    @include("livewire.brands")
</body>

</html>
