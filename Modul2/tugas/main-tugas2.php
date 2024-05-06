<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body class="bg-blue-500 outline outline-black">
    <div class="container">
        <div class="w-96 m-5 p-5 bg-white shadow-xl rounded-xl">
        <h2 class="font-bold text-4xl">Form Biodata</h2>
        <br>
    <form action="main-tugas2.php" method="POST">

        <label for="nama">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Nama</span>
            <input type="text" id="nama" placeholder="Nama kamu.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
        </label>

        <label for="gender">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Gender</span>
            <input type="radio" id="laki_laki" name="gender" value="Laki-laki" required class="display-inline">
            <label for="laki_laki" class="">Laki-laki</label><br>
            <input type="radio" id="perempuan" name="gender" value="Perempuan" required class="display-inline">
            <label for="perempuan" class="">Perempuan</label><br><br>
        </label>

        <label for="agama">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Agama</span>
            <select class="border-2 border-blue-300 rounded-lg py-2 px-3 shadow-lg" id="agama" name="agama" required>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            <br><br>
        </label>

        <label for="alamat">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Alamat</span>
            <textarea class="border-2 border-blue-300 rounded-lg py-2 px-3 shadow-lg" id="alamat" name="alamat" required></textarea><br><br>
        </label>

        <label for="tempat_lahir">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Tempat Lahir</span>
            <input type="text" id="tempat_lahir" placeholder="Kamu lahir di..." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
        </label>

        <label for="tanggal_lahir">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Tanggal Lahir</span>
            <input class="border-2 border-blue-300 rounded-lg py-2 px-3 shadow-lg" type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>
        </label>

        <label for="sekolah">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Asal Sekolah</span>
            <input type="text" id="sekolah" placeholder="Kamu sekolah di.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
        </label>

        <label for="usia">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Usia</span>
            <input type="number" id="usia" placeholder="Umur kamu.." required class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
        </label>

        <label for="hobi">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Hobi</span>
            <input type="text" id="hobi" placeholder="Hobi kamu.." class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
        </label>

        <label for="cita_cita">
            <span class="block font-bold text-gray-700 mb-1 after:content-['*'] after:ml-0.5 after:text-red-600 after:text-sm">Cita-cita</span>
            <input type="text" id="cita_cita" placeholder="Cita-cita kamu.." class="text-sm w-full mb-5 p-3 rounded-lg shadow-xl bg-gray-50 border ring-1 focus:outline-none focus:ring-sky-500 focus:border-sky-500 focus:transition delay-5s">
        </label>

        <button class="font-bold rounded-xl bg-red-600 text-white shadow-md py-2 px-3 hover:bg-red-800 active:bg-red-900 transition delay-5s">
            Submit
        </button>
    </form>
    </div>
    </div>
</body>
</html>