<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .swiper-pagination-bullet {
            background-color: #565656;
        }

        .swiper-pagination-bullet-active {
            background-color: #082F49;
        }
    </style>
</head>
<body class="overflow-x-hidden w-full sm:w-full md:w-full">
    <div class="relative">
        <div class="absolute inset-0 flex justify-center mt-72 items-center">
            <img src="{{asset('images/header.png')}}" width="100%" alt="">
        </div>
        <div class="relative z-50">
            <nav class="bg-white border-gray-200 z-50 fixed px-32 dark:bg-gray-900 w-full">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-4">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{asset('images/logo.png')}}" class="h-16" alt="Asy Syamil Bontang Logo" />
                        <div class="flex flex-col">
                            <span class="font-medium text-xl dark:text-white">Asy Syamil Bontang</span>
                            <span class="text-sm text-gray-600">Terbaik, Berprestasi dan Berakhlak Islami</span>
                        </div>
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-600 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#beranda" class="block py-2 px-10 mx-3 text-gray-600 font-normal text-base rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-black hover:text-green-700 transition duration-200 ease-in-out">Beranda</a>
                        </li>
                        <li>
                            <a href="#tentang_kami" class="block py-2 px-10 mx-3 text-gray-600 rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-gray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#tracer_study" class="block py-2 px-10 mx-3 text-gray-600 rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-gray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">Tracer Study</a>
                        </li>
                        <li>
                            <a href="#ppdb" class="block py-2 px-10 mx-3 text-gray-600 rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-gray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">PPDB</a>
                        </li>
                        <li>
                            <a href="#faq" class="block py-2 px-10 mx-3 text-gray-600 rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-text-gray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">FAQ</a>
                        </li>
                        <li>
                            <a href="#galeri" class="block py-2 px-10 mx-3 text-gray-600 rounded md:bg-transparent md:ext-gray-600 md:p-0 dark:text-white md:dark:text-gray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">Galeri</a>
                        </li>
                        <li>
                            <a href="#blog" class="block py-2 px-10 mx-3 text-gray-600 rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-gray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">Blog</a>
                        </li>
                        <li>
                            <a href="#yayasan" class="block py-2 px-10 mx-3 text-text-gray-600 rounded md:bg-transparent md:text-gray-600 md:p-0 dark:text-white md:dark:text-fray-600 font-normal hover:text-green-700 transition duration-200 ease-in-out">Yayasan</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="main px-20 w-full">
        <div id="default-carousel" class="relative w-full pt-32" data-carousel="slide">
            <div class="relative h-[700px] pt-10 overflow-hidden rounded-lg ">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/31345-banjir-di-kalimantan-selatan-twitteratrezhafn.jpg')}}" class="absolute block h-[655px] rounded-3xl w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/baner.png')}}" class="absolute block w-full object-cover h-[655px] rounded-3xl  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/baner.png')}}" class="absolute block w-full object-cover h-[655px] rounded-3xl  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/baner.png')}}" class="absolute block w-full object-cover h-[655px] rounded-3xl  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/baner.png')}}" class="absolute block w-full object-cover h-[655px] rounded-3xl  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <button type="button" class="absolute top-20 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-20 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="flex border border-gray-300 rounded-lg p-10 bg-gray-50 mb-20" id="stats-section">
            <div class="ms-7">
                <p class="text-3xl me-12 font-normal tracking-wider">Asy Saymil Bontang <br class=""> Dalam Angka </br></p>
                <hr class="border-2 border-green-800 mt-3 w-48">
            </div>
            <div class="flex flex-col text-center ms-20">
                <span id="alumni" class="text-5xl text-center">0</span>
                <span class="text-xl text-gray-700 tracking-tighter">Alumni</span>
            </div>
            <div class="flex flex-col text-center ms-24">
                <span id="piala" class="text-5xl text-center">0</span>
                <span class="text-xl text-gray-700 tracking-tighter">Piala</span>
            </div>
            <div class="flex flex-col text-center ms-24">
                <span id="hafidz" class="text-5xl text-center">0</span>
                <span class="text-xl text-gray-700 tracking-tighter">Hafidz</span>
            </div>
            <div class="flex flex-col text-center ms-24">
                <span id="siswa" class="text-5xl text-center">0</span>
                <span class="text-xl text-gray-700 tracking-tighter">Siswa</span>
            </div>
        </div>

        <div class="flex h-full mb-20">
            <div class="rounded-xl relative">
                <img class="h-[600px] w-[500px] contrast-100 brightness-75 object-fill bg-gradient-to-br from-gray-50 to-gray-200 pr-10 pt-7 rounded-2xl" src="{{asset('images/kepsek.png')}}" alt="">
                <div class="absolute bottom-8 left-5 text-white p-4 w-full text-left rounded-b-2xl">
                    <p class="text-white text-3xl tracking-wide font-bold">H.Isro Umarghani, S.IP., M.M.</p>
                    <p class="text-2xl">Pimpinan Yayasan</p>
                </div>
            </div>
            <div class="w-[850px]  my-auto">
                <p class="text-3xl font-medium ml-10">Sambutan Pimpinan <br> Yayasan Asy Syamil Bontang</p>
                <div class="bg-green-900 h-1.5 mt-3 w-52 ml-10"></div>
                <div class="ml-10">
                    <p class="text-gray-800 leading-loose text-left mt-5 text-lg">
                        Lörem ipsum poktiga förarstödjare, eftersom falogi rinat i senat egovis parar hjärtstartare. Dussa dis euroskapet. Monar telenatt, al liplafektigt samt dejur, oskap av berat såsom vasav flexicurity ultradökaling döna. Onar lass nede.
                        Stenongar bengen dosamma eufysk så rening intraföning inte ofask alltså sektiga. Proböbel tres om ona som speng ordningskonsult behet. Vifyr dere om tudåvis laren, bojorat sevis, i sobore paser på monovåvir. Benat ed döpp vossade det mörka nätet i vide, i lyväligt med terangen eller krolig kafir, att lar.
                        Kubtest serar i bioråsamma imuralig om polilog. Nalöledes viraling prel devis förutom semis som nise hexagapreligt, till nixa euktigt och mining. Makronade plans sarat: i opos sil, podöll exonat urer. Hemiligt sanningsbarometer infrahuk nyns inte hilörade och äldrelots.
                        Kubtest serar i bioråsamma imuralig om polilog. Nalöledes viraling prel devis förutom semis som nise hexagapreligt, till nixa euktigt och mining. Makronade plans sarat: i opos sil, podöll exonat urer. Hemiligt sanningsbarometer infrahuk nyns inte hilörade och äldrelots.
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-20 bg-gray-100 rounded-2xl border border-gray-300">
            <div class="flex mt-16">
                <div class="w-1/3">
                    <p class="text-3xl font-medium ml-20">Tentang <br> Asy Syamil</p>
                    <div class="bg-green-900 h-1.5 mt-3 w-52 ml-20"></div>
                </div>
                <div class="w-2/3 text-gray-800 leading-relaxed text-left text-lg">
                    <div>
                        Lörem ipsum poktiga förarstödjare, eftersom falogi rinat i senat egovis parar hjärtstartare. Dussa dis euroskapet. Monar telenatt, al liplafektigt samt dejur, oskap av berat såsom vasav flexicurity ultradökaling döna. Onar lass nede.
                    </div>
                    <div class="rounded-md p-2.5 text-white w-1/5 text-center bg-green-800 hover:bg-green-900 mt-6">
                        Selengkapnya
                    </div>
                </div>
            </div>
            <div class="mx-10 mt-14 mb-10">
                <iframe class="w-full max-w-full border border-gray-200 rounded-2xl dark:border-gray-700" width="" height="720" src="https://www.youtube.com/embed/e6mZVeCYrX8?si=FeEnUMdGFa0t_a42" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div class="mb-20 ">
            <div class="">
                <p class="text-3xl font-medium">Jenjang Asy Syamil Bontang</p>
                <p class="text-2xl font-normal text-gray-700 my-3">Berikut ini daftar jenjang di Asy Syamil Bontang</p>
                <div class="bg-green-900 h-1.5 mt-3 w-52 "></div>
            </div>
            <div class="grid grid-cols-3 mt-16 gap-y-24">
                <div class="j justify-center text-center">
                    <img class="mx-auto h-24" src="{{asset('images/logo.png')}}" alt="">
                    <p class="text-2xl tracking-wide mt-4 font-bold bg-gradient-to-b from-green-900 to-green-700 text-transparent bg-clip-text">KB TKIT QURROTA A'YUN</p>
                </div>
                <div class="j justify-center text-center">
                    <img class="mx-auto h-24" src="{{asset('images/logo.png')}}" alt="">
                    <p class="text-2xl tracking-wide mt-4 font-bold bg-gradient-to-b from-green-900 to-green-700 text-transparent bg-clip-text">KB TKIT QURROTA A'YUN</p>
                </div>
                <div class="j justify-center text-center">
                    <img class="mx-auto h-24" src="{{asset('images/logo.png')}}" alt="">
                    <p class="text-2xl tracking-wide mt-4 font-bold bg-gradient-to-b from-green-900 to-green-700 text-transparent bg-clip-text">KB TKIT QURROTA A'YUN</p>
                </div>
                <div class="j justify-center text-center">
                    <img class="mx-auto h-24" src="{{asset('images/logo.png')}}" alt="">
                    <p class="text-2xl tracking-wide mt-4 font-bold bg-gradient-to-b from-green-900 to-green-700 text-transparent bg-clip-text">KB TKIT QURROTA A'YUN</p>
                </div>
                <div class="j justify-center text-center">
                    <img class="mx-auto h-24" src="{{asset('images/logo.png')}}" alt="">
                    <p class="text-2xl tracking-wide mt-4 font-bold bg-gradient-to-b from-green-900 to-green-700 text-transparent bg-clip-text">KB TKIT QURROTA A'YUN</p>
                </div>
                <div class="j justify-center text-center">
                    <img class="mx-auto h-24" src="{{asset('images/logo.png')}}" alt="">
                    <p class="text-2xl tracking-wide mt-4 font-bold bg-gradient-to-b from-green-900 to-green-700 text-transparent bg-clip-text">KB TKIT QURROTA A'YUN</p>
                </div>
            </div>
        </div>

        <div class="mb-20">
            <div class="flex justify-between">
                <div>
                    <p class="text-3xl font-medium">Galeri Asy Syamil Bontang</p>
                    <p class="text-2xl font-normal text-gray-700 my-3">Berikut ini merupakan galeri Asy Syamil Bontang</p>
                    <div class="bg-green-900 h-1.5 mt-3 w-52 "></div>
                </div>
                <div>
                    <div class="rounded-xl p-3.5 px-7 text-normal text-white text-center bg-green-800 hover:bg-green-900 mt-6">
                        Lihat Semua
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <img class="h-full w-full object-cover rounded-lg" src="{{asset('images/baner.png')}}" alt="">
                    </div>
                    <div class="col-span-1">
                        <img class="h-full w-full object-cover rounded-lg" src="{{asset('images/anakkecilkacamata.png')}}" alt="">
                    </div>
                    <div class="col-span-1">
                        <img class="h-full w-full object-cover rounded-lg" src="{{asset('images/anakkecilkacamata.png')}}" alt="">
                    </div>
                    <div class="col-span-2">
                        <img class="h-full w-full object-cover rounded-lg" src="{{asset('images/baner.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-20">
            <div>
                <p class="text-3xl font-medium">Testimoni Asy Syamil</p>
                <p class="text-2xl font-normal text-gray-700 my-3">Apa kata mereka tentang kami</p>
                <div class="bg-green-900 h-1.5 mt-3 w-52 "></div>
            </div>
            <div class="container mx-auto overflow-hidden">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-6 bg-white rounded-lg h-52 mt-5">
                            <div class="h-3/4">
                                <p class="mb-4 text-lg text-gray-700">“Suatu hari, anak saya tiba-tiba demam tinggi dan muntah-muntah. Saya panik dan tidak tahu harus bagaimana. Untungnya, saya teringat dengan Rumah Sakit XYZ yang terkenal dengan layanannya yang ramah dan cepat. Saya langsung membawa anak saya ke sana..."</p>
                            </div>
                            <div class="flex items-center mt-3">
                                <img class="w-12 h-12 rounded-full mr-4" src="{{asset('images/saya.jpeg')}}" alt="Siswa">
                                <div>
                                    <p class="font-bold text-lg text-gray-600">Ramadhani</p>
                                    <p class="text-sm text-gray-500">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-6 bg-white rounded-lg h-52 mt-5">
                            <div class="h-3/4">
                                <p class="mb-4 text-lg text-gray-700">“Keren banget dan ngebantu banget buat aku yang emang beneran pengen ke rumah sakit, jadi gak perlu minta rujukan ke puskesmas dulu."</p>
                            </div>
                            <div class="flex items-center ">
                                <img class="w-12 h-12 rounded-full mr-4" src="{{asset('images/saya.jpeg')}}" alt="Siswa">
                                <div>
                                    <p class="font-bold text-lg text-gray-600">Ramadhani</p>
                                    <p class="text-sm text-gray-500">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-6 bg-white rounded-lg h-52 mt-5">
                            <div class="h-3/4">
                                <p class="mb-4 text-lg text-gray-700">“Suatu hari, anak saya tiba-tiba demam tinggi dan muntah-muntah. Saya panik dan tidak tahu harus bagaimana. Untungnya, saya teringat dengan Rumah Sakit XYZ yang terkenal dengan layanannya yang ramah dan cepat. Saya langsung membawa anak saya ke sana..."</p>
                            </div>
                            <div class="flex items-center mt-3">
                                <img class="w-12 h-12 rounded-full mr-4" src="{{asset('images/saya.jpeg')}}" alt="Siswa">
                                <div>
                                    <p class="font-bold text-lg text-gray-600">Ramadhani</p>
                                    <p class="text-sm text-gray-500">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-6 bg-white rounded-lg h-52 mt-5">
                            <div class="h-3/4">
                                <p class="mb-4 text-lg text-gray-700">“Keren banget dan ngebantu banget buat aku yang emang beneran pengen ke rumah sakit, jadi gak perlu minta rujukan ke puskesmas dulu."</p>
                            </div>
                            <div class="flex items-center ">
                                <img class="w-12 h-12 rounded-full mr-4" src="{{asset('images/saya.jpeg')}}" alt="Siswa">
                                <div>
                                    <p class="font-bold text-lg text-gray-600">Ramadhani</p>
                                    <p class="text-sm text-gray-500">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-6 bg-white rounded-lg h-52 mt-5">
                            <div class="h-3/4">
                                <p class="mb-4 text-lg text-gray-700">“Suatu hari, anak saya tiba-tiba demam tinggi dan muntah-muntah. Saya panik dan tidak tahu harus bagaimana. Untungnya, saya teringat dengan Rumah Sakit XYZ yang terkenal dengan layanannya yang ramah dan cepat. Saya langsung membawa anak saya ke sana..."</p>
                            </div>
                            <div class="flex items-center mt-3">
                                <img class="w-12 h-12 rounded-full mr-4" src="{{asset('images/saya.jpeg')}}" alt="Siswa">
                                <div>
                                    <p class="font-bold text-lg text-gray-600">Ramadhani</p>
                                    <p class="text-sm text-gray-500">Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination mt-24"></div>
                </div>
            </div>
        </div>

        <div class="mb-20">
            <div>
                <p class="text-3xl font-medium">Blog Sekolah Asy Syamil</p>
                <p class="text-2xl font-normal text-gray-700 my-3">Lihat blog menarik kami di sini</p>
                <div class="bg-green-900 h-1.5 mt-3 w-52 "></div>
            </div>
            <div class="grid grid-cols-3 mt-5">
                <div class="max-w-sm ">
                    <a class="h h-32" href="#">
                        <img class="rounded-t-2xl h-64 object-cover w-full" src="{{asset('images/anaksekolah1.jpeg')}}" alt="" />
                    </a>
                    <div class="">
                        <p class="my-2 text-gray-600">23 Juni 2024</p>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Membangun Generasi Masa Depan yang Cerdas dan Berkarak...</h5>
                        </a>
                        <p class="mb-3 text-base font-normal text-gray-700 dark:text-gray-400">Di era yang penuh dengan perubahan dan tantangan, pendidikan menjadi kunci utama untuk membangun generasi masa depan yang cerdas dan berkarakter. Asy Syamil  hadir sebagai mitra orang tua dalam mewujudkan cita-cita tersebut.</p>
                        <div class="rounded-xl p-3.5 px-2 w-1/2 text-normal text-white text-center bg-green-800 hover:bg-green-900 mt-6">
                            Selengkapnya
                        </div>
                    </div>
                </div>
                <div class="max-w-sm ">
                    <a href="#">
                        <img class="rounded-t-2xl w-full h-64 object-cover" src="{{asset('images/anaksekolah2.jpeg')}}" alt="" />
                    </a>
                    <div class="">
                        <p class="my-2 text-gray-600">23 Juni 2024</p>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Membangun Generasi Masa Depan yang Cerdas dan Berkarak...</h5>
                        </a>
                        <p class="mb-3 text-base font-normal text-gray-700 dark:text-gray-400">Di era yang penuh dengan perubahan dan tantangan, pendidikan menjadi kunci utama untuk membangun generasi masa depan yang cerdas dan berkarakter. Asy Syamil  hadir sebagai mitra orang tua dalam mewujudkan cita-cita tersebut.</p>
                        <div class="rounded-xl p-3.5 px-2 w-1/2 text-normal text-white text-center bg-green-800 hover:bg-green-900 mt-6">
                            Selengkapnya
                        </div>
                    </div>
                </div><div class="max-w-sm ">
                    <a href="#">
                        <img class="rounded-t-2xl w-full h-64 object-fill" src="{{asset('images/anaksekeolah3.jpg')}}" alt="" />
                    </a>
                    <div class="">
                        <p class="my-2 text-gray-600">23 Juni 2024</p>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white">Membangun Generasi Masa Depan yang Cerdas dan Berkarak...</h5>
                        </a>
                        <p class="mb-3 text-base font-normal text-gray-700 dark:text-gray-400">Di era yang penuh dengan perubahan dan tantangan, pendidikan menjadi kunci utama untuk membangun generasi masa depan yang cerdas dan berkarakter. Asy Syamil  hadir sebagai mitra orang tua dalam mewujudkan cita-cita tersebut.</p>
                        <div class="rounded-xl p-3.5 px-2 w-1/2 text-normal text-white text-center bg-green-800 hover:bg-green-900 mt-6">
                            Selengkapnya
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 rounded-3xl mb-20">
            <div class="flex">
                <div class="w-1/2 p-10 mt-2">
                    <div class="w-3/4">
                        <p class="text-5xl font-medium leading-tight">Jadi bagian dari Sekolah Asy Syamil</p>
                    </div>
                    <div class="my-7">
                        <p class="text-xl text-gray-700 tracking-wide">Pilihan terbaik  dan terpercaya untuk menghadirkan muda mudi
                            terbaik untuk bangsa, negara dan agama</p>
                    </div>
                    <div class="rounded-xl p-3.5 w-2/6 text-normal text-white text-center bg-green-800 hover:bg-green-900 mt-6">
                        Daftar Sekarang
                    </div>
                </div>
                <div>
                    <img class="w-full ml-14" src="{{asset('images/Group 2124.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class=" mb-10 rounded-3xl" style="background: linear-gradient(to bottom, #4E8755, #24512D);">
            <div class="flex p-10 gap-40 bg">
                <div class="">
                    <div class="text-white">
                        <img class="h-20" src="{{asset('images/logoWhite.png')}}" alt="">
                        <p class="text-2xl font-bold mt-2">Asy Syamil</p>
                        <p class="text-base">Terbaik, Berprestasi dan Berakhlak Islami</p>
                        <p class="my-6 w-72">Jl. Kebagusan Baru No.360, Sawah Besar DKI Jakarta</p>
                        <p class="font-semibold">@ 2024 Digtra Studio. <span class="font-normal">All Rights Reserved</span></p>
                    </div>
                </div>
                <div class="text-white">
                    <p class="text-lg font-medium">Menu Cepat</p>
                    <ul class="">
                        <li class="my-1 mt-3.5">Beranda</li>
                        <li class="my-1">Tentang Kami</li>
                        <li class="my-1">Tracer Study</li>
                        <li class="my-1">PPDB</li>
                        <li class="my-1">FAQ</li>
                        <li class="my-1">Galeri</li>
                        <li class="my-1">Blog</li>
                        <li class="my-1">Yayasan</li>
                    </ul>
                </div>
                <div class="text-white">
                    <p class="text-lg font-medium">Menu Cepat</p>
                    <ul class="">
                        <li class="my-1 mt-3.5">Beranda</li>
                        <li class="my-1">Tentang Kami</li>
                        <li class="my-1">Tracer Study</li>
                        <li class="my-1">PPDB</li>
                        <li class="my-1">FAQ</li>
                        <li class="my-1">Galeri</li>
                        <li class="my-1">Blog</li>
                        <li class="my-1">Yayasan</li>
                    </ul>
                </div>
                <div class="text-white">
                    <p class="text-lg font medium">Sosial Media</p>
                    <div class="flex gap-2 mt-3">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                            <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                        </svg>
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                        </svg>
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                        </svg>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_110_597)">
                            <path d="M12.8347 21C17.8052 21 21.8347 16.9706 21.8347 12C21.8347 7.02944 17.8052 3 12.8347 3C7.86412 3 3.83469 7.02944 3.83469 12C3.83469 16.9706 7.86412 21 12.8347 21Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                            <path d="M4.34723 9H21.3221" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.3476 15H21.3223" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.8347 20.7585C14.9058 20.7585 16.5847 16.8372 16.5847 12.0001C16.5847 7.16297 14.9058 3.2417 12.8347 3.2417C10.7636 3.2417 9.08469 7.16297 9.08469 12.0001C9.08469 16.8372 10.7636 20.7585 12.8347 20.7585Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_110_597">
                            <rect width="24" height="24" fill="white" transform="translate(0.834686)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        function countUp(id, start, end, duration){
            const element = document.getElementById(id);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp =timestamp;
                const progres = Math.min((timestamp - startTimestamp)/ duration, 1);
                element.textContent = Math.floor(progres * (end - start)+start);
                if (progres < 1) {
                    window.requestAnimationFrame(step);
                }
                else {
                    element.textContent = `${end}+`;
                }
            };
            window.requestAnimationFrame(step);
        }

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting){
                    countUp("alumni", 0 ,  5312, 2000);
                    countUp("piala", 0 ,  500, 2000);
                    countUp("hafidz", 0 ,  100, 2000);
                    countUp("siswa", 0 ,  800, 2000);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1});

        const statsSection = document.getElementById("stats-section");
        observer.observe(statsSection);

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });

    </script>
</body>
</html>
