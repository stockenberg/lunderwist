<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 15.03.17
 * Time: 12:38
 */

namespace api;


use interfaces\ControllerInterface;

class TaskController implements ControllerInterface
{

    use Database;

    private $request;
    /** @var \PDO $db */
    private $db;

    public function run()
    {

        $this->request = array_merge($_GET, $_POST);
        $this->db = Database::getInstance();

        switch ($this->request["action"]) {

            case "create":
                $item = new TaskItem();
                $item->setTitle($_GET["message"]);
                $item->setCompleted(0);
                $item->setUserId($_SESSION["user_id"]);
                $this->create($item);
                break;

            case "delete":
                $this->delete($_GET["id"]);
                break;

            case "read":
                return $this->read();
                break;

            case "complete":
                $this->complete($_GET["id"]);
                break;
        }

        return null;

    }

    private function create(TaskItem $item = null)
    {
        if (!is_null($item)) {
            $SQL = "INSERT INTO tasks (task_title, task_complete, task_user_id) VALUES (:task_title, :task_complete, :task_user_id)";
            $stmt = $this->db->prepare($SQL);
            $stmt->execute([
                ":task_title" => $item->getTitle(),
                ":task_complete" => $item->getCompleted(),
                ":task_user_id" => $item->getUserId()
            ]);
        }
    }

    private function delete(Int $id = null)
    {
        if (!is_null($id)) {

            $SQL = "DELETE FROM tasks WHERE task_id = :id";
            $stmt = $this->db->prepare($SQL);
            $stmt->execute([
                ":id" => $id
            ]);
        }
    }

    private function complete(Int $id = null)
    {
        if (!is_null($id)) {

            $SQL = "UPDATE tasks SET task_complete = :completed WHERE task_id = :id";
            $stmt = $this->db->prepare($SQL);
            $stmt->execute([
                ":completed" => 1,
                ":id" => $id
            ]);
        }
    }

    private function read(Int $id = null)
    {
        if (!is_null($id)) {


        } else {
            $SQL = "SELECT * FROM tasks WHERE task_complete = 0 AND task_user_id = :user_id";
            $stmt = $this->db->prepare($SQL);
            $stmt->execute([
                ":user_id" => $_SESSION["user_id"]
            ]);
            $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $res;
    }

}