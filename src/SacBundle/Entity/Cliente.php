<?php

namespace SacBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="SacBundle\Repository\ClienteRepository")
 */
class Cliente implements ICliente
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
     * @ORM\Column(name="nome", type="string", length=50)
     * @Assert\NotBlank(
     *     message = "O Nome não pode ser em branco."
     * )
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, unique=true)
     * @Assert\Email(
     *     message = "O email '{{ value }}' não é válido.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="Chamado", mappedBy="cliente", cascade={"persist", "remove"} )
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
        $chamados->setCliente($this);
        $this->chamados[] = $chamados;
        return $this;
    }

}

