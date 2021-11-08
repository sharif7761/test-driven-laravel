<?php

namespace Tests\Unit;

use \App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function user_has_full_name_attribute()
    {
        $user = User::create([
            'name' => 'Sharif',
            'lastname' => 'Ahmed',
            'email' => 'sharif@gmail.com',
            'password' => '12345678'
        ]);

        $this->assertEquals('Sharif Ahmed', $user->fullname);
    }
}
