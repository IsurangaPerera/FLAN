<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project
{
	/**
	 * @ORM\Column(type="string", length=30)
	 * @ORM\Id
	 */
	private $projectId;

	/**
	 * @ORM\Column(type="string", length=50)
	 */
	private $userId;

	/**
	 * @ORM\Column(type="string", length=50)
	 */
	private $type;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $description;

    /**
     * Get projectId
     *
     * @return integer
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return Project
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Project
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set projectId
     *
     * @param string $projectId
     * @return Project
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }
}
