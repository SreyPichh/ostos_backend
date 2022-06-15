<?php

namespace App\Containers\AppSection\User\Tasks;

use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

class CreateUserByCredentialsTask extends Task
{
    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        bool $isAdmin,
        string $email = null,
        string $password = null,
        string $name = null,
        string $f_name = null,
        string $l_name = null,
        string $gender = null,
        string $first_address,
        string $second_address,
        string $phone_number,
        string $national_id,
        string $birth
    ): User
    {
        try {
            if (!$isAdmin)
            {
                // create new user
                $user = $this->repository->create([
                    'password' => Hash::make($password),
                    'email' => $email,
                    'name' => $name,
                    'f_name' => $f_name,
                    'l_name' => $l_name,
                    'gender' => $gender,
                    'first_address' => $first_address,
                    'second_address' => $second_address,
                    'phone_number' => $phone_number,
                    'national_id' => $national_id,
                    'birth' => $birth,
                    'is_admin' => $isAdmin,
                ]);
            }
            else
            {
                $user = $this->repository->create([
                    'password' => Hash::make($password),
                    'email' => $email,
                    'name' => $name,
                    'gender' => $gender,
                    'birth' => $birth,
                    'is_admin' => $isAdmin,
                ]);
            }

        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }

        return $user;
    }
}
