<?php

namespace Tests\Unit;

/*
Dibawah ini TestCase asli bawaan PHPUNIT, namun disini
tidak menggunakan PHPUNIT, melainkan menggunakan php artisan.
Kalau dari tutorial youtube itu bilangnya pakai unit testing bawaan laravel

use PHPUnit\Framework\TestCase; --> Jadi ini tidak dipakai, tapi tetap dicatat

*/

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserModelsTest extends TestCase
{
    /**
     *
    Dibawah contoh function test bawaan jadi tdk dihapus, biar bisa dijadikan panduan

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    */

    use RefreshDatabase;

    public function test_models_user_dapat_dibuat()
    {
        // Arrange
        $userData = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ];

        // Act
        $user = User::create($userData);
        $retrievedUser = User::find($user->id);

        // Assert
        $this->assertEquals($userData['name'], $retrievedUser->name);
        $this->assertEquals($userData['email'], $retrievedUser->email);
        $this->assertTrue(password_verify('password123', $retrievedUser->password));
        $this->assertEquals($userData['role'], $retrievedUser->role);
    }
}
