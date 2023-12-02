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
use App\Models\Kategori;

class KategoriTest extends TestCase
{
    /**
    Dibawah contoh function test jadi tdk dihapus, biar bisa dijadikan panduan

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    */

    use RefreshDatabase;
    public function test_models_kategori_dapat_dibuat()
    {
        // Arrange
        $kategori = Kategori::create(['kategoriSurat' => 'Test Kategori']);

        // Act
        $retrievedKategori = Kategori::find($kategori->id);

        // Assert
        $this->assertEquals($kategori->kategoriSurat, $retrievedKategori->kategoriSurat);
    }
}
