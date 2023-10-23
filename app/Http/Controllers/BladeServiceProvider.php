<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
class BladeServiceProvider  extends ServiceProvider
{
    public function index()
    {
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('M d/y @ h:ma'); ?>";
        });
    }
}
