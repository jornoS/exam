<?php
class factuur {
    private $db;

    public function __construct()
    {
        include_once('DB.php');
        $this->db = new DB();
    }

    public function FetchFactuur() {
        $PDO = $this->db->openConnection();
            $SQL = "SELECT * FROM facturen,offeretes,klanten WHERE facturen.Offerte_ID = offeretes.Offerte_Nummer AND offeretes.Klant_ID = klanten.Klant_ID";
            $qeury = $PDO->prepare($SQL);
            $qeury->execute();
            return $qeury->fetchAll();
    }
}