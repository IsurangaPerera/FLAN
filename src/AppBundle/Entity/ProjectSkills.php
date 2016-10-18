<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="project_skill")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProjectSkillsRepository")
 */
class ProjectSkills
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 */
	private $projectId;

	/**
	 * @ORM\Column(type="string", length=60)
	 * @ORM\Id
	 */
	private $skill;

    /**
     * Set projectId
     *
     * @param integer $projectId
     * @return ProjectSkills
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
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
     * Set skill
     *
     * @param string $skill
     * @return ProjectSkills
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return string 
     */
    public function getSkill()
    {
        return $this->skill;
    }
}
