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

    public function tandai($id)
    {
        $file = fopen("test.csv","r");
        $current = fgetcsv($file);
        $mhs = $current;
        $list = [$current];
        for ($i = 1; $i<58; $i++)
        {    
            $current = fgetcsv($file);      
            if(intval($current[0]) == $id){
                $current = [$current[0],$current[1],$current[2],"Sudah"];
                $mhs = $current;
            } 

            array_push($list,$current);

        }
        fclose($file);
        

        $file = fopen("test.csv","w");
        foreach($list as $data){
            fputcsv($file,$data);
        }
        fclose($file);


        return view('tandai',compact('mhs'));
    }
}
