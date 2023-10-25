<div id="login-modal" tabindex="-1" aria-hidden="true"
     class="fixed flex items-center justify-center bg-opacity-50 bg-black z-50 w-full h-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <a href="{{ route('home') }}">
            <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                    data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            </a>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-3xl font-bold text-gray-900">ลงชื่อเข้าใช้</h3>
                <form class="space-y-6" action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-xl font-medium text-gray-900">อีเมลของคุณ</label>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 "
                               placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-xl font-medium text-gray-900">รหัสผ่าน</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5"
                               required>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" name="remember" type="checkbox" value=""
                                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-sky-300">
                            </div>
                            <label for="remember" class="ml-2 text-xl font-medium text-gray-900">จดจำฉัน</label>
                        </div>
                        <a href="#" class="text-xl text-sky-700 hover:underline">ลืมรหัสผ่านหรือ?</a>
                    </div>
                    <button type="submit"
                            class="w-full text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center">
                        ลงชื่อเข้า
                    </button>
                    <div class="text-xl font-medium text-gray-500">
                        ยังไม่มีบัญชี? <a href="{{ route('home') }}/?modal=register" class="text-sky-700 hover:underline">สร้างบัญชี</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
