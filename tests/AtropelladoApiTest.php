<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AtropelladoApiTest extends TestCase
{
    use MakeAtropelladoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAtropellado()
    {
        $atropellado = $this->fakeAtropelladoData();
        $this->json('POST', '/api/v1/atropellados', $atropellado);

        $this->assertApiResponse($atropellado);
    }

    /**
     * @test
     */
    public function testReadAtropellado()
    {
        $atropellado = $this->makeAtropellado();
        $this->json('GET', '/api/v1/atropellados/'.$atropellado->id);

        $this->assertApiResponse($atropellado->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAtropellado()
    {
        $atropellado = $this->makeAtropellado();
        $editedAtropellado = $this->fakeAtropelladoData();

        $this->json('PUT', '/api/v1/atropellados/'.$atropellado->id, $editedAtropellado);

        $this->assertApiResponse($editedAtropellado);
    }

    /**
     * @test
     */
    public function testDeleteAtropellado()
    {
        $atropellado = $this->makeAtropellado();
        $this->json('DELETE', '/api/v1/atropellados/'.$atropellado->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/atropellados/'.$atropellado->id);

        $this->assertResponseStatus(404);
    }
}
