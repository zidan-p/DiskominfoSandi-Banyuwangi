<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PPID</title>
</head>
<body>
    @include('partials.navbar')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="lg:col-span-4 md:col-span-6">
            @include ('partials.side-bar-ppid')
        </div>
        <div class="lg:col-span-8 md:col-span-6 px-4">
            <div class="underline underline-offset-8 decoration-2 decoration-[#f6ca29] text-3xl font-bold pt-10 ">
                PPID (Pejabat Pengelola Informasi dan Dokumentasi)
            </div>
            <div class="img-ppid" style="background-image:url(https://www.banyuwangikab.go.id/media/berita/original/hypzsa_rfy_img-20220623-wa0015.jpg)"></div>
        </div>
    </div>

</body>
</html>