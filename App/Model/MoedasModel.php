<?php

namespace App\Model;

use Core\Model;

class MoedasModel extends Model
{
    protected string $table = 'cliente';
    protected string $primaryKey = 'id_cliente';

    /**
     * Retorna os dados do cliente pelo ID, incluindo moedas e ultima_moeda
     *
     * @param int $id
     * @return array|null
     */
    public function getMoedasInfo(int $id): ?array
    {
        return null;
    }

    /**
     * Atualiza as moedas e a data da ultima moeda recebida do cliente
     *
     * @param int $id
     * @param float $novaQuantidade
     * @param string $dataAtual Formato 'Y-m-d H:i:s'
     * @return bool
     */
    public function atualizarMoedas(int $id, float $novaQuantidade, string $dataAtual): bool
    {
        return $this->update($id, [
            'moedas' => $novaQuantidade,
            'ultima_moeda' => $dataAtual
        ]);
    }
}
