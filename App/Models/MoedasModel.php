<?php

namespace App\Models;

use Core\Model;

class MoedasModel extends Model
{
    protected string $table = 'moedas';
    protected string $primaryKey = 'id_cliente';

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

    public function atualizarMoedas(int $id, float $novaQuantidade, string $dataAtual): bool
    {
        $sql = "UPDATE moedas SET moedas = :moedas, ultima_moeda = :ultima WHERE id_cliente = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':moedas', $novaQuantidade, \PDO::PARAM_INT);
        $stmt->bindValue(':ultima', $dataAtual, \PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);

        $result = $stmt->execute();
        error_log("Atualizar moedas resultado: " . ($result ? 'sucesso' : 'falha') . ", linhas afetadas: " . $stmt->rowCount());
        return $result && $stmt->rowCount() > 0;
    }
    
    

    public function criarRegistro(int $id): bool
    {
        $sql = "INSERT INTO moedas (id_cliente, moedas, ultima_moeda) VALUES (:id, 0, NULL)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
