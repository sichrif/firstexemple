<?php

class dbconnection{
    public $cnx=null;
    private $dbhost= 'localhost';
    private $dbname= 'dsi21_g1_2019';
    private $dbuser='root';
    private $pass='';
    public function connecta()
    {
       
        try{
            $this->cnx=new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->pass);
        }catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            }
            return $this->cnx;
    }


}