<?php
 namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="project_budget")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectBudgetRepository")
 */
class ProjectBudget
{
    /**
     * @ORM\Column(type="string", length=30)
     * @ORM\Id
     */
    private $projectId;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $currency;

    /**
     * @ORM\Column(type="float")
     */
    private $budget_min;

    /**
     * @ORM\Column(type="float")
     */
    private $budget_max;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $work_hours;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $commitment_type;

    /**
     * Set projectId
     *
     * @param integer $projectId
     * @return ProjectBudget
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
     * Set type
     *
     * @param string $type
     * @return ProjectBudget
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
     * Set currency
     *
     * @param string $currency
     * @return ProjectBudget
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set budget_min
     *
     * @param float $budgetMin
     * @return ProjectBudget
     */
    public function setBudgetMin($budgetMin)
    {
        $this->budget_min = $budgetMin;

        return $this;
    }

    /**
     * Get budget_min
     *
     * @return float 
     */
    public function getBudgetMin()
    {
        return $this->budget_min;
    }

    /**
     * Set budget_max
     *
     * @param float $budgetMax
     * @return ProjectBudget
     */
    public function setBudgetMax($budgetMax)
    {
        $this->budget_max = $budgetMax;

        return $this;
    }

    /**
     * Get budget_max
     *
     * @return float 
     */
    public function getBudgetMax()
    {
        return $this->budget_max;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return ProjectBudget
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set work_hours
     *
     * @param string $workHours
     * @return ProjectBudget
     */
    public function setWorkHours($workHours)
    {
        $this->work_hours = $workHours;

        return $this;
    }

    /**
     * Get work_hours
     *
     * @return string 
     */
    public function getWorkHours()
    {
        return $this->work_hours;
    }

    /**
     * Set commitment_type
     *
     * @param string $commitmentType
     * @return ProjectBudget
     */
    public function setCommitmentType($commitmentType)
    {
        $this->commitment_type = $commitmentType;

        return $this;
    }

    /**
     * Get commitment_type
     *
     * @return string 
     */
    public function getCommitmentType()
    {
        return $this->commitment_type;
    }

    /**
     * Set project
     *
     * @param \AppBundle\Entity\ProjectBudget $project
     * @return ProjectBudget
     */
    public function setProject(\AppBundle\Entity\ProjectBudget $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AppBundle\Entity\ProjectBudget 
     */
    public function getProject()
    {
        return $this->project;
    }
}
