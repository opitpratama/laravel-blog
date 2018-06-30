<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //

    /*
        HALO!! Ini merupakan controller.
        Cara buat controller ada banyak, tapi saya jelaskan 2 macam saja ya.
        1. Controller Kosongan
            ketik di terminal : php artisan make:controller NamaControllernyaApa
        2. Controller dengan Basic Function CRUD
            ketik di terminal : php artisan make:controller NamaControllernyaApa --resource
    */

    /*
        |----------------------------------------------------------------------------------
        | Controller - Bagian 1
        |----------------------------------------------------------------------------------

        Jadi Controller ini merupakan wadah untuk meletakan Logic, Callback Route, dan juga Function 
        yang berfungsi untuk menghubungkan Model dengan View.. atau bisa dibilang data pada database dengan tampilannya

        Untuk penerapan function sebagai Callback Route bisa di cek di Contoh 1.1 dan 1.2
    */


    // Contoh 1.1
    public function contoh1()
    {
        return "Ini berada di fungsi contoh1() pada ExampleController";
    }

    // Contoh 1.2
    public function contoh2($dataYangDiSisipkan)
    {
        // Nah, terdapat parameter $dataYangDiSisipkan. Parameter tersebut merupakan nilai yang diterima berdasarkan data yg di sisipkan.
        return "data yang disisipkan pada url ini adalah = ".$dataYangDiSisipkan;
    }
}
