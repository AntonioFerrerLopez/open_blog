<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Post
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, unique=false)
     */
    private $description;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="reg_date" , type="datetime")
     */
    private $regDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mod_date" , type="datetime")
     */
    private $modDate;

    /**
     * @ORM\ManyToOne (targetEntity="User" , inversedBy="post")
     * @ORM\JoinColumn (name="user_id" ,referencedColumnName="id" )
     */
    protected $user;

    /**
     * @ORM\ManyToMany(targetEntity="Category" , inversedBy="posts")
     * @ORM\JoinColumn (name="category_id" , referencedColumnName="id" )
     */
    protected $categories;

    /**
     * @ORM\OneToMany (targetEntity="Comment" , mappedBy="upost" , cascade={"persist"})
     */
    protected $comments;


    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->regDate  = new \DateTime();
    }


    /**
     * @ORM\PrePersist
     */
    public function preUpdateDate()
    {
        $this->modDate = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     * @Assert\NotBlank ()
     * @Assert\Length(max="255")
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get regDate
     *
     * @return DateTime
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set regDate
     *
     * @param string $regDate
     *
     * @return Post
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;

        return $this;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
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
     * Set user
     *
     * @param User $user
     *
     * @return Post
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add category
     *
     * @param Category $category
     *
     * @return Post
     */
    public function addCategory(Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param Category $category
     */
    public function removeCategory(Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add comment
     *
     * @param Comment $comment
     *
     * @return Post
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param Comment $comment
     */
    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set modDate
     *
     * @param \DateTime $modDate
     *
     * @return Post
     */
    public function setModDate($modDate)
    {
        $this->modDate = $modDate;

        return $this;
    }

    /**
     * Get modDate
     *
     * @return \DateTime
     */
    public function getModDate()
    {
        return $this->modDate;
    }
}
