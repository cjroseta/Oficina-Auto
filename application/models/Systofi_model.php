<?php
class Systofi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_credentials($email)
    {
        $this->db->where('email', $email);
        $this->db->where('situacao', 1);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    public function saveConfiguracao($data)
    {
        try {
            foreach ($data as $key => $valor) {
                $this->db->set('valor', $valor);
                $this->db->where('config', $key);
                $this->db->update('configuracoes');
            }
        } catch (Exception $e) {
            return false;
        }
        return true;
    }

    public function getItens()
    {
        $query = "
            SELECT produtos.*, SUM(produtos.estoque * produtos.precoCompra) as valorEstoque
            FROM produtos
            GROUP BY produtos.idProdutos
            ORDER BY descricao
        ";

        return $this->db->query($query)->result();
    }

    public function getItensSir()
    {
        $query = "
            SELECT produtos.*, SUM(produtos.estoque * produtos.precoCompra) as valorEstoque
            FROM produtos
            WHERE grupo = 'sir'
            GROUP BY produtos.idProdutos
            ORDER BY descricao
        ";

        return $this->db->query($query)->result();
    }

    public function getItensIndigena()
    {
        $query = "
            SELECT produtos.*, SUM(produtos.estoque * produtos.precoCompra) as valorEstoque
            FROM produtos
            WHERE produtos.grupo = 'indigena'
            GROUP BY produtos.idProdutos
            ORDER BY descricao
        ";

        return $this->db->query($query)->result();
    }

    public function getEstatisticasFinanceiroDia($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);
        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }
        $sql = "
            SELECT

                SUM(
                    CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = " . date('m') . ")
                    AND baixado = 1 
                    AND tipo = 'receita' 
                    THEN valor
                    END
                ) AS VALOR_" . date('y') . "_REC,

                SUM(
                    CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = " . date('m') . ")
                    AND baixado = 1 
                    AND tipo in ('despesa','despesaavulsa') 
                    THEN valor 
                    END
                ) AS VALOR_" . date('y') . "_DES

            FROM lancamentos

            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    public function getEstatisticasFinanceiroAno($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);
        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }
        $sql = "
            SELECT

                SUM(
                    CASE WHEN (EXTRACT(YEAR FROM data_pagamento) = " . date('Y') . ")
                    AND baixado = 1 
                    AND tipo = 'receita' 
                    THEN valor - valorproduto
                    END
                ) AS VALOR_" . date('y') . "_REC,

                SUM(
                    CASE WHEN (EXTRACT(YEAR FROM data_pagamento) = " . date('Y') . ")
                    AND baixado = 1 
                    AND tipo in ('despesa','despesaavulsa') 
                    THEN valor
                    END
                ) AS VALOR_" . date('y') . "_DES

            FROM lancamentos

            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    public function getEstatisticasFinanceiroMes($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);

        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }

        $sql = "
            SELECT
                SUM(
                    CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND baixado = 1 
                    AND tipo = 'receita' 
                    THEN valor 
                    END
                ) AS VALOR_JAN_REC,

                SUM(
                    CASE 
                    WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND tipo = 'despesaavulsa' 
                    AND baixado = 1 
                    THEN valor
                    WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND tipo = 'despesa'   
                    AND baixado = 1 
                    THEN valor 
                    END
                ) AS VALOR_JAN_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_FEV_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_MAR_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_APR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_APR_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_MAI_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_JUN_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_JUL_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_AGO_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_SET_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_OUT_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_NOV_DES,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 1 AND tipo = 'receita' THEN valor END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND tipo = 'despesaavulsa' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND tipo = 'despesa' AND baixado = 1 THEN valor END) AS VALOR_DEZ_DES
                
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    public function getEstatisticasDespesaMesGrupo($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);

        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }

        $sql = "
            SELECT
                SUM(
                    CASE 
                    WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND tipo = 'despesaavulsa' 
                    AND modelo = 'sir'
                    AND baixado = 1 
                    THEN valor
                    WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND tipo = 'despesa'                    
                    AND modelo = 'sir'
                    AND baixado = 1 
                    THEN valor 
                    END
                ) AS VALOR_JAN_SIR,

                SUM(
                    CASE 
                    WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND tipo = 'despesaavulsa' 
                    AND modelo = 'indigena'
                    AND baixado = 1 
                    THEN valor
                    WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) 
                    AND tipo = 'despesa'                    
                    AND modelo = 'indigena'
                    AND baixado = 1 
                    THEN valor 
                    END
                ) AS VALOR_JAN_IND,
                
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_FEV_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_FEV_IND,
                
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_MAR_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_MAR_IND,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_ABR_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_ABR_IND,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_MAI_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_MAI_IND,
                
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_JUN_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_JUN_IND,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_JUL_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_JUL_IND,
                
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_AGO_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_AGO_IND,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_SET_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_SET_IND,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_OUT_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_OUT_IND,
                
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_NOV_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_NOV_IND,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND tipo = 'despesaavulsa' AND modelo = 'sir'AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND tipo = 'despesa' AND modelo = 'sir' AND baixado = 1 THEN valor END ) AS VALOR_DEZ_SIR,

                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND tipo = 'despesaavulsa' AND modelo = 'indigena' AND baixado = 1 THEN valor WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND tipo = 'despesa' AND modelo = 'indigena' AND baixado = 1 THEN valor END) AS VALOR_DEZ_IND
                
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    /*public function vendasInternasExternas()
    {
        //Selecionar vendas internas
        $query = "
            SELECT SUM(
                subTotal
            ) as vendasExternas
            FROM itens_de_vendas
        ";

        return $this->db->query($query)->result();
    }*/

    public function getEstatisticasDespesaAnoGrupo($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);
        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }
        $sql = "
            SELECT

                SUM(
                    CASE 

                    WHEN (EXTRACT(YEAR FROM data_pagamento) = " . date('Y') . ") 
                    AND tipo = 'despesaavulsa' 
                    AND modelo = 'sir'
                    AND baixado = 1 
                    THEN valor

                    WHEN (EXTRACT(YEAR FROM data_pagamento) = " . date('Y') . ") 
                    AND tipo = 'despesa'                    
                    AND modelo = 'sir'
                    AND baixado = 1 
                    THEN valor 

                    END
                ) AS VALOR_DES_SIR,

                SUM(
                    CASE 
                    WHEN (EXTRACT(YEAR FROM data_pagamento) = " . date('Y') . ") 
                    AND tipo = 'despesaavulsa' 
                    AND modelo = 'indigena'
                    AND baixado = 1 
                    THEN valor
                    WHEN (EXTRACT(YEAR FROM data_pagamento) = " . date('Y') . ") 
                    AND tipo = 'despesa'                    
                    AND modelo = 'indigena'
                    AND baixado = 1 
                    THEN valor 
                    END
                ) AS VALOR_DES_IND

            FROM lancamentos

            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    public function getEstatisticasFinanceiro()
    {
        $sql = "SELECT SUM(CASE WHEN baixado = 1 AND tipo = 'receita' THEN valor END) AS total_receita,
                       SUM(CASE WHEN baixado = 1 AND tipo = 'despesa' THEN valor WHEN baixado = 1 AND tipo = 'despesaavulsa' THEN valor END) AS total_despesa FROM lancamentos";
        if ($this->db->query($sql) !== false) {
            return $this->db->query($sql)->row();
        }
        return false;
    }

    public function getEstatisticasJobCard()
    {
        $sql = "SELECT 
                COUNT(CASE WHEN dataInicial IS NOT NULL THEN idJc END) AS total_aberto,
                COUNT(CASE WHEN dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS total_concluido,
                COUNT(CASE WHEN dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS total_cancelado
                FROM jobcard";
        if ($this->db->query($sql) !== false) {
            return $this->db->query($sql)->row();
        }
        return false;
    }

    public function getEstatisticasMesJobCard($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);

        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }

        $sql = "
            SELECT
                COUNT(
                    CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 1) 
                    AND dataInicial IS NOT NULL
                    THEN idJc 
                    END
                ) AS JOB_JAN_ABRT,

                COUNT(
                    CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 1) 
                    AND dataFinal IS NOT NULL
                    AND status = 'finalizado'
                    THEN idJc 
                    END
                ) AS JOB_JAN_CON,

                COUNT(
                    CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 1) 
                    AND dataInicial IS NOT NULL
                    AND status = 'cancelado'
                    THEN idJc 
                    END
                ) AS JOB_JAN_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 2) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_FEV_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 2) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_FEV_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 2) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_FEV_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 3) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_MAR_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 3) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_MAR_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 3) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_MAR_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 4) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_ABR_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 4) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_ABR_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 4) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_ABR_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 5) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_MAI_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 5) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_MAI_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 5) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_MAI_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 6) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_JUN_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 6) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_JUN_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 6) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_JUN_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 7) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_JUL_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 7) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_JUL_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 7) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_JUL_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 8) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_AGO_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 8) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_AGO_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 8) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_AGO_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 9) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_SET_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 9) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_SET_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 9) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_SET_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 10) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_OUT_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 10) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_OUT_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 10) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_OUT_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 11) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_NOV_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 11) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_NOV_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 11) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_NOV_CAN,

                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 12) AND dataInicial IS NOT NULL THEN idJc END) AS JOB_DEZ_ABRT,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 12) AND dataFinal IS NOT NULL AND status = 'finalizado' THEN idJc END) AS JOB_DEZ_CON,
                COUNT(CASE WHEN (EXTRACT(MONTH FROM dataInicial) = 12) AND dataInicial IS NOT NULL AND status = 'cancelado' THEN idJc END) AS JOB_DEZ_CAN
                
            FROM jobcard
            WHERE EXTRACT(YEAR FROM dataInicial) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    public function getEstatisticasFinanceiroMesInadimplencia($year)
    {
        $numbersOnly = preg_replace('/[^0-9]/', '', $year);

        if (!$numbersOnly) {
            $numbersOnly = date('Y');
        }

        $sql = "
            SELECT
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_JAN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 1) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_JAN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_FEV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 2) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_FEV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_MAR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 3) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_MAR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_ABR_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 4) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_ABR_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_MAI_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 5) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_MAI_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_JUN_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 6) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_JUN_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_JUL_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 7) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_JUL_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_AGO_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 8) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_AGO_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_SET_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 9) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_SET_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_OUT_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 10) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_OUT_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_NOV_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 11) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_NOV_DES,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 0 AND tipo = 'receita' THEN valor END) AS VALOR_DEZ_REC,
                SUM(CASE WHEN (EXTRACT(MONTH FROM data_pagamento) = 12) AND baixado = 0 AND tipo = 'despesa' THEN valor END) AS VALOR_DEZ_DES
            FROM lancamentos
            WHERE EXTRACT(YEAR FROM data_pagamento) = ?
        ";
        if ($this->db->query($sql, [intval($numbersOnly)]) !== false) {
            return $this->db->query($sql, [intval($numbersOnly)])->row();
        }
        return false;
    }

    public function getJcAbertas()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'aberto');
        return $this->db->count_all_results(); 
    }

    public function getJcFinalizado()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'finalizado');
        return $this->db->count_all_results(); 
    }

    public function getJcFaturado()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'faturado');
        return $this->db->count_all_results(); 
    }

    public function getJcAprovacao()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'aprovacao');
        return $this->db->count_all_results(); 
    }

    public function getJcAguardandoPecas()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'aguardandopecas');
        return $this->db->count_all_results(); 
    }

    public function getJcAndamento()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'emandamento');
        return $this->db->count_all_results(); 
    }

    public function getJcCancelado()
    {
        $this->db->select('status');
        $this->db->from('jobcard');
        $this->db->where('status', 'cancelado');
        return $this->db->count_all_results(); 
    }

}