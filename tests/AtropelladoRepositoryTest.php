<?php

use App\Models\Atropellado;
use App\Repositories\AtropelladoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AtropelladoRepositoryTest extends TestCase
{
    use MakeAtropelladoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AtropelladoRepository
     */
    protected $atropelladoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->atropelladoRepo = App::make(AtropelladoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAtropellado()
    {
        $atropellado = $this->fakeAtropelladoData();
        $createdAtropellado = $this->atropelladoRepo->create($atropellado);
        $createdAtropellado = $createdAtropellado->toArray();
        $this->assertArrayHasKey('id', $createdAtropellado);
        $this->assertNotNull($createdAtropellado['id'], 'Created Atropellado must have id specified');
        $this->assertNotNull(Atropellado::find($createdAtropellado['id']), 'Atropellado with given id must be in DB');
        $this->assertModelData($atropellado, $createdAtropellado);
    }

    /**
     * @test read
     */
    public function testReadAtropellado()
    {
        $atropellado = $this->makeAtropellado();
        $dbAtropellado = $this->atropelladoRepo->find($atropellado->id);
        $dbAtropellado = $dbAtropellado->toArray();
        $this->assertModelData($atropellado->toArray(), $dbAtropellado);
    }

    /**
     * @test update
     */
    public function testUpdateAtropellado()
    {
        $atropellado = $this->makeAtropellado();
        $fakeAtropellado = $this->fakeAtropelladoData();
        $updatedAtropellado = $this->atropelladoRepo->update($fakeAtropellado, $atropellado->id);
        $this->assertModelData($fakeAtropellado, $updatedAtropellado->toArray());
        $dbAtropellado = $this->atropelladoRepo->find($atropellado->id);
        $this->assertModelData($fakeAtropellado, $dbAtropellado->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAtropellado()
    {
        $atropellado = $this->makeAtropellado();
        $resp = $this->atropelladoRepo->delete($atropellado->id);
        $this->assertTrue($resp);
        $this->assertNull(Atropellado::find($atropellado->id), 'Atropellado should not exist in DB');
    }
}
