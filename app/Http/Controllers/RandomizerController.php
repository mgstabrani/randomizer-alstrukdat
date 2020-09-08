<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomizerController extends Controller
{
    public function random()
    {   
        $random = rand(1,57);
        $file = fopen("test.csv","r");
        $current = fgetcsv($file);
        $mhs = $current;

        while(! feof($file) && $random != intval($current[0]))
        {
            $current = fgetcsv($file);
            if(intval($current[0]) == $random){
                $mhs = $current;
            }      
        }
        fclose($file);


        // if($mhs['3'] == "Belum"){
        //     $mhs['4'] = "Sudah";
        // }else{
        //     $mhs['4'] = "Belum";
        // }
        return view('welcome', compact('mhs'));
    }
}
