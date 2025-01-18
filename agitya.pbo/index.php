<!DOCTYPE html>
<html>

<head>
    <title>Pemrograman Berorientasi Objek</title>
    <style>
        body {
            font-family: 'arial', sans-serif;
            background-color: aliceblue;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #382642;
            font-size: 28px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
            font-size: 14px;
            color: #34495e;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
            color: #2c3e50;
        }
    </style>
</head>

<body>
    <h1 align="left">Pemrograman Berorientasi Objek</h1>
    <p>Jika Anda pernah mendengar istilah ini tapi belum benar-benar paham apa maksudnya, Anda berada di tempat yang
        tepat. PBO adalah salah satu pendekatan paling populer dan efektif dalam pemrograman, terutama ketika kita
        berbicara tentang pengembangan perangkat lunak skala besar dan kompleks.
    </p>

    <h1 align="left">Pengertian</h1>
    <p>Pemrograman Berorientasi Objek (PBO) atau Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
        menggunakan "objek" sebagai unit dasar dari program yang dikembangkan. Paradigma ini dirancang untuk
        menyederhanakan pemodelan sistem perangkat lunak yang kompleks dengan cara memetakan konsep dunia nyata ke dalam
        program komputer.
    </p>

    <h1 align="left">Bahasa Pemrograman yang Mendukung</h1>
    <p>Macam-Macam Bahasa Pemrograman Terbaik untuk Dipelajari:</p>
    <ul>
        <li>Python</li>
        <li>C#</li>
        <li>C++</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>Swift</li>
        <li>Java</li>
        <li>Go</li>
        <li>SQL</li>
        <li>Ruby</li>
    </ul>

    <h1>Membuat Tabel Kategori Produk</h1>

    <table>
        <tr>
            <th>NO</th>
            <th>KATEGORI PRODUK</th>
            <th>NAMA PRODUK</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bumbu dapur</td>
            <td>Garam</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bumbu dapur</td>
            <td>Cabe</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bumbu dapur</td>
            <td>Lengkuas</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bumbu dapur</td>
            <td>Terasi</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sembako</td>
            <td>Beras</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sembako</td>
            <td>Minyak goreng</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Sembako</td>
            <td>Gula pasir</td>
        </tr>
    </table>

    <h1>Membuat Tabel Produk</h1>

    <table>
        <tr>
            <th>NO</th>
            <th>PRODUK</th>
            <th>STOCK</th>
            <th>HARGA</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Garam</td>
            <td>10</td>
            <td>7000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cabe</td>
            <td>10</td>
            <td>25000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lengkuas</td>
            <td>10</td>
            <td>12000</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Terasi</td>
            <td>10</td>
            <td>35000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Beras</td>
            <td>10</td>
            <td>13000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Minyak goreng</td>
            <td>10</td>
            <td>15000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Gula pasir</td>
            <td>10</td>
            <td>13000</td>
        </tr>
    </table>
   
    <?php
class Mobil {
    public $warna;
    public $merek;

    function __construct($merek, $warna) {
        $this->merek = $merek;
        $this->warna = $warna;
    }

    function info() {
        return "Mobil: $this->merek, Warna: $this->warna";
    }
}

// Membuat objek 'toyota' dari kelas 'Mobil'
$toyota = new Mobil('Toyota', 'Biru Metalik');

// Menampilkan informasi mobil
echo $toyota->info(); // Output: Mobil: Toyota, Warna: Biru Metalik
?>
</body>

</html>

