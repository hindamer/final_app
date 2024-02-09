<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('admin.layout',function($shows){  
            $nums=Contact::where('num_unread_msg',0)->orderBy('created_at','desc')->get();
            $shows->with("nums",$nums);
            });
    }

    /**
     * Bootstrap any application services.
    */
    public function boot(): void
    {
        view()->composer('admin.layout',function($show){  
        $num=Contact::where('num_unread_msg',0)->count();
        $show->with("unread",$num);
        });
    }
 
}
