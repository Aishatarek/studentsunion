<?php
class Department
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public function addDepartment($title, $description)
    {
        if (isset($title) && isset($description)) {
            $this->db->con->query("INSERT INTO department(title,description) VALUES($title,$description)");
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM department");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function deleteDepartment($item_id = null)
    {
        if ($item_id != null) {
            $this->db->con->query("DELETE FROM candidates WHERE department_id={$item_id}");
           $this->db->con->query("DELETE FROM department WHERE id={$item_id}");
        }
    }
    public function updateDepartment($item_id = null, $title, $description)
    {
        if ($item_id != null) {
            $this->db->con->query("UPDATE department SET title={$title},description={$description} WHERE id={$item_id}");
        }
    }
}
