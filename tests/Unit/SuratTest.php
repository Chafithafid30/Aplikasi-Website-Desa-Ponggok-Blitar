<?php
namespace Tests\Unit;

/*
Dibawah ini TestCase asli bawaan PHPUNIT, namun disini
tidak menggunakan PHPUNIT, melainkan menggunakan php artisan.
Kalau dari tutorial youtube itu bilangnya pakai unit testing bawaan laravel

use PHPUnit\Framework\TestCase; --> Jadi ini tidak dipakai, tapi tetap dicatat

*/

use App\Models\Surat;
use App\Models\Kategori;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SuratTest extends TestCase
{

      /**
    Dibawah contoh function test jadi tdk dihapus, biar bisa dijadikan panduan

    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    */

    use RefreshDatabase;

    public function test_models_surat_dapat_dibuat()
    {
        // Arrange
        $kategori = Kategori::create(['kategoriSurat' => 'Test Kategori']);
        $suratData = [
            'namaPengaju' => 'John Doe',
            'nik' => '1234567890',
            'detailAjuan' => 'Test Ajuan',
            'ktpPic' => 'path/to/ktpPic.jpg',
            'kategoriSurat' => $kategori->kategoriSurat,
            'pdfDokumen' => 'path/to/pdfDokumen.pdf',
            'statusSurat' => 1,
            'wa' => '1234567890',
            'email' => 'john.doe@example.com',
        ];

        // Act
        $surat = Surat::create($suratData);
        $retrievedSurat = Surat::find($surat->id);

        // Assert
        $this->assertEquals($suratData['namaPengaju'], $retrievedSurat->namaPengaju);
        $this->assertEquals($suratData['nik'], $retrievedSurat->nik);
        $this->assertEquals($suratData['detailAjuan'], $retrievedSurat->detailAjuan);
    }
}
