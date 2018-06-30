<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// VERSI INDONESIA (KALO GA NGERTI BAHASA INGGRIS)

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Nah disini tempat kalian mendefinisikan route (url) yang bisa di akses oleh app laravelnya.
| untuk bagian RouteServiceProvider dan middleware group ga bakal di jelasin. 
| Kasian yang baru nyoba bingung nanti.
|
*/

/*
|--------------------------------------------------------------------------
| Cara Kerja Route - Bagian 1 
|--------------------------------------------------------------------------
    Jadi begini
    cara kerja route itu , sebelumnya kita harus mendefinisikan method apa yang mau di pakai. 
    methodnya. Berdasarkan hasil pertemuan I kita hanya membahas Route dengan method GET.

    formatnya adalah :

        Route::method('url','callback');

        terdapat 2 parameter, yaitu 'url' dan 'callback'.

        untuk parameter url merupakan alamat url yang akan di akses.
        sedangkan untuk callback adalah function apa yang akan terjadi bila url tersebut diakses

        Untuk lebih jelasnya bisa akses Contoh 1.1

*/

Route::get('/', function () {
    return view('welcome');
});

//CONTOH 1.1
Route::get('disini-urlnya',function ()
{
    // ini yang akan terjadi bila mengakses url /disini-urlnya, menampilkan pesan
    return 'Ini merupakan callback saat anda mengakses url "disini-urlnya"';
});


/*
|--------------------------------------------------------------------------
| Cara Kerja Route - Bagian 2
|--------------------------------------------------------------------------
    Nah berdasarkan contoh 1.1 pasti kalian paham bagaimana cara kerja route.
    Lalu bagi kalian yang baru mencoba.. pasti akan timbul pertanyaan..

    "Gua punya halaman, nah gua pingin nampilin tuh halaman pas urlnya di akses.. gimana caranya?"

    nah itu bisa menggunakan fungsi view() pada callbacknya.

    fungsi view() ini merupakan fungsi basic laravel untuk menampilkan halaman yang 
    terdapat pada direktori resources/views. nah untuk jelasnya bisa cek Contoh 1.2

*/

// CONTOH 1.2
Route::get('akses-template',function(){
    /*
        dengan fungsi view() kalian dapat menampilkan template blade tanpa perlu mencantumkan ".blade.php"
        berikut adalah contoh menampilkan tampilan1.blade.php yang terdapat pada folder example
    */
    return view('example.tampilan1');
    /*
        nah perlu kalian ketahui juga kalau view() itu ada 2 parameter lho..
        parameter pertama itu adalah lokasi dari templatenya, sedangkan parameter kedua itu bersifat OPTIONAL.
        jadi bisa di isi bisa kaga.. parameter kedua itu berisi data array yang mau di tambahkan.. 
        seperti : 
        
        $ini_array['judul'] = "Iki Judulnya"
        $ini_array['subjudul'] = "Iki subjudulnya"

        nanti tinggal pakai

        view('template',$ini_array);
    */


    // INGAT !!! FUNGSI view() MENGAKSES HALAMAN YANG TERDAPAT PADA resources/views. 
    
});

/*
|--------------------------------------------------------------------------
| Cara Kerja Route - Bagian 3
|--------------------------------------------------------------------------
   Next, mungkin salah satu dari kalian akan timbul lah pertanyaan..

   "Gua sebenarnya ga ngerti penerapan route ini kayak gimana dalam pengembangan 
    app laravel.. anyone can tell me how to use this shit?!"

    Oke.. jadi begini cara kerjanya. Ini versi penjelasan para fasil .. Semoga kalian paham.
    
    Simpelnya gini nih.. 

    Dalam development app laravel, kalian tentuin dulu end pointnya (url yang akan di akses),
    kemudian apa yg akan terjadi saat url di akses (callbacknya).
    Nah kalian disarankan untuk menulis callbacknya BUKAN DI FILE web.php INI, tapi di controller.
    
    jadi seperti .. 
    "saat user mengakses /student maka kita akan mengarahkan ke StudentController sesuai dengan fungsi 
    di butuhkan"

    Wait.. fungsi yang dibutuhkan? gimana lagi tu? 

    yaa.. belajar laravel sama seperti belajar naik sepeda.. gak deng.. lebih susah keknya.. 

    lanjut ke Bagian - 4

*/


/*
|--------------------------------------------------------------------------
| Cara Kerja Route - Bagian 4
|--------------------------------------------------------------------------
   Oke, gua pisah section ini karna ini berisi sesuatu yg berbeda.

   Jadi gini nih, callback di route laravel disarankan untuk diletakan pada Controller. Bukan Disini.
   Cara pakainya adalah :

   Route::method('url','NamaController@fungsiYangDituju');

   lebih jelas cek Contoh 1.4
*/

// CONTOH 1.4

Route::get('example-controller1','ExampleController@contoh1');

/*
|--------------------------------------------------------------------------
| Cara Kerja Route - Bagian 5
|--------------------------------------------------------------------------
   Lanjut lagi belajarnya..

   Sekarang kita bahas "parsing value melalui url"

   oke, bagi yg pertama nyoba framework akan berfikir
   "WTF !? Apalagi ni.. istilahnya makin aneh aja"

   Gini, pernah kan kalian liat url tuh isinya
   /user/K00001
   
   atau
   /transaction/detail/b0192-12341-1ae91-12-e121a

   nah pada url tersebut di tempelkan nilai. ini biasanya diterapkan saat kita
   akan menampilkan sebuah data berdasarkan value yg dikirim di url.
   bingung?

   simpelnya. lu akses url sambil ngasi data.

   penggunaannya macam begini

   Route::method('url/{data-yang-akan-disisipkan}/entah-kalau-kalian-mau-nambahin',NamaController@fungsi);

   pada fungsi callbacknya, jangan lupa menambahkan parameter untuk menerima datanya.
   lebih lanjut cek contoh 1.5
*/

// CONTOH 1.5
Route::get('example-sisip-data/{data}','ExampleController@contoh2');
// Coba kalian akses example-sisip-data/anggap-saja-ini-data-yang-disisipkan dan lihat kelanjutannya

//SEKIAN PEMBAHASAN PERTEMUAN I