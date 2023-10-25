<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <span class="text-2xl font-bold">ระบบจัดการพนักงาน</span>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button onclick="openMenu()" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth
                <a href="{{ route('home') }}" class="text-xl font-bold leading-6 text-gray-900">
                    <button
                        class="px-3 py-2 text-white bg-sky-700 rounded-full hover:bg-gradient-to-r from-sky-700 to-sky-400">
                        ไปที่แดชบอร์ด <i class="fas fa-dashboard fa-sm"></i></button>
                </a>
                <a href="{{ route('auth.logout') }}"><span class="ml-3 text-xl">ลงชื่อออก</span></a>
            @else
                <a href="{{ route('home') }}/?modal=login" class="text-xl font-bold leading-6 text-gray-900">
                    <button
                        class="px-3 py-2 text-white bg-sky-700 rounded-full hover:bg-gradient-to-r from-sky-700 to-sky-400">
                        ลงชื่อเข้าใช้ <i class="fas fa-arrow-right-to-bracket fa-sm"></i></button>
                </a>
            @endauth
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                    <span class="text-2xl font-bold">ระบบจัดการพนักงาน</span>
                </a>
                <button onclick="closeMenu()" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="py-6">
                        @auth
                            <a href="{{ route('home') }}" class="text-xl font-bold leading-6 text-gray-900">
                                <button
                                    class="px-3 py-2 text-white bg-sky-700 rounded-full hover:bg-gradient-to-r from-sky-700 to-sky-400">
                                    ไปที่แดชบอร์ด <i class="fas fa-dashboard fa-sm"></i></button>
                            </a>
                            <a href="{{ route('auth.logout') }}"><p class="mt-3 text-xl">ลงชื่อออก</p></a>
                        @else
                            <a href="{{ route('home') }}/?modal=login" class="text-xl font-bold leading-6 text-gray-900">
                                <button
                                    class="px-3 py-2 text-white bg-sky-700 rounded-full hover:bg-gradient-to-r from-sky-700 to-sky-400">
                                    ลงชื่อเข้าใช้ <i class="fas fa-arrow-right-to-bracket fa-sm"></i></button>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function closeMenu() {
        document.querySelector('#mobile-menu').classList.add('hidden');
    }

    function openMenu() {
        document.querySelector('#mobile-menu').classList.remove('hidden');
    }
</script>

<x-login/>
<x-register/>
