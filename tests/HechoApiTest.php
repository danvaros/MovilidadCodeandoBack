<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HechoApiTest extends TestCase
{
    use MakeHechoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateHecho()
    {
        $hecho = $this->fakeHechoData();
        $this->json('POST', '/api/v1/hechos', $hecho);

        $this->assertApiResponse($hecho);
    }

    /**
     * @test
     */
    public function testReadHecho()
    {
        $hecho = $this->makeHecho();
        $this->json('GET', '/api/v1/hechos/'.$hecho->id);

        $this->assertApiResponse($hecho->toArray());
    }

    /**
     * @test
     */
    public function testUpdateHecho()
    {
        $hecho = $this->makeHecho();
        $editedHecho = $this->fakeHechoData();

        $this->json('PUT', '/api/v1/hechos/'.$hecho->id, $editedHecho);

        $this->assertApiResponse($editedHecho);
    }

    /**
     * @test
     */
    public function testDeleteHecho()
    {
        $hecho = $this->makeHecho();
        $this->json('DELETE', '/api/v1/hechos/'.$hecho->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/hechos/'.$hecho->id);

        $this->assertResponseStatus(404);
    }
}
