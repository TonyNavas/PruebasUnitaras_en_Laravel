<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
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
        $response = $this->put('/api/usuarios/7', 
        ['nombre' => 'cesar',
         'email' => 'cesar@gmail.com',
         'password' => '12345678']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario actualizado exitosamente',
            ]);
    }

    public function test_delete()
    {
        $response = $this->delete('/api/usuarios/3');
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
        ['nombre' => 'tony',
         'email' => 'tony@gmail.com',
         'password' => '12345678']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario guardado exitosamente',
            ]);
    }
}
