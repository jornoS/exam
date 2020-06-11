<?php
class offerte {
    private $db;

    public function __construct()
    {
        include_once('DB.php');
        $this->db = new DB();
    }
    public function AddOfferte($Klant_ID,$OffertePrijs,$Beschrijving,$OfferteDatum,$status){
        if (!empty($Klant_ID) && !empty($OffertePrijs)  && !empty($Beschrijving) && !empty($OfferteDatum) && !empty($status)){
            $PDO = $this->db->openConnection();
            $SQL = "INSERT INTO offeretes (Offerte_Nummer, Klant_ID, Beschrijving, datum, status, prijs)
            values ((SELECT(UUID())),
            :Klant_ID,
            :Beschrijving,
            :prijs,
            :datum,
            :status)";
            $qeury = $PDO->prepare($SQL);
            
            $qeury->bindParam('Klant_ID', $Klant_ID);
            $qeury->bindParam('prijs', $OffertePrijs);
            $qeury->bindParam('Beschrijving', $Beschrijving);
            $qeury->bindParam('datum', $OfferteDatum);
            $qeury->bindParam('status', $status);
            $qeury->execute();
            header('Location: OffertTabel.php');
            exit();
        } else {
            echo "werkt niet";
        }
    }

    public function FetchOfferte(){
        $PDO = $this->db->openConnection();
        $SQL = "SELECT * FROM offeretes,klanten WHERE klanten.Klant_ID = offeretes.Klant_ID";
        $qeury = $PDO->prepare($SQL);
        $qeury->execute();
        return $qeury->FetchAll();
    }
}