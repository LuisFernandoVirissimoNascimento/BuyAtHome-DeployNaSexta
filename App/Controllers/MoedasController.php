<?php

namespace App\Controllers;

use App\Models\MoedasModel;
use DateTime;

class MoedasController extends Controller
{
    public function diaria()
    {
        header('Content-Type: application/json');

        $id = $_SESSION['usuario']['id_cliente'];
        $model = new MoedasModel();
        $cliente = $model->getMoedasInfo($id);

        $moedas = $cliente['moedas'] ?? 0;
        $ultima = $cliente['ultima_moeda'] ? new DateTime($cliente['ultima_moeda']) : null;
        $agora = new DateTime();

        $horaLimite = (new DateTime())->setTime(12, 0, 0);
        $jaRecebeuHoje = $ultima && $ultima->format('Y-m-d') === $agora->format('Y-m-d');

        $podeColetar = !$jaRecebeuHoje && $agora >= $horaLimite;

        if ($podeColetar) {
            $novaQuantidade = $moedas + 1;
            $model->atualizarMoedas($id, $novaQuantidade, $agora->format('Y-m-d H:i:s'));

            echo json_encode([
                'success' => true,
                'message' => 'Moedas adicionadas com sucesso!',
                'nova_quantidade' => $novaQuantidade,
                'ultima_moeda' => $agora->format('Y-m-d H:i:s'),
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Você já coletou moedas hoje.',
                'nova_quantidade' => $moedas,
                'ultima_moeda' => $ultima ? $ultima->format('Y-m-d H:i:s') : null,
            ]);
        }

    }

    public function comprarDesconto()
{
    header('Content-Type: application/json');

    if (!isset($_SESSION['usuario']['id_cliente'])) {
        echo json_encode([
            'success' => false,
            'message' => 'Usuário não autenticado.',
        ]);
        return;
    }

    $id = $_SESSION['usuario']['id_cliente'];
    $model = new MoedasModel();
    $cliente = $model->getMoedasInfo($id);

    if (!$cliente) {
        echo json_encode([
            'success' => false,
            'message' => 'Usuário não encontrado.',
        ]);
        return;
    }

    $moedas = $cliente['moedas'] ?? 0;
    $custo = $_POST['moeda'] ?? 0;

    if ($moedas < $custo) {
        echo json_encode([
            'success' => false,
            'message' => 'Você não possui moedas suficientes para este desconto.',
            'nova_quantidade' => $moedas,
        ]);
        return;
    }

    $novaQuantidade = $moedas - $custo;
    $agora = (new DateTime())->format('Y-m-d H:i:s');
    $model->atualizarMoedas($id, $novaQuantidade, $agora);

    echo json_encode([
        'success' => true,
        'message' => 'Desconto adquirido com sucesso!',
        'nova_quantidade' => $novaQuantidade,
    ]);
}

}
