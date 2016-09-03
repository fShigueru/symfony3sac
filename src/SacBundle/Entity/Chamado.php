<?php

namespace SacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chamado
 *
 * @ORM\Table(name="chamado")
 * @ORM\Entity(repositoryClass="SacBundle\Repository\ChamadoRepository")
 */
class Chamado implements IChamado
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
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=150)
     * @Assert\NotBlank(
     *     message = "O Título é obrigatório."
     * )
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=255)
     */
    private $observacao;

    /**
     * @ORM\ManyToOne(targetEntity="Pedido", inversedBy="chamados", cascade={"persist"})
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     *
     **/
    private $pedido;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="chamados", cascade={"persist"})
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     *
     **/
    private $cliente;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Chamado
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return Chamado
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * @return mixed
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param mixed $pedido
     * @return Chamado
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     * @return Chamado
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

}

