<?php

namespace SacBundle\Service;


use SacBundle\Entity\IChamado;
use SacBundle\Entity\ICliente;
use SacBundle\Entity\IPedido;

interface ISacService
{
    /**
     * Persiste um novo chamado no banco de dados
     * @param IChamado $pedido
     * @return mixed
     */
    public function save(IChamado $chamado);

    /**
     * Verifica se o número do pedido existe no banco de dados
     * @param IPedido $pedido
     * @return mixed
     */
    public function verificarNumPedido(IPedido $pedido);

    /**
     * Verificar se o e-mail do cliente existe no banco de dados
     * @param ICliente $cliente
     * @return mixed
     */
    public function verificarClienteEmail(ICliente $cliente);

    /**
     * Prepara o objeto Chamado para persistencia
     * @param array $objetos
     * @param $params
     * @return mixed
     */
    public function preparChamado(array $objetos, $params);
}