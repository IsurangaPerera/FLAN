<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="user_info")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\User")
 */
class UserInfo
{

    /**
     * @ORM\Column(type="string", length=50)
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $jobTitle;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $minSalary;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $allowInSearch;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $specialism;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $twitter;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $gplus;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $linkedin;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $web;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $experience;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $currentSalary;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $expectedSalary;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $education;

    /**
     * Set id
     *
     * @param string $id
     * @return UserInfo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     * @return UserInfo
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return UserInfo
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set minSalary
     *
     * @param string $minSalary
     * @return UserInfo
     */
    public function setMinSalary($minSalary)
    {
        $this->minSalary = $minSalary;

        return $this;
    }

    /**
     * Get minSalary
     *
     * @return string 
     */
    public function getMinSalary()
    {
        return $this->minSalary;
    }

    /**
     * Set allowInSearch
     *
     * @param string $allowInSearch
     * @return UserInfo
     */
    public function setAllowInSearch($allowInSearch)
    {
        $this->allowInSearch = $allowInSearch;

        return $this;
    }

    /**
     * Get allowInSearch
     *
     * @return string 
     */
    public function getAllowInSearch()
    {
        return $this->allowInSearch;
    }

    /**
     * Set specialism
     *
     * @param string $specialism
     * @return UserInfo
     */
    public function setSpecialism($specialism)
    {
        $this->specialism = $specialism;

        return $this;
    }

    /**
     * Get specialism
     *
     * @return string 
     */
    public function getSpecialism()
    {
        return $this->specialism;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return UserInfo
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return UserInfo
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set gplus
     *
     * @param string $gplus
     * @return UserInfo
     */
    public function setGplus($gplus)
    {
        $this->gplus = $gplus;

        return $this;
    }

    /**
     * Get gplus
     *
     * @return string 
     */
    public function getGplus()
    {
        return $this->gplus;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     * @return UserInfo
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return UserInfo
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return UserInfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return UserInfo
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return UserInfo
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return UserInfo
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return UserInfo
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set experience
     *
     * @param string $experience
     * @return UserInfo
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return UserInfo
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set currentSalary
     *
     * @param string $currentSalary
     * @return UserInfo
     */
    public function setCurrentSalary($currentSalary)
    {
        $this->currentSalary = $currentSalary;

        return $this;
    }

    /**
     * Get currentSalary
     *
     * @return string 
     */
    public function getCurrentSalary()
    {
        return $this->currentSalary;
    }

    /**
     * Set expectedSalary
     *
     * @param string $expectedSalary
     * @return UserInfo
     */
    public function setExpectedSalary($expectedSalary)
    {
        $this->expectedSalary = $expectedSalary;

        return $this;
    }

    /**
     * Get expectedSalary
     *
     * @return string 
     */
    public function getExpectedSalary()
    {
        return $this->expectedSalary;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return UserInfo
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set education
     *
     * @param string $education
     * @return UserInfo
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string 
     */
    public function getEducation()
    {
        return $this->education;
    }
}
