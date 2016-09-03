<?php

namespace SacBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="SacBundle\Repository\PedidoRepository")
 */
class Pedido implements IPedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num_pedido", type="integer", unique=true)
     * @Assert\NotBlank(
     *     message = "Por favor, entre com o número do pedido."
     * )
     */
    private $numPedido;

    /**
     * @ORM\OneToMany(targetEntity="Chamado", mappedBy="pedido", cascade={"persist", "remove"} )
     */
    private $chamados;


    /**
     * Inicia Collection
     *
     */
    public function __construct()
    {
        $this->chamados = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numPedido
     *
     * @param integer $numPedido
     *
     * @return Pedido
     */
    public function setNumPedido($numPedido)
    {
        $this->numPedido = $numPedido;

        return $this;
    }

    /**
     * Get numPedido
     *
     * @return int
     */
    public function getNumPedido()
    {
        return $this->numPedido;
    }

    /**
     * @return mixed
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * @param mixed $clientes
     * @return Pedido
     */
    public function setClientes($clientes)
    {
        $this->clientes = $clientes;
        return $this;
    }

    public function addCliente($cliente)
    {
        $cliente->addPedido($this);
        $this->clientes[] = $cliente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChamados()
    {
        return $this->chamados;
    }

    /**
     * @param mixed $chamados
     * @return Pedido
     */
    public function setChamados($chamados)
    {
        $this->chamados = $chamados;
        return $this;
    }

    public function addChamado($chamados)
    {
        $chamados->setPedido($this);
        $this->chamados[] = $chamados;
        return $this;
    }

}

