<div class="fixed bg-slate-100 w-full py-5 shadow-lg z-20">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}">
            <h1 class="text-xl font-bold">กระดานสนทนา</h1>
        </a>
        <form action="">
            @csrf
            <div class="relative">
                <input class="outline-none py-3 px-2 rounded-lg" type="search" role="searchbox"
                       placeholder="ค้นหากระทู้">
                <button class="absolute top-3 right-3" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <ul class="space-x-2">
            <li class="inline"><a class="transition hover:text-red-500" href="">หน้าแรก</a></li>
            <li class="inline"><a class="transition hover:text-red-500" href="">ข้อกำหนดและเงื่อนไข</a></li>
            <li class="inline"><a class="transition hover:text-red-500" href="">ลงชื่อเข้าใช้</a></li>
            <li class="inline"><button onclick="window.location.href = '';" class="bg-red-500 text-white px-5 py-3 rounded-lg shadow-xl hover:bg-gradient-to-r from-red-500 to-red-400">สร้างบัญชี</button></li>
        </ul>
    </div>
</div>
