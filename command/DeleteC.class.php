<?php
/**
 * Description of DeleteC
 *
 * @author francisco.yure
 */
class DeleteC extends Command {
    public function __construct(IDAO $idao) {
        parent::__construct($idao);
    }
    public function execute() {
        $this->idao->delete();
    }
}