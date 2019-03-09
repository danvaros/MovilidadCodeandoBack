<?php

use Faker\Factory as Faker;
use App\Models\Atropellado;
use App\Repositories\AtropelladoRepository;

trait MakeAtropelladoTrait
{
    /**
     * Create fake instance of Atropellado and save it in database
     *
     * @param array $atropelladoFields
     * @return Atropellado
     */
    public function makeAtropellado($atropelladoFields = [])
    {
        /** @var AtropelladoRepository $atropelladoRepo */
        $atropelladoRepo = App::make(AtropelladoRepository::class);
        $theme = $this->fakeAtropelladoData($atropelladoFields);
        return $atropelladoRepo->create($theme);
    }

    /**
     * Get fake instance of Atropellado
     *
     * @param array $atropelladoFields
     * @return Atropellado
     */
    public function fakeAtropellado($atropelladoFields = [])
    {
        return new Atropellado($this->fakeAtropelladoData($atropelladoFields));
    }

    /**
     * Get fake data of Atropellado
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAtropelladoData($atropelladoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'usuario' => $fake->word,
            'tuit' => $fake->word,
            'liga' => $fake->word,
            'short_url' => $fake->word,
            'fecha' => $fake->word,
            'comenatario1' => $fake->word,
            'comentario2' => $fake->word,
            'comentario3' => $fake->word,
            'comentario4' => $fake->word,
            'comentario5' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $atropelladoFields);
    }
}
