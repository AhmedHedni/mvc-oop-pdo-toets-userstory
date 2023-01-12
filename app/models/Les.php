<?php
/**
 * Dit is de model voor de controller Lessen
 */

class Les
{
    //properties
    private $db;

    // Dit is de constructor van de Mankement model class
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLessen()
    {
        $this->db->query("SELECT Les.DatumTijd
                                ,Les.Id as LEID
                                ,Leerling.Id
                                ,Leerling.Naam as LENA
                                ,Instructeur.Naam as INNA
                          FROM Les
                          INNER JOIN Leerling
                          ON Leerling.Id = Les.LeerlingId
                          INNER JOIN Instructeur
                          ON Instructeur.Id = Les.InstructeurId
                          WHERE Les.InstructeurId = :Id");

        $this->db->bind(':Id', 2, PDO::PARAM_INT);

        return $this->db->resultSet();
    }
}