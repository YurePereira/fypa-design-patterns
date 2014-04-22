<?php
/**
 * Description of Command
 *
 * @author francisco.yure
 */
abstract class Command {
    protected $idao;
    public function __construct(IDAO $idao) {
        $this->idao = $idao;
    }
    abstract function execute();
}
