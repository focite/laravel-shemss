<?php

declare(strict_types=1);

namespace Esp\Kernel\Auth;

/**
 * Class SoapHeader
 * @package Esp\Kernel\Auth
 */
class SoapHeader
{
    /**
     * @var string
     */
    private string $userName;

    /**
     * @var string
     */
    private string $passWord;

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getPassWord(): string
    {
        return $this->passWord;
    }

    /**
     * @param string $passWord
     */
    public function setPassWord(string $passWord): void
    {
        $this->passWord = $passWord;
    }

}