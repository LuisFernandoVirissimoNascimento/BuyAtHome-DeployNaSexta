<?php

namespace App\Controllers;

use App\Models\MoedasModel;
use DateTime;

class MoedasController extends Controller
{
    public function diaria()
    {
        header('Content-Type: application/json');

        $id = 1;
        $model = new MoedasModel();
        $cliente = $model->getMoedasInfo($id);

        $moedas = $cliente['moedas'];
        $ultima = $cliente['ultima_moeda'] ? new DateTime($cliente['ultima_moeda']) : null;
        $agora = new DateTime();

        $podeColetar = !$ultima || $ultima->diff($agora)->days >= 1;

        if ($podeColetar) {
            $nova = $moedas + 2;
            $model->atualizarMoedas($id, $nova, $agora->format('Y-m-d H:i:s'));

            echo json_encode([
                'success' => true,
                'message' => 'Moedas adicionadas com sucesso!',
                'nova_quantidade' => $nova
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Você já coletou moedas hoje.',
                'nova_quantidade' => $moedas
            ]);
        }
    }
}
