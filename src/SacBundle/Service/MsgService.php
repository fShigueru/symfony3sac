<?php

namespace SacBundle\Service;

use Symfony\Component\Translation\Translator;
use Symfony\Component\HttpFoundation\Session\Session;

class MsgService implements IMsgService
{

    private $translator;
    private $session;

    /**
     * MsgService constructor.
     * @param $translator
     * @param $session
     */
    public function __construct(Translator $translator, Session $session)
    {
        $this->translator = $translator;
        $this->session = $session;
    }

    public function sucess($messageTrans,$message = null)
    {
        $this->session->getFlashBag()->add('sucesso',
            $this->translator->transChoice($messageTrans,0,array(),'messages') . ' ' . $message
        );
    }

    public function error($messageTrans,$message = null)
    {
        $this->session->getFlashBag()->add('error',
            $this->translator->transChoice($messageTrans,0,array(),'messages') . ' ' . $message
        );
    }
}