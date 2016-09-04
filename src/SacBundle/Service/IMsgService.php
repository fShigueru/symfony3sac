<?php

namespace SacBundle\Service;


interface IMsgService
{
    /**
     * Mensagem de sucesso
     * @param $message
     * @return mixed
     */
    public function sucess($messageTrans,$message = null);

    /**
     * Mensagem de erro
     * @param $message
     * @return mixed
     */
    public function error($messageTrans,$message = null);

}