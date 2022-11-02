<?php

namespace App\Exceptions;

use Exception;

class PageNotFoundException extends Exception
{
    //
    function report()
    {

    }
    function render()
    {
        return view('errors.page-not-found');
    }
}
