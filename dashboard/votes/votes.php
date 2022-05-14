<?php
class Votes
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function addVote($user_id, $candidate_id, $department_id)
    {
        if (isset($user_id) && isset($candidate_id)) {
            $this->db->con->query("INSERT INTO votes(user_id,candidate_id,department_id) VALUES($user_id,$candidate_id,$department_id)");
        }
    }

    public function deleteVote($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM votes WHERE id={$item_id}");
            return $result;
        }
    }
    public function updateVote($item_id = null, $user_id, $candidate_id)
    {

        if ($item_id != null) {
            $this->db->con->query("UPDATE university_activities SET user_id={$user_id},candidate_id={$candidate_id} WHERE id={$item_id}");
        }
    }
    public function getVoteId($cartArray = null, $key = "department_id")
    {
        if ($cartArray != null) {
            $cart_id = array_map(function ($value) use ($key) {
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }
    public function getData()
    {
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $result = $this->db->con->query("SELECT * FROM votes WHERE user_id={$user_id}");
            $resultArray = array();
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        } else {
            $resultArray2 = array();
            return $resultArray2;
            echo '<script>alert(You Must Sign In)</script>';
        }
    }
    public function getAllData($department_id)
    {
        $result = $this->db->con->query("SELECT * FROM votes WHERE department_id={$department_id}");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function getVotes($candidate_id = null)
    {
        if (isset($candidate_id)) {
            $result = $this->db->con->query("SELECT * FROM votes WHERE candidate_id={$candidate_id}");
            $resultArray = array();
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
    public function gettheVotes($candidate_id = null, $department_id = null)
    {
        if (isset($candidate_id)) {
            $result = $this->db->con->query("SELECT * FROM votes WHERE candidate_id={$candidate_id} AND department_id={$department_id}");
            $resultArray = array();
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}
