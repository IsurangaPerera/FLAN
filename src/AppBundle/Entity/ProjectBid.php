<?php
 namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="project_bid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectBidRepository")
 */
class ProjectBid
{
	/**
	 * @ORM\Column(type="string", length=30)
	 * @ORM\Id
	 */
	private $bidId;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $projectId;

	/**
	 * @ORM\Column(type="float")
	 */
	private $bidAmount;

	/**
	 * @ORM\Column(type="string", length=10)
	 */
	private $currency;

	/**
	 * @ORM\Column(type="float")
	 */
	private $deliverIn;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $isSponsored;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $isHighlighted;


 

    /**
     * Set bidId
     *
     * @param string $bidId
     * @return ProjectBid
     */
    public function setBidId($bidId)
    {
        $this->bidId = $bidId;

        return $this;
    }

    /**
     * Get bidId
     *
     * @return string 
     */
    public function getBidId()
    {
        return $this->bidId;
    }

    /**
     * Set bidAmount
     *
     * @param float $bidAmount
     * @return ProjectBid
     */
    public function setBidAmount($bidAmount)
    {
        $this->bidAmount = $bidAmount;

        return $this;
    }

    /**
     * Get bidAmount
     *
     * @return float 
     */
    public function getBidAmount()
    {
        return $this->bidAmount;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return ProjectBid
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
     * Set deliverIn
     *
     * @param float $deliverIn
     * @return ProjectBid
     */
    public function setDeliverIn($deliverIn)
    {
        $this->deliverIn = $deliverIn;

        return $this;
    }

    /**
     * Get deliverIn
     *
     * @return float 
     */
    public function getDeliverIn()
    {
        return $this->deliverIn;
    }

    /**
     * Set isSponsored
     *
     * @param integer $isSponsored
     * @return ProjectBid
     */
    public function setIsSponsored($isSponsored)
    {
        $this->isSponsored = $isSponsored;

        return $this;
    }

    /**
     * Get isSponsored
     *
     * @return integer 
     */
    public function getIsSponsored()
    {
        return $this->isSponsored;
    }

    /**
     * Set isHighlighted
     *
     * @param integer $isHighlighted
     * @return ProjectBid
     */
    public function setIsHighlighted($isHighlighted)
    {
        $this->isHighlighted = $isHighlighted;

        return $this;
    }

    /**
     * Get isHighlighted
     *
     * @return integer 
     */
    public function getIsHighlighted()
    {
        return $this->isHighlighted;
    }

    /**
     * Set projectId
     *
     * @param string $projectId
     * @return ProjectBid
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return string 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
}
