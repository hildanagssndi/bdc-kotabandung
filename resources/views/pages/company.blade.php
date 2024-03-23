<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-4 bg-zinc-200">
                <div class="px-[2rem] py-[2rem]">
                    <h2 class="text-[2rem] font-medium">Profile Perusahaan</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quae quaerat nulla, ducimus dolorem sapiente recusandae quos, repellat animi officiis perspiciatis rerum saepe quis tempore, quidem ratione! Doloremque, magni ipsum.Eligendi, amet. Exercitationem rerum optio quod tempore omnis quasi alias amet repudiandae! Maiores dolorem veritatis deserunt eaque facere dolores distinctio vel fuga? Ullam, sapiente. Consectetur cumque sed ea adipisci blanditiis.</p>
                </div>
                <div>
                    <img class="w-full h-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                </div>
            </div>

            <section class="py-[2.5rem]">
                <div class="flex w-full justify-center py-3">
                    <div class="lg:w-1/2 max-lg:px-[2rem]">
                        <h2 class="text-[2rem] font-medium text-center">VISI</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse provident repellendus explicabo, eveniet in maiores quod ratione voluptas, iure quaerat et blanditiis ipsam iste laudantium dignissimos consectetur sit molestiae?Minus ratione excepturi eaque hic at atque dolor, suscipit iusto quidem odio eos exercitationem doloribus tempora laboriosam earum, aliquid ut beatae incidunt quam deserunt maiores ipsum velit. Accusantium, laboriosam dolorem.</p>
                    </div>
                </div>
                <div class="flex w-full justify-center">
                    <div class="lg:w-1/2 max-lg:px-[2rem]">
                        <h2 class="text-[2rem] font-medium text-center">MISI</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse provident repellendus explicabo, eveniet in maiores quod ratione voluptas, iure quaerat et blanditiis ipsam iste laudantium dignissimos consectetur sit molestiae?Minus ratione excepturi eaque hic at atque dolor, suscipit iusto quidem odio eos exercitationem doloribus tempora laboriosam earum, aliquid ut beatae incidunt quam deserunt maiores ipsum velit. Accusantium, laboriosam dolorem.</p>
                    </div>
                </div>
            </section>
            {{-- <section class="py-[2.5rem]">
                <div class="grid grid-cols-3 shadow-lg rounded-lg">
                    <div class="">
                        <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div class="">
                        <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div class="">
                        <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                </div>
            </section> --}}
            <section class="py-[2.5rem]">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-[2.5rem] pb-[16rem] max-lg:px-[2rem]">
                <h2 class="text-[2rem] font-medium">Perkembangan dan Fungsi BDC</h2>
                <br>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quos, pariatur fugiat earum quasi laudantium vero assumenda voluptatum minus! Ipsa officia quo veniam in voluptas expedita illum. Dolore, tempora et.</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quos, pariatur fugiat earum quasi laudantium vero assumenda voluptatum minus! Ipsa officia quo veniam in voluptas expedita illum. Dolore, tempora et.</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quos, pariatur fugiat earum quasi laudantium vero assumenda voluptatum minus! Ipsa officia quo veniam in voluptas expedita illum. Dolore, tempora et.</p>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quos, pariatur fugiat earum quasi laudantium vero assumenda voluptatum minus! Ipsa officia quo veniam in voluptas expedita illum. Dolore, tempora et.</p>
                    </div>
                </div>
            </section>
            <section class="py-[7rem] px-[3rem] bg-zinc-200">
                <div class="grid max-md:grid-cols-1 lg:grid-cols-3 max-lg:grid-cols-2 gap-4">
                    <div class="my-4 items-start flex">
                        <img class="w-10" src="{{ asset('assets/location-dot-solid.svg') }}" alt="">
                        <span class="ml-4">Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nesciunt, magni eligendi eum enim, dicta totam, vero dolorem illo unde fugit mollitia reiciendis quaerat culpa. Quae illum nisi nihil aut.</span>
                    </div>
                    <div class="my-4 w-full">
                        <a href="{{route('company_profile')}}" class="w-full inline-block pl-[3.5rem] hover:underline max-md:py-2">Company</a>
                        <a href="#" class="w-full inline-block pl-[3.5rem] hover:underline pt-2">E-Catalog</a>
                        <a href="#" class="w-full inline-block pl-[3.5rem] hover:underline pt-2">Event</a>
                    </div>
                    <div class="my-4">
                        <div class="flex items-center h-10 lg:pl-[5rem]">
                            <img class="w-10" src="{{ asset('assets/instagram.svg') }}" alt="">
                            <a href="https://www.instagram.com/bdc.bandungjuara/" target="_blank" class="align-middle ml-4 hover:underline">@bdjbandungjuara</a>
                        </div>
                        <div class="flex items-center h-10 my-4 lg:pl-[5rem]">
                            <img class="w-10" src="{{ asset('assets/whatsapp.svg') }}" alt="">
                            <a href="whatsapp://send?phone=6281222541485" target="_blank" class="align-middle ml-4 hover:underline">0812-2254-1485</a>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="border-black">
            <p class="text-center pb-[1rem]">Copy right @ BDC Bandung</p>
        </div>
    </div>

    {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}
</x-app-layout>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    // Fungsi untuk menangani perubahan media query
    function handleMediaQuery(mediaQuery) {
      if (mediaQuery.matches) {
        // Jika lebar maksimum layar adalah 768px atau kurang
        swiper.params.slidesPerView = 1; // Ubah jumlah slide yang ditampilkan menjadi 1
        swiper.params.spaceBetween = 10; // Sesuaikan ruang antara slide
      } else {
        // Jika lebar layar lebih dari 768px
        swiper.params.slidesPerView = 3; // Kembalikan jumlah slide yang ditampilkan menjadi 3
        swiper.params.spaceBetween = 0; // Kembalikan ruang antara slide seperti semula
      }
      swiper.update(); // Update swiper instance setelah melakukan perubahan
    }

    // Inisialisasi Swiper
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      // Tambahkan transisi untuk efek yang mulus
      effect: "slide",
      speed: 500,
    });

    // Cek media query pada inisialisasi dan ketika layar berubah
    var mediaQuery = window.matchMedia("(max-width: 768px)");
    handleMediaQuery(mediaQuery); // Panggil fungsi handleMediaQuery saat inisialisasi
    mediaQuery.addListener(handleMediaQuery); // Tambahkan listener untuk memantau perubahan pada media query
  </script>
