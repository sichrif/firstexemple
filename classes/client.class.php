<?php
 require 'dbconnection.class.php';

class client
{
    private $cnnx;

    public function __construct()
    {
        $db=new dbconnection;
        $this->cnnx=$db->connecta();
    } 

    public function delete($id)
    {
        try{
        $reponse=$this->cnnx->prepare('DELETE FROM students WHERE id =:param_id');
        $reponse->bindParam(':param_id',$id);
        $reponse->execute();
        return $reponse;
    }catch (Exception $e) {
        echo  $e->getMessage();
        }
        }








    public function update($nom,$prenom,$email,$phone,$id)
    {
        try{
            $reponse=$this->cnnx->prepare('UPDATE students SET firstname=:param_firstname,lastname=:param_lastname,email=:param_email,phone=:param_phone where id=:param_id');
            $reponse->bindParam(':param_firstname',$nom);
            $reponse->bindParam(':param_lastname',$prenom);
            $reponse->bindParam(':param_email',$email);
            $reponse->bindParam(':param_phone',$phone);
            $reponse->bindParam(':param_id',$id);
            $reponse->execute(); 
            return $reponse;
            
        }catch (Exception $e) {
            echo  $e->getMessage();
             }
    }
    public function addclient($nom,$prenom,$email,$phone)
    {
        try{
            $rreq='INSERT INTO students(firstname, lastname, email , phone)  VALUES(:clt_nom,:clt_prenom,:clt_email,:clt_phone);';
            $results=$this->cnnx->prepare($rreq);
            $results->bindParam(":clt_nom",$nom);
            $results->bindParam(":clt_prenom",$prenom);
            $results->bindParam(":clt_email",$email);
            $results->bindParam(":clt_phone",$phone);
            $results->execute();
            return $results;
            
        }catch (Exception $e) {
            echo  $e->getMessage();
             }
    }

   public function readAllClients()
   {
    try{
        $req= 'SELECT * FROM students';
        $result=$this->cnnx->prepare($req);
        $result->execute();
        return $result;
    }catch (Exception $e) {
       echo  $e->getMessage();
        }

   }

}