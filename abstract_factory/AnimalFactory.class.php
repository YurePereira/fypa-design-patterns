<?php

/**
 * Description of GatoFatory
 *
 * @author francisco.yure
 */
class AnimalFactory extends AbstractFactory {

    public function createAnimal($animal) {
        switch (strtolower($animal)) {
            case 'cachorro':
                return new Cachorro();
            case 'gato':
                return new Gato();
            case 'rato':
                return new Rato();
                default:
                return null;
        }
    }

}
