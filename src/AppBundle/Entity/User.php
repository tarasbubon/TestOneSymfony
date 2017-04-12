<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\OneToMany(targetEntity="AppBundle\Entity\UserTodoAssociation", mappedBy="user") */
    protected $todos;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->todos = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add todo
     *
     * @param \AppBundle\Entity\UserTodoAssociation $todo
     *
     * @return User
     */
    public function addTodo(\AppBundle\Entity\UserTodoAssociation $todo)
    {
        $this->todos[] = $todo;

        return $this;
    }

    /**
     * Remove todo
     *
     * @param \AppBundle\Entity\UserTodoAssociation $todo
     */
    public function removeTodo(\AppBundle\Entity\UserTodoAssociation $todo)
    {
        $this->todos->removeElement($todo);
    }

    /**
     * Get todos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTodos()
    {
        return $this->todos;
    }
}
