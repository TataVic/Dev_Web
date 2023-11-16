<?php
class Pessoa extends model{
    public function adiconar($nome, $idade, $sexo, $endereco){
        $sql = "INSERT INTO pessoa (nome, idade, sexo, endereco)
                VALUES (:nome, :idade, :sexo, :endereco)";
            $sql = $this->db->prepare($sql);
            $sql->bindvalue(":nome" , $nome);
            $sql->bindvalue(":idade" , $idade);
            $sql->bindvalue(":sexo" , $sexo);
            $sql->bindvalue(":endereco" , $endereco);
            $sql->execute();
    }
    public function get(){
        $array = array();

        $sql = "SELECT * FROM pessoa 
        WHERE id_pessoa = :id_pessoa";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
           $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;
    }
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