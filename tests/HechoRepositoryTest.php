<?php

use App\Models\Hecho;
use App\Repositories\HechoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HechoRepositoryTest extends TestCase
{
    use MakeHechoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var HechoRepository
     */
    protected $hechoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->hechoRepo = App::make(HechoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateHecho()
    {
        $hecho = $this->fakeHechoData();
        $createdHecho = $this->hechoRepo->create($hecho);
        $createdHecho = $createdHecho->toArray();
        $this->assertArrayHasKey('id', $createdHecho);
        $this->assertNotNull($createdHecho['id'], 'Created Hecho must have id specified');
        $this->assertNotNull(Hecho::find($createdHecho['id']), 'Hecho with given id must be in DB');
        $this->assertModelData($hecho, $createdHecho);
    }

    /**
     * @test read
     */
    public function testReadHecho()
    {
        $hecho = $this->makeHecho();
        $dbHecho = $this->hechoRepo->find($hecho->id);
        $dbHecho = $dbHecho->toArray();
        $this->assertModelData($hecho->toArray(), $dbHecho);
    }

    /**
     * @test update
     */
    public function testUpdateHecho()
    {
        $hecho = $this->makeHecho();
        $fakeHecho = $this->fakeHechoData();
        $updatedHecho = $this->hechoRepo->update($fakeHecho, $hecho->id);
        $this->assertModelData($fakeHecho, $updatedHecho->toArray());
        $dbHecho = $this->hechoRepo->find($hecho->id);
        $this->assertModelData($fakeHecho, $dbHecho->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteHecho()
    {
        $hecho = $this->makeHecho();
        $resp = $this->hechoRepo->delete($hecho->id);
        $this->assertTrue($resp);
        $this->assertNull(Hecho::find($hecho->id), 'Hecho should not exist in DB');
    }
}
