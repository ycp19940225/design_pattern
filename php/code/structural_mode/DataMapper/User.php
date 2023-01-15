<?php

namespace App\structural_mode\DataMapper;

class User
{
    /**
     * @var mixed|null
     */
    private $userid;

    /**
     * @var mixed|null
     */
    private $username;
    /**
     * @var mixed|null
     */
    private $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->userid = $id;
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return mixed|null
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed|null $userid
     */
    public function setUserid($userid): void
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed|null $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed|null $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

}