<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_update()
    {
        $response = $this->put('/api/usuarios/8', 
        ['nombre' => 'cesar1',
         'email' => 'cesar1@gmail.com',
         'password' => '12345678']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario actualizado exitosamente',
            ]);
    }

    public function test_delete()
    {
        $response = $this->delete('/api/usuarios/7');
        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario eliminado exitosamente',
            ]);
    }

    public function test_show()
    {
        $response = $this->get('/api/usuarios/3');
        $response
            ->assertStatus(200)
            ->assertJson([
            ]);
    }
    public function test_index()
    {
        $response = $this->get('/api/usuarios');
        $response
            ->assertStatus(200)
            ->assertJson([
            ]);
    }
    public function test_store()
    {
        $response = $this->post('/api/usuarios', 
        ['nombre' => 'tony10',
         'email' => 'tony10@gmail.com',
         'password' => '12345678']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario guardado exitosamente',
            ]);
    }
}
