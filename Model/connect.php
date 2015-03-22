<?php

class repo {

    public $db;

    function getAll() {
        // vavriable de base
        $server = 'localhost';
        $dbname = 'blogv1';
        $user = 'root';
        $pwd = '0408';

        $dsn = 'mysql:dbname=' . $dbname . ';host=' . $server . '; charset=utf8';

        $this->db = new PDO($dsn, $user, $pwd);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// détruire les autres variables
        unset($server, $dbname, $user, $pwd);
        $this->db->exec("SET CHARSET SET utf8");
        $sql = "SELECT  * FROM article";
// on fait passer la requete a PDO
        $statement = $this->db->query($sql); // objet statement
// si il y a un article fech retourne true sinon false
        $articles = $statement->fetchall();
        return $articles;
    }

    function get($id) {
       
        $server = 'localhost';
        $dbname = 'blogv1';
        $user = 'root';
        $pwd = '0408';

        $dsn = 'mysql:dbname=' . $dbname . ';host=' . $server . '; charset=utf8';

        $this->db = new PDO($dsn, $user, $pwd);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// détruire les autres variables
        unset($server, $dbname, $user, $pwd);
        $this->db->exec("SET CHARSET SET utf8");
        $sql = "SELECT FROM article WHERE id=".$id;
// on fait passer la requete a PDO
        $statement = $this->db->query($sql); // objet statement
// si il y a un article fech retourne true sinon false
        $article = $statement->fetch();
        return $article;
        
    }

}
