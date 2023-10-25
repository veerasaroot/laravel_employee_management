@extends('layouts.frontend')

@section('title', 'หน้าแรก')

@section('content')
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 lg:gap-4">
            <a href="https://github.com/veerasaroot"
               class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-sky-500">
                <div>
                    <div class="h-16 w-16 bg-sky-50 flex items-center justify-center rounded-full">
                        <i class="fab fa-github fa-xl"></i>
                    </div>

                    <h2 class="mt-6 text-2xl font-bold text-gray-900">GitHub</h2>

                    <p class="mt-4 text-gray-500 text-xl leading-relaxed">
                        เพื่อน ๆ สามารถติดตาม หรือดูโปรเจกต์ของบอสได้นะครับ
                         ผ่านทางช่องทาง GitHub เลย ซึ่งก็จะมีการอัปเดตโค้ดชุดนี้
                        อยู่อย่างสม่ำเสมอครับ
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-sky-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </a>

            <a href="mailto:bosunakakawa@gmail.com"
               class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-sky-500">
                <div>
                    <div class="h-16 w-16 bg-sky-50 flex items-center justify-center rounded-full">
                        <i class="fab fa-google fa-xl"></i>
                    </div>

                    <h2 class="mt-6 text-2xl font-bold text-gray-900">อีเมล</h2>

                    <p class="mt-4 text-gray-500 text-xl leading-relaxed">
                        หากต้องการติดต่อสอบถามเกี่ยวกับโค้ดชุดนี้
                        เพื่อน ๆ สามารถติดต่อผมทางอีเมลได้เลยครับ
                        bosunakakawa@gmail.com
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-sky-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </a>

            <a href="https://www.facebook.com/boss.veerasaroot"
               class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-sky-500">
                <div>
                    <div class="h-16 w-16 bg-sky-50 flex items-center justify-center rounded-full">
                        <i class="fab fa-facebook fa-xl"></i>
                    </div>

                    <h2 class="mt-6 text-2xl font-bold text-gray-900">เฟซบุ๊ก</h2>

                    <p class="mt-4 text-gray-500 text-xl leading-relaxed">
                        ทักแช็ตคุยกัน หรือสามารถมาติดตามกันได้นะ ทาง Facebook
                        หลัก ๆ ก็จะลงเรื่องราวชีวิตไปวัน ๆ เนี่ยแหละ 555
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-sky-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </a>

            <a href="https://www.youtube.com/@bossprogrammerofficial"
               class="scale-100 p-6 bg-white rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-sky-500">
                <div>
                    <div class="h-16 w-16 bg-sky-50 flex items-center justify-center rounded-full">
                        <i class="fab fa-youtube fa-xl"></i>
                    </div>

                    <h2 class="mt-6 text-2xl font-bold text-gray-900">YouTube</h2>

                    <p class="mt-4 text-gray-500 text-xl leading-relaxed">
                        เข้าไปติดตามช่องยูทูปของบอสได้น้าาา อย่าลืมกดไลค์ให้ด้วย
                        เพื่อเป็นกำลังใจในการสร้างสรรค์ผลงานต่อไปจ้าา
                        @bossprogrammerofficial
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     class="self-center shrink-0 stroke-sky-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </a>
        </div>
    </div>
@endsection
