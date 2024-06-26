<header class="flex flex-col justify-center items-center w-full bg-beige">
    <div class="p-3 border-b border-black/10 w-full max-w-6xl text-center" >
        <p class="text-sm text-gray-600 font-jost">Flash sale is going on <span class="font-bold">upto 75%</span></p>
    </div>
    <nav class="w-full max-w-6xl flex justify-between items-center mt-6 mb-3">
        <div>
            <a href="#"><img src="{{Vite::asset('resources/images/logo.png')}}" alt=""></a>
        </div>
        <div class="font-roboto space-x-6 text-xl font-semibold">
            <a href="#">Shop</a>
            <a href="#">Categories</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
        <div class="flex space-x-3 items-center">
            <form action="" class="relative">
                <img src="{{Vite::asset('resources/images/search.svg')}}" class="w-5 h-5 absolute right-1 top-1" alt="">
                <input type="text" class="border-b py-1 border-black/50 bg-transparent focus:outline-none placeholder:text-sm placeholder:text-black/50" placeholder="Search">
            </form>
            <div>
                <a href="#"><img src="{{Vite::asset('resources/images/account.svg')}}"  class="w-7 h-7" alt=""></a>
            </div>
            <div>
                <a href="#"><img src="{{Vite::asset('resources/images/cart.svg')}}" class="w-7 h-7"  alt=""></a>
            </div>
        </div>
    </nav>
</header>
