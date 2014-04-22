<?php
/**
 * Description of RegisterC
 *
 * @author francisco.yure
 */
class RegisterC extends Command {
    public function __construct(IDAO $idao) {
        parent::__construct($idao);
    }
    public function execute() {
        $this->idao->register();
    }
}
