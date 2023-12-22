<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GantengSkuy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function submitForm() {
            document.getElementById('skincare').classList.remove('hidden');
            document.getElementById('skincare').classList.add('block');
        }

        $(document).ready(function() {
            $("#search").click(function(){
                var cari = $("#cari").val();
                var rank = $("#rank").val();
                $.ajax({
                    url:'/search?q='+cari+'&rank='+rank,
                    dataType : "json",
                    success: function(data){
                            $('#content').html(data);

                            var elemen = document.getElementById("skincare");
                            elemen.scrollIntoView();
                        },
                        error: function(data){
                            alert("Please insert your command");
                        }
                });
            });
        });
    </script>
    
</head>
<body>

    <div class="z-10 sticky top-0 bg-[#27ae60] border-b-2 border-black/50">
        <nav class="flex justify-between items-center px-20 py-3">
            <div class="flex items-center">
                <button class="text-white font-bold text-2xl">GantengSkuy</button>
            </div>
            
            <form action="#" method="GET" onsubmit="return false" class="bg-white p-2 rounded-md">
                <input type="text" placeholder="Cari Skincare" name="q" id="cari" class="outline-none p1 bg-white">
                <select name="rank" id="rank" class="border-2 border-x-black/20 mx-5 p-1">
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="16">16</option>
                </select>
                <button onclick="submitForm()" id="search" type="submit" class="rounded-md bg-[#27ae60] text-white p-1 hover:scale-[1.1] hover:tracking-[.05em]">Search</button>
            </form>

            <div class="flex items-center">
                <a href="#" class="px-4 py-1 text-white hover:underline rounded-full ml-10">Home</a>
                <a href="#skincare" class="px-4 py-1 text-white hover:underline rounded-full ml-10">Skincare</a>
            </div>
        </nav>
    </div>

    <div class="min-h-screen">
        <div class="grid grid-cols-2 gap-10 px-32 h-[65vh] bg-[url('{{ 'images/banner-bg.jpg' }}')]">
            <div class="flex items-center">
                <div>
                    <h1 class="text-5xl font-bold text-[#27ae60]">Selamat Datang Bro</h1>
                    <h1 class="mt-5 text-5xl font-bold text-[#27ae60]">Silahkan Beli Skincare</h1>
                </div>
            </div>
            <div class="flex items-end">
                <div>
                    <div class="flex justify-center">
                        <img src="{{ 'https://gamal.men/wp-content/uploads/2022/11/avoskin-eye-ampoule-01-300x300.jpg' }}" class="w-48" style="mix-blend-mode: multiply;">
                        <img src="{{ 'https://gamal.men/wp-content/uploads/2022/11/Avoskin-Miraculous-Refining-Serum-300x300.jpg' }}" class="w-48" style="mix-blend-mode: multiply;">
                        <img src="{{ 'https://gamal.men/wp-content/uploads/2022/11/Avoskin-Miraculous-Retinol-Ampoule-30ml-300x300.jpg' }}" class="w-48" style="mix-blend-mode: multiply;">
                    </div>
                    <div>
                        <img src="{{ 'images/stand.png' }}" class="w-full -mt-[2rem]">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-14 px-32 py-20 h-[35vh] shadow-lg rounded-b-[100px]">
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-truck w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="7" cy="17" r="2"></circle><circle cx="17" cy="17" r="2"></circle><path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">Gratis Ongkir</h1>
                    <p class="mt-2 text-sm">Pembelian Lebih Dari 500K</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-lock w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="5" y="11" width="14" height="10" rx="2"></rect><circle cx="12" cy="16" r="1"></circle><path d="M8 11v-4a4 4 0 0 1 8 0v4"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">Pembayaran Aman</h1>
                    <p class="mt-2 text-sm">100% Pembayaran Aman</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-reload w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19.933 13.041a8 8 0 1 1 -9.925 -8.788c3.899 -1.002 7.935 1.007 9.425 4.747"></path><path d="M20 4v5h-5"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">Pengembalian Mudah</h1>
                    <p class="mt-2 text-sm">Pengembalian 7 Hari</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <svg class="icon icon-tabler icon-tabler-messages w-14 text-[#27ae60]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path><path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path></svg>
                </div>
                <div class="pl-2">
                    <h1 class="text-xl font-bold">24/7 Bantuan</h1>
                    <p class="mt-2 text-sm">Hubungi Kami Kapan Saja</p>
                </div>
            </div>
        </div>
    </div>

    <div class="min-h-screen px-32 py-14 -mt-10 pt-24 hidden" id="skincare">
        <div>
            <div class="m-auto px-4 py-2 w-fit border-2 border-[#27ae60]/100 shadow-lg rounded-md">
                <h1 class="font-bold text-3xl text-[#219150]">Daftar Skincare Yang Dijual</h1>
            </div>
            <div id="content" class="mt-12 m-auto w-fit grid grid-cols-4 gap-x-5 gap-y-10">
                
            {{-- isi dari skincare yang dicari --}}

            </div>
        </div>
    </div>

    <div class="px-32 py-5 bg-[#27ae60]">
        <div class="grid grid-cols-4 gap-20 py-5 border-b-2 border-[#219150] text-white">
            <div>
                <h1 class="text-xl font-bold">Kategori Skincare</h1>
                <div class="flex flex-col mt-3">
                    <a href="#">Facial Cleanser</a>
                    <a href="#">Facial Wash</a>
                    <a href="#">Serum</a>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold">Lihat Skincare</h1>
                <div class="flex flex-col mt-3">
                    <a href="#">Trending</a>
                    <a href="#">Terbaru</a>
                    <a href="#">Terlaris</a>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold">GantengSkuy</h1>
                <div class="flex flex-col mt-3">
                    <a href="#">Tentang</a>
                    <a href="#">Mitra</a>
                    <a href="#">Blog</a>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold">Ikuti Kami</h1>
                <div class="flex flex-col mt-3">
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
        <div class="flex justify-between py-5 font-medium">
            <h1>&copy; 2022 GantengSkuy</h1>
            <a href="#">Persyaratan & Privasi</a>
        </div>
    </div>
    
</body>
</html>