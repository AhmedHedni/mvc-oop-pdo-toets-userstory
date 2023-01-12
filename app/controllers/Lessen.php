<?php

class Lessen extends Controller
{
    private $lesModel;

    public function __construct()
    {
        // We maken een object van de model class en stoppen dit in $lesModel
        $this->lesModel = $this->model('Les');
    }

    public function index()
    {
        $result = $this->lesModel->getLessen();

        var_dump($result);

        $rows = "";

        foreach ($result as $lesinfo) {
            $dateTimeObj = 
                new DateTimeImmutable($lesinfo->DatumTijd, 
                                      new DateTimeZone('Europe/Amsterdam'));
            // var_dump($dateTimeObj);
            $rows .= "<tr>
                        <td>{$dateTimeObj->format('d-m-Y')}</td>
                        <td>{$dateTimeObj->format('H:i')}</td>
                        <td>{$lesinfo->LENA}</td>
                        <td></td>
                        <td>
                            <a href='" . URLROOT . "/lessen/topiclesson/{$lesinfo->LEID}'>
                                <img src='" . URLROOT . "/img/b_sbrowse.png' alt='table picture'>
                            </a>
                        </td>
                      </tr>";
        }


        $data = [
            'title' => 'Overzicht Lessen',
            'rows' => $rows,
            'instructorName' => $result[0]->INNA
        ];
        $this->view('lessen/index', $data);
    }

    public function topicLesson($id = NULL)
    {
        $data = [
            'title' => 'Onderwerpen Les'
        ];
        $this->view('lessen/topiclesson.php', $data);
    }
}
