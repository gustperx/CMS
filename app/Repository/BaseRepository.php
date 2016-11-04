<?php

namespace App\Repository;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class BaseRepository extends Controller
{
    private $collection;

    public function __construct()
    {

        $this->collection = new Collection();

    }

    public function getCollection($data)
    {

        if(! is_object($data))
        {
            if(is_array($data))
            {
                return $this->collection->make($data);
            }

            return 'data no support';
        }
        elseif(is_object($data))
        {
            return $data;
        }

        return 'data no support';
    }
}