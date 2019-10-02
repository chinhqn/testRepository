<?php
namespace  App\Repositories\User;
use App\Repositories\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository implements UserInterface
{

    public function model()
    {
        return User::class;
    }

    public function getAllUser()
    {
        $users = User::all();
        return $users;
    }
}
