<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;  
use Kreait\Firebase\Factory;  
use Kreait\Firebase\ServiceAccount;  
use Kreait\Firebase\Database; 

class FirebaseController extends Controller  
{  
    public function index(){  
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');  
        $firebase = (new Factory)  
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://dispenserberas-default-rtdb.firebaseio.com/')
            ->create();  
        $database = $firebase->getDatabase();  
        $newPost = $database
        ->getReference('penyimpanan/posts')
        ->push([
            'berat' => '16',
            'suhu' => '24',
            'kelembapan' => '23',
            'tanggal' => '13/04/2021 15:30:00'
        ]);
        echo"<pre>";
        print_r($newPost->getvalue());
    }
}