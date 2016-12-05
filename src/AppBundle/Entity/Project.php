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
     * @ORM\OneToOne(targetEntity="ProjectBudget")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     */
    private $projectBudget;

    /**
     * @ORM\OneToMany(targetEntity="ProjectSkills", mappedBy="project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     */
    protected $projectSkill;

    public function __construct()
    {
        $this->projectSkill = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * Set projectSkill
     *
     * @param \AppBundle\Entity\projectSkills $projectSkill
     * @return Project
     */
    public function setProjectSkill(\AppBundle\Entity\projectSkills $projectSkill = null)
    {
        $this->projectSkill = $projectSkill;

        return $this;
    }

    /**
     * Get projectSkill
     *
     * @return \AppBundle\Entity\projectSkills 
     */
    public function getProjectSkill()
    {
        return $this->projectSkill;
    }

    /**
     * Set projectBudget
     *
     * @param \AppBundle\Entity\ProjectBudget $projectBudget
     * @return Project
     */
    public function setProjectBudget(\AppBundle\Entity\ProjectBudget $projectBudget = null)
    {
        $this->projectBudget = $projectBudget;

        return $this;
    }

    /**
     * Get projectBudget
     *
     * @return \AppBundle\Entity\ProjectBudget 
     */
    public function getProjectBudget()
    {
        return $this->projectBudget;
    }

    /**
     * Add projectSkill
     *
     * @param \AppBundle\Entity\ProjectSkills $projectSkill
     * @return Project
     */
    public function addProjectSkill(\AppBundle\Entity\ProjectSkills $projectSkill)
    {
        if (!$this->projectSkill->contains($projectSkill)) {
            $this->projectSkill->add($projectSkill);
        }//return $this;
    }

    /**
     * Remove projectSkill
     *
     * @param \AppBundle\Entity\ProjectSkills $projectSkill
     */
    public function removeProjectSkill(\AppBundle\Entity\ProjectSkills $projectSkill)
    {
        $this->projectSkill->removeElement($projectSkill);
    }
}
