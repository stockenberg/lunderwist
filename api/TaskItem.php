<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 12:26
 */

namespace api;


class TaskItem
{

    private $task_id;
    private $task_title;
    private $user_id;
    private $task_completed;

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->task_completed;
    }

    /**
     * @param mixed $task_completed
     */
    public function setCompleted($task_completed)
    {
        $this->task_completed = $task_completed;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->task_id;
    }

    /**
     * @param mixed $task_id
     */
    public function setId($task_id)
    {
        $this->task_id = $task_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->task_title;
    }

    /**
     * @param mixed $task_title
     */
    public function setTitle($task_title)
    {
        $this->task_title = $task_title;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }





}