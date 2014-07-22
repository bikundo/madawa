<?php  


View::composer('vouchers.testing', function($view)
{
    $view->with('count', User::count());
});
