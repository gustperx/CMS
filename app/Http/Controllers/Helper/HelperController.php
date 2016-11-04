<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Repository\Helper\HelperRepository;

class HelperController extends Controller
{
    private $helperRepository;

    public function __construct()
    {

        $this->helperRepository = new HelperRepository();

    }

    public function city($id)
    {
        sleep(1);
        return $this->helperRepository->getCity($id);
    }

}
