<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRegistration
 *
 * @ORM\Table(name="user_registration")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRegistrationRepository")
 */
class UserRegistration
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
     * @ORM\Column(name="EmailAddress", type="string", length=255, unique=true)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=20)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=20)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="ConfirmPassword", type="string", length=20)
     */
    private $confirmPassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="Hire", type="boolean")
     */
    private $hire;

    /**
     * @var bool
     *
     * @ORM\Column(name="Work", type="boolean")
     */
    private $work;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return UserRegistration
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return UserRegistration
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return UserRegistration
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set confirmPassword
     *
     * @param string $confirmPassword
     * @return UserRegistration
     */
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }

    /**
     * Get confirmPassword
     *
     * @return string 
     */
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * Set hire
     *
     * @param boolean $hire
     * @return UserRegistration
     */
    public function setHire($hire)
    {
        $this->hire = $hire;

        return $this;
    }

    /**
     * Get hire
     *
     * @return boolean 
     */
    public function getHire()
    {
        return $this->hire;
    }

    /**
     * Set work
     *
     * @param boolean $work
     * @return UserRegistration
     */
    public function setWork($work)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return boolean 
     */
    public function getWork()
    {
        return $this->work;
    }
}
