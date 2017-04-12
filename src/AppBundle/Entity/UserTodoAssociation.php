<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTodoAssociation
 *
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserTodoAssociationRepository")
 */
class UserTodoAssociation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserTodo")
     * @ORM\JoinColumn(name="todo_id", referencedColumnName="id")
     */
    private $todo;



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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return UserTodoAssociation
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set todo
     *
     * @param \AppBundle\Entity\UserTodo $todo
     *
     * @return UserTodoAssociation
     */
    public function setTodo(\AppBundle\Entity\UserTodo $todo = null)
    {
        $this->todo = $todo;

        return $this;
    }

    /**
     * Get todo
     *
     * @return \AppBundle\Entity\UserTodo
     */
    public function getTodo()
    {
        return $this->todo;
    }
}
