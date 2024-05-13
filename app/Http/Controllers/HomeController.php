<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
            $courses=[
                [
                    'name'=> 'full-stack',
                    'aciklama'=> 'full-stack kurs aciklamasi',
                    'status'=> '1',
                ],
                [
                    'name'=> 'siber guvenlik',
                    'aciklama'=> 'siber guvenlik kurs aciklamasi',
                    'status'=> '1',
                ],
                [
                    'name'=> 'data science',
                    'aciklama'=> 'data science kurs aciklamasi',
                    'status'=> '0',
                ],
                [
                    'name'=> 'it support',
                    'aciklama'=> 'it support kurs aciklamasi',
                    'status'=> '0',
                ],
            ];
        
            return view('home', compact('courses'));
            
    }

}

/*crud
c->create
r->read
u->update
d->delete


resource controller
*/