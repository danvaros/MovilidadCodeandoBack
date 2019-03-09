<?php

use Faker\Factory as Faker;
use App\Models\Hecho;
use App\Repositories\HechoRepository;

trait MakeHechoTrait
{
    /**
     * Create fake instance of Hecho and save it in database
     *
     * @param array $hechoFields
     * @return Hecho
     */
    public function makeHecho($hechoFields = [])
    {
        /** @var HechoRepository $hechoRepo */
        $hechoRepo = App::make(HechoRepository::class);
        $theme = $this->fakeHechoData($hechoFields);
        return $hechoRepo->create($theme);
    }

    /**
     * Get fake instance of Hecho
     *
     * @param array $hechoFields
     * @return Hecho
     */
    public function fakeHecho($hechoFields = [])
    {
        return new Hecho($this->fakeHechoData($hechoFields));
    }

    /**
     * Get fake data of Hecho
     *
     * @param array $postFields
     * @return array
     */
    public function fakeHechoData($hechoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'ID' => $fake->randomDigitNotNull,
            'Fecha' => $fake->word,
            'Mes' => $fake->word,
            'Hora' => $fake->word,
            'Servicio' => $fake->word,
            'Tipo' => $fake->word,
            'Modo' => $fake->word,
            'Estado' => $fake->word,
            'Calle_uno' => $fake->word,
            'Calle_dos' => $fake->word,
            'No_dom' => $fake->word,
            'Colonia' => $fake->word,
            'Conductores_heridos' => $fake->randomDigitNotNull,
            'Pasajeros_heridos' => $fake->randomDigitNotNull,
            'Peatones_heridos' => $fake->randomDigitNotNull,
            'Conductores_muertos' => $fake->randomDigitNotNull,
            'Pasajeros_muertos' => $fake->randomDigitNotNull,
            'Peatones_muertos' => $fake->randomDigitNotNull,
            'Sexo' => $fake->word,
            'Tipo_enervante' => $fake->word,
            'Ruta' => $fake->word,
            'Unidad' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $hechoFields);
    }
}
