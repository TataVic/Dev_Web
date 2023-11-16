<?php
class Pessoa extends model{
   
    public function getAll(){
        $array = array();

        $sql = "SELECT * FROM pessoa ORDER BY nome";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
           $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;
    }
}