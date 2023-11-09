<?php
class model{
    protected $db;

    public function _construct(){
        global $db;
        $this->db = $db;
    }
}