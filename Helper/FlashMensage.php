<?php
    namespace Weliton\Shine\Helper;

trait FlashMensage
{
    public function showMensage(array $data):void
    {
        $_SESSION['mensagem'] = $mensagem;
        $_SESSION['tipo_mensagem'] = $type;
    }
}
