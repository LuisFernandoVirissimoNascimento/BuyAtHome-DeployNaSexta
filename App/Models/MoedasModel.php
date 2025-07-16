<?php

namespace App\Models;

use Core\Model;

class MoedasModel extends Model
{
    protected string $table = 'moedas';
    protected string $primaryKey = 'id_cliente';

    /**
     * Retorna os dados do cliente pelo ID, incluindo moedas e ultima_moeda
     *
     * @param int $id
     * @return array|null
     */

    public function getMoedasInfo(int $id): ?array
    {
        $sql = "SELECT moedas, ultima_moeda FROM moedas WHERE id_cliente = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        $cliente = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($cliente) {
            return [
                'moedas' => $cliente['moedas'] ?? 0,
                'ultima_moeda' => $cliente['ultima_moeda'] ?? null,
            ];
        }

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
