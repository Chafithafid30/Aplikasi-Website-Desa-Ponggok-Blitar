// User Test in Laravel 10
 <?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    // Unit Testing Endpoint Pemberkasan Surat
   public function test_pemberkasan_surat(){
    $response = $this->get('/');
    $response->assertStatus(200);
   }

   // Unit Testing Endpoint Pembuatan Surat
   public function test_pembuatan_surat(){
    $response = $this->get('createSurat');
    $response->assertStatus(405);
   }

   // Unit Testing Endpoint cpannel
   public function test_cpannel_surat(){
    $response = $this->get('/cpanel');
    $response->assertStatus(200);
   }

   // Unit Testing Endpoint cpannel login
   public function test_cpannel_login_surat(){
    $response = $this->get('/cpanel/login');
    $response->assertStatus(405);
   }

   // Unit Testing Endpoint Dashboard
   public function test_dashboard(){
    $response = $this->get('/dashboard');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint List Ajuan
   public function test_list_ajuan(){
    $response = $this->get('/ajuan');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Table Ajuan
   public function test_table_ajuan(){
    $response = $this->get('/ajuan-table');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Riwayat
   public function test_riwayat(){
    $response = $this->get('/riwayat');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Verifikasi Ajuan id
   public function test_verifikasi_ajuan_id(){
    $response = $this->get('/ajuan/verifikasi/{id}');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Verifikasi Ajuan
   public function test_verifikasi_ajuan(){
    $response = $this->get('/ajuan/verified-ajuan');
    $response->assertStatus(405);
   }

   // Unit Testing Endpoint Kategori
   public function test_kirim_email(){
    $response = $this->get('/ajuan/kirim-email/{id}');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Kategori Page add
   public function test_kategori_page_add(){
    $response = $this->get('/kategori/page-add');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Page Update id
   public function test_kategori_page_update_id(){
    $response = $this->get('/kategori/page-update/{id}');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Kategori Store
   public function test_kategori_store(){
    $response = $this->get('/kategori/store');
    $response->assertStatus(405);
   }

   // Unit Testing Endpoint Kategori Update id
   public function test_kategori_update_id(){
    $response = $this->get('/kategori/update/{id}');
    $response->assertStatus(405);
   }

   // Unit Testing Endpoint Kategori Destroy id
   public function test_kategori_destroy_id(){
    $response = $this->get('/kategori/destroy/{id}');
    $response->assertStatus(405);
   }

   // Unit Testing Endpoint Kategori Signature id
   public function test_signature_id(){
    $response = $this->get('/ajuan/signature/{id}');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint Show PDF id
   public function test_show_pdf_id(){
    $response = $this->get('/show-pdf/{id}');
    $response->assertStatus(302);
   }

   // Unit Testing Endpoint logout
   public function test_logout(){
    $response = $this->get('/cpanel/logout');
    $response->assertStatus(302);
   }
}
