<?php

namespace AshikKaiser\AuthLog\Tests\Unit;

use Illuminate\Support\Facades\Auth;
use AshikKaiser\AuthLog\Tests\Models\User;
use AshikKaiser\AuthLog\Tests\TestCase;

class StoreLoginsTest extends TestCase
{
    /** @test */
    public function it_stores_logins_in_the_database()
    {
        $user = User::create(['name' => 'JohnDoe']);

        Auth::login($user);

        $this->assertDatabaseHas('auth_log', [
            'authenticatable_id' => $user->id,
        ]);
    }
}
