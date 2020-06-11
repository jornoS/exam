<?php
class klant {
    private $db;

    public function __construct()
    {
        include_once('DB.php');
        $this->db = new DB();
    }

    public function FetchKlant($klantID=NULL) {
        if (!empty($klantID)) {
            $PDO = $this->db->openConnection();
            $SQL = "SELECT * FROM klanten WHERE Klant_ID = :klantID";
            $qeury = $PDO->prepare($SQL);
            $qeury->bindParam('klantID', $klantID);
            $qeury->execute();
            return $qeury->fetchAll();
        } else {
        $PDO = $this->db->openConnection();
        $SQL = "SELECT * FROM klanten";
        $qeury = $PDO->prepare($SQL);
        $qeury->execute();
        return $qeury->fetchAll();
        }

    }

    public function AddKlant($klantnaam,$straat,$mobiel,$postcode,$memo){
        if (!empty($klantnaam) && !empty($straat) && !empty($mobiel) && !empty($postcode) && !empty($memo)){
            $PDO = $this->db->openConnection();
            $SQL = "INSERT INTO klanten(Klant_ID,Klant_Naam,adres,telefoon,Postcode,memo) VALUES((SELECT UUID()),:klantnaam,:straat,:mobiel,:postcode,:memo)";
            $qeury = $PDO->prepare($SQL);
            $qeury->bindParam('klantnaam', $klantnaam);
            $qeury->bindParam('straat', $straat);
            $qeury->bindParam('mobiel', $mobiel);
            $qeury->bindParam('postcode', $postcode);
            $qeury->bindParam('memo', $memo);
            $qeury->execute();
            header('Location: KlantTabel.php');
            exit();
        } else {
            echo "werkt niet";
        }
    }

    public function UpdateKlant($ID,$klantnaam,$straat,$mobiel,$postcode,$memo){
        if (!empty($ID) && !empty($klantnaam) && !empty($straat) && !empty($mobiel) && !empty($postcode) && !empty($memo)){
            $PDO = $this->db->openConnection();
            $SQL = "UPDATE klanten SET Klant_Naam = :klantnaam,adres = :straat,telefoon = :mobiel,Postcode = :postcode,memo = :memo WHERE Klant_ID = :ID";
            $qeury = $PDO->prepare($SQL);
            $qeury->bindParam('ID', $ID);
            $qeury->bindParam('klantnaam', $klantnaam);
            $qeury->bindParam('straat', $straat);
            $qeury->bindParam('mobiel', $mobiel);
            $qeury->bindParam('postcode', $postcode);
            $qeury->bindParam('memo', $memo);
            $qeury->execute();
            header('Location: KlantTabel.php');
            exit();
        } else {
            echo "werkt niet";
        }
    }

    public function DeleteKlant($id)
    {
            $PDO = $this->db->openConnection();
            $SQL = "DELETE FROM klanten WHERE Klant_ID = :ID";
            $qeury = $PDO->prepare($SQL);
            $qeury->bindParam('ID', $id);
            $qeury->execute();
            header('Location: index.php');
            exit();
    }
}