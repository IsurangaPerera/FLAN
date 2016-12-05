<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="project_skill")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectSkillsRepository")
 */
class ProjectSkills
{
	/**
	 * @ORM\Column(type="string", length=30)
	 * @ORM\Id
	 */
	private $projectId;

	/**
	 * @ORM\Column(type="string", length=60)
	 * @ORM\Id
	 */
	private $skill;

    /**
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="projectSkill")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="project_id")
     */
    protected $project;

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

    /**
     * Add project
     *
     * @param \AppBundle\Entity\ProjectSkills $project
     * @return ProjectSkills
     */
    public function addProject(\AppBundle\Entity\ProjectSkills $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \AppBundle\Entity\ProjectSkills $project
     */
    public function removeProject(\AppBundle\Entity\ProjectSkills $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set project
     *
     * @param \AppBundle\Entity\Project $project
     * @return ProjectSkills
     */
    public function setProject(\AppBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }
}
