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

    public function test_delete()
    {
        $response = $this->delete('/api/usuarios/4');
        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario eliminado exitosamente',
            ]);
    }
    public function test_update()
    {
        $response = $this->put('/api/usuarios/3', ['nombre' => 'juan','email' => 'cesar@gmail.com','password' => '12345678']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Usuario actualizado exitosamente',
            ]);
    }
}
