<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="overflow-y-auto scroll">
    {{-- navbar --}}
    <div class="sticky top-0 z-50 bg-white shadow-md">
        <div class="py-4 mx-auto max-w-7xl">
            <div class="text-2xl font-bold ">
                Bussiness Development Center
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="bg-gray-50">
        <div class="py-12 mx-auto max-w-7xl">
            <div class="mb-4 text-3xl font-semibold">Pembayaran</div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <div class="flex flex-col col-span-2 gap-4">
                    <div class="px-4 py-3 bg-white border-2 border-gray-100 rounded-lg">
                        <div class="font-bold text-gray-500 text-md">Alamat Pengiriman</div>
                        <div class="my-2 text-sm font-bold text-gray-700">Penerima : Bagus Farhan</div>
                        <p class="mb-4 text-sm text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum consectetur odit laudantium animi aspernatur nisi quaerat? Laborum sed culpa modi dolore aliquid in optio, ea magnam incidunt, animi pariatur nihil
                        </p>
                    </div>
                    <div class="px-3 py-2 bg-white border-2 border-gray-100 rounded-lg">
                        <div class="flex items-center justify-between gap-3 py-2">
                            <div class="flex flex-wrap items-center gap-3">
                                <div class="font-bold">Nama Toko</div>
                            </div>
                        </div>
                        <div class="flex justify-between py-4">
                            <div class="flex items-start gap-3">
                                <img src="{{asset('storage/img/kursi.png')}}" alt="" class="w-16 h-16">
                                <div>
                                    <div class="font-bold">Nama Barang</div>
                                </div>
                            </div>
                            <div class="">
                                <div class="font-bold">1 x Rp.500.000</div>
                            </div>
                        </div>
                        <div class="flex flex-col px-4 py-3 mb-4 border-2 border-gray-200 w-[50%] rounded-xl">
                            <form class="max-w-sm">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ekspedisi</label>
                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>-- Pilih Ekspedisi --</option>
                                <option value="JNE">JNE</option>
                                <option value="JNT">JNT</option>
                                <option value="Sicepat">Sicepat</option>
                                </select>
                            </form>
                            <form class="max-w-sm mt-2">
                                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>-- Pilih Waktu Pengiriman --</option>
                                <option value="JNE">Regular</option>
                                <option value="JNT">JNE YES</option>
                                <option value="Sicepat">Kargo</option>
                                </select>
                            </form>
                            <div class="flex items-center justify-between px-2 pt-3">
                                <div class="font-bold">Ongkos Kirim</div>
                                <div class="font-medium">Rp10.000</div>
                            </div>
                        </div>

                        {{-- <div class="flex items-center justify-end gap-8 py-3">
                            <!-- Modal toggle -->
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-primary hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-primary dark:focus:ring-blue-800" type="button">
                                Lihat Detail Transaksi
                            </button>
                        </div> --}}
                    </div>
                </div>
                <div class="w-full ">
                    <div class="container p-2 bg-white border-2 border-gray-100 rounded-lg">
                        <h1 class="mb-3 font-extrabold">Ringkasan Belanja</h1>
                        <div>
                            <div class="flex justify-between">
                                <div class="text-gray-600">Subtotal</div>
                                <div class="text-gray-600">Rp.500.000</div>
                            </div>
                            <div class="flex justify-between">
                                <div class="text-gray-600">Ongkos Kirim</div>
                                <div class="text-gray-600">Rp.10.000</div>
                            </div>
                            <div class="flex justify-between pt-2 mt-2 border-t border-gray-400">
                                <div class="font-semibold text-gray-600">Total Bayar</div>
                                <div class="font-semibold text-primary">Rp.510.000</div>
                            </div>
                        </div>
                        <button class="w-full p-2 px-5 mt-2 text-white rounded bg-primary">
                            Pilih Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <section class="py-[7rem] px-[3rem]">
            <div class="grid gap-4 max-md:grid-cols-1 lg:grid-cols-3 max-lg:grid-cols-2">
                <div class="flex items-start my-4">
                    <img class="w-10" src="{{ asset('assets/location-dot-solid.svg') }}" alt="">
                    <span class="ml-4">Jl. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta nesciunt, magni
                        eligendi eum enim, dicta totam, vero dolorem illo unde fugit mollitia reiciendis quaerat culpa. Quae
                        illum nisi nihil aut.</span>
                </div>
                <div class="w-full my-4">
                </div>
                <div class="my-4">
                    <div class="flex items-center h-10 lg:pl-[5rem]">
                        <img class="w-10" src="{{ asset('assets/instagram.svg') }}" alt="">
                        <a href="https://www.instagram.com/bdc.bandungjuara/" target="_blank"
                            class="ml-4 align-middle hover:underline">@bdjbandungjuara</a>
                    </div>
                    <div class="flex items-center h-10 my-4 lg:pl-[5rem]">
                        <img class="w-10" src="{{ asset('assets/whatsapp.svg') }}" alt="">
                        <a href="whatsapp://send?phone=6281222541485" target="_blank"
                            class="ml-4 align-middle hover:underline">0812-2254-1485</a>
                    </div>
                </div>
            </div>
        </section>
        <hr class="border-black">
        <p class="text-center pb-[1rem]">&copy; 2024 BDC Bandung</p>
    </div>

</body>
</html>
