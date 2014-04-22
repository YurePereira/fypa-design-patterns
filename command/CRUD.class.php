<?php
/**
 * Description of CRUD
 *
 * @author francisco.yure
 */
class CRUD {
    public $c;
    public function __construct(Command $c) {
        $this->c = $c;
    }
    public function doTask() {
        $this->c->execute();
    }
}
