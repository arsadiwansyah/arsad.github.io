<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>

<body class="h-full">>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body
  ```
-->
    <div class="min-h-full">
        <nav class="bg-gray-800" x-data="{ isOpen: false }">
          <div class="background-pattern"></div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8"
                                src="img/ARSADIWANSYAH.jpg"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/home"
                                    class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                    aria-current="page">Home</a>
                                <a href="/blog"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
                                {{-- <a href="/about"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                                <a href="/contact"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a> --}}

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">


                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="img/ARSADIWANSYAH.jpg"
                                            alt="">
                                    </button>
                                </div>


                                <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show='isOpen' class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Home</a>
                    <a href="/blog"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
                    <a href="/about"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="/contact"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>

                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Arsadiwansyah</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Home Page</h1>
            </div>
            <div class="flex items-center mt-4">
              <img class="h-16 w-16 rounded-full mr-4" src="img/ARSADIWANSYAH.jpg" alt="ARSADIWANSYAH">
              <div>
                 <h2 class="text-xl font-semibold">ARSADIWANSYAH</h2>
                 <p class="text-gray-600">Saya adalah salah satu mahasiswa Politeknik Negeri Sambas, Prodi Manajemen informatika</p>
              </div>
           </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                <p>Welcome To My Home Page</p>
                <section class="mt-8">
                  <h2 class="text-2xl font-bold mb-4">Tentang Saya</h2>
                  <p class="text-gray-700 leading-relaxed">
                      Halo! Saya <strong>Arsadiwansyah</strong>, seorang <em>Web Developer</em> berpengalaman yang memiliki keahlian di bidang pengembangan aplikasi berbasis web dan pemrograman backend. Saya memiliki hasrat dalam menciptakan solusi digital yang inovatif, responsif, dan user-friendly. Dengan pengalaman lebih dari 3 tahun di industri teknologi, saya terbiasa bekerja dengan berbagai teknologi modern seperti <strong>Laravel, JavaScript, dan Tailwind CSS</strong>.
                  </p>
                  <p class="mt-4 text-gray-700 leading-relaxed">
                      Komitmen saya adalah memberikan solusi yang efisien dan dapat diandalkan, yang tidak hanya memenuhi kebutuhan bisnis, tetapi juga memberikan pengalaman pengguna yang unggul. Ketika tidak sibuk dengan kode, saya senang mengikuti perkembangan teknologi terbaru atau membaca buku untuk memperluas wawasan.
                  </p>
              </section>
              
            </div>
        </main>
    </div>
    <main class="bg-gray-100 py-10">
      <div class="container mx-auto max-w-5xl px-4">
        <button id="theme-toggle" class="toggle-btn">Click</button>

         <section class="bg-white shadow rounded-lg p-8 mb-10">
            <!-- Foto Profil -->
            <div class="flex flex-col md:flex-row items-center md:items-start">
               <img class="w-48 h-48 rounded-md mb-6 md:mb-0 md:mr-8" src="img/ARSADIWANSYAH.jpg" alt="Foto Arsadiwansyah">
               
               <!-- Detail Profil -->
               <div>
                  <h2 class="text-3xl font-bold text-gray-900">Arsadiwansyah</h2>
                  <p class="text-gray-600 mt-2">Web Developer & Enthusiast in Modern Technologies</p>
                  <p class="text-gray-700 mt-4 leading-relaxed">
                     Saya adalah seorang pengembang web yang bersemangat dalam menciptakan aplikasi dan website interaktif yang responsif dan mudah digunakan. Dengan pengalaman lebih dari 3 tahun, saya mahir dalam berbagai teknologi seperti <strong>Laravel, JavaScript, dan Tailwind CSS</strong>.
                  </p>
                  
                  <!-- Identitas Tambahan -->
                  <div class="mt-6">
                     <h3 class="text-xl font-semibold text-gray-900">Identitas Lain</h3>
                     <ul class="list-disc ml-5 mt-2 text-gray-700">
                        <li><strong>Usia:</strong> 20 tahun</li>
                        <li><strong>Domisili:</strong> Sambas, Indonesia</li>
                        <li><strong>Pendidikan:</strong> D3 Manajemen Informatika</li>
                        <li><strong>Hobi:</strong> Membaca, Menulis Kode, Fotografi, dan Traveling</li>
                        <li><strong>Email:</strong> arsadiwansyah@email.com</li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
   
         <!-- Bagian Tambahan di Bawah Profil -->
         {{-- <section class="bg-white shadow rounded-lg p-8 mb-10">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Project Portfolio</h3>
            <p class="text-gray-700">Di sini, saya menampilkan beberapa proyek yang telah saya kerjakan...</p>
            <!-- Konten proyek bisa ditambahkan di sini -->
         </section> --}}
   
         <section class="bg-white shadow rounded-lg p-8 mb-10">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Kontak</h3>
            <ul>
              <li>
                  <a href="https://www.instagram.com/arsadiwansyah/profilecard/?igsh=MWU1a3k3azBmd202dg==">instagram</a>
              </li>
              <li>
                  <a href="https://youtube.com/@arsadiwansysharsa4597?si=zexTpgR_Lr67021r">Youtube</a>
              </li>
          </ul>
            <p class="text-gray-700">Hubungi saya melalui Instagram atau media sosial untuk berkolaborasi atau diskusi.</p>
            <!-- Form kontak atau tautan ke media sosial bisa ditambahkan di sini -->
         </section>
      </div>
   </main>
   <section class="bg-white shadow rounded-lg p-8 mb-10">
    <h3 class="text-2xl font-bold text-gray-900 mb-4">Traveling</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="portfolio-image-container">
            <img src="img/IMG-20230523-WA0007.jpg" alt="Proyek 1" class="portfolio-image">
            <div class="p-4">
                <h4 class="text-xl font-semibold text-gray-900"></h4>
                <p class="text-gray-600 mt-2"></p>
            </div>
        </div>
        <div class="portfolio-image-container">
            <img src="img/IMG-20230523-WA0001.jpg" alt="Proyek 2" class="portfolio-image">
            <div class="p-4">
                <h4 class="text-xl font-semibold text-gray-900"></h4>
                <p class="text-gray-600 mt-2"></p>
            </div>
        </div>
        <div class="portfolio-image-container">
            <img src="img/IMG-20230521-WA0007.jpg" alt="Proyek 3" class="portfolio-image">
            <div class="p-4">
                <h4 class="text-xl font-semibold text-gray-900"></h4>
                <p class="text-gray-600 mt-2"></p>
            </div>
        </div>
        <!-- Tambahkan lebih banyak proyek sesuai kebutuhan -->
    </div>
</section>

<section class="bg-white shadow rounded-lg p-8 mb-10">
    <h3 class="text-2xl font-bold text-gray-900 mb-4">Project Portfolio</h3>
    
    <!-- Project 1 -->
    <div class="mt-6">
       <h4 class="text-xl font-semibold text-gray-800">Sistem E-Commerce</h4>
       <img src="img/ecommerce.jpg" alt="Sistem E-Commerce" class="w-full h-56 rounded-md mt-3 mb-2">
       <p class="text-gray-700">
          Aplikasi e-commerce untuk memudahkan proses pembelian online, dilengkapi dengan fitur pembayaran dan pelacakan pengiriman.
       </p>
    </div>
    
    <!-- Project 2 -->
    <div class="mt-6">
       <h4 class="text-xl font-semibold text-gray-800">Platform Pembelajaran Online</h4>
       <img src="img/learning_platform.jpg" alt="Platform Pembelajaran Online" class="w-full h-56 rounded-md mt-3 mb-2">
       <p class="text-gray-700">
          Proyek yang bertujuan untuk menyediakan kursus online dengan modul interaktif dan materi pembelajaran lengkap.
       </p>
    </div>
 
    <!-- Project 3 -->
    <div class="mt-6">
       <h4 class="text-xl font-semibold text-gray-800">Aplikasi Sosial Media</h4>
       <img src="img/social_media_app.jpg" alt="Aplikasi Sosial Media" class="w-full h-56 rounded-md mt-3 mb-2">
       <p class="text-gray-700">
          Sebuah aplikasi media sosial dengan fitur berbagi foto, mengikuti pengguna lain, dan komentar secara real-time.
       </p>
    </div>
 </section>
 

   

</body>

</html>
