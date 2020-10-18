<?php

namespace Framework\Controllers;

use Framework\Models\Website as Website;
use Framework\Models\Berichten as Berichten;


class Home extends Base
{
    public function index()
    {
        return $this->renderView('index');
    }
}
