<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
<<<<<<< HEAD

class Controller extends BaseController
{
=======
use RealRashid\SweetAlert\Facades\Alert;
use \Illuminate\Support\Facades\Facade;
class Controller extends BaseController
{

    public function __construct()
    {
        $this->middleware(function($request,$next){
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            if (session('errorForm')) {
                $html = "<ul style='list-style: none;'>";
                foreach(session('errorForm') as $error) {
                    $html .= "<li>$error[0]</li>";
                }
                $html .= "</ul>";

                Alert::html('Error during the creation!', $html, 'error');
            }

            return $next($request);
        });
    }
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
