<?php

namespace App\Repository;

use App\Http\Controllers\Controller;

use Illuminate\Support\Collection;

use App\Models\User\User;

use Illuminate\Support\Facades\DB;

class BaseRepository extends Controller
{
    private $collection;

    private $users;

    public function __construct()
    {

        $this->collection = new Collection();

        $this->users = new User();

    }

    public function getUsers($role)
    {
        return DB::table('users')

            ->join('profiles', function ($join) use ($role) {

                $join   ->on('profiles.id', '=', 'users.profile_id')

                        ->where('users.role_id', '=', $role);

            })

            ->lists('profiles.name', 'users.id');

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