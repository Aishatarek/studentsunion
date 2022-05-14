<?php
class Candidates
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function addCandidate($name, $code, $email, $password, $photo, $department_id)
    {
        if (isset($name) && isset($code) && isset($email) && isset($password) && isset($department_id)) {
            $sqll = "SELECT * FROM candidates WHERE email=$email";
            $resultt =  $this->db->con->query($sqll);
            $sqllc = "SELECT * FROM candidates WHERE code=$code";
            $resulttc =  $this->db->con->query($sqll);
            if ($resultt->num_rows > 0) {
                echo "<script>alert('the email already exist')</script>";
            } elseif ($resulttc->num_rows > 0) {
                echo "<script>alert('the code already exist')</script>";
            } else {
                function img($imgg)
                {
                    if (isset($imgg) && $imgg["error"] == 0) {
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                        $filename = rand(0, 1000) . $imgg["name"];
                        $filetype = $imgg["type"];
                        $filesize = $imgg["size"];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                        $maxsize = 5 * 1024 * 1024 * 1024;
                        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                        if (in_array($filetype, $allowed)) {
                            if (file_exists("../../uploads/candidates/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/candidates/" . $filename);
                            }
                        } else {
                            echo "Error: There was a problem uploading your file. Please try again.";
                        }
                        if ($result) {
                            return "'" . $filename . "'";
                        } else {
                            echo "Error: " . $imgg["error"];
                        }
                    }
                }
                if (!empty($photo['name'])) {
                    $photo = img($photo);
                } else {
                    $photo = "NULL";
                }
                $this->db->con->query("INSERT INTO candidates(name,code,email,password,photo,department_id) VALUES($name,$code,$email,$password,$photo,$department_id)");
            }
        }
    }
    public function signIn($code, $password)
    {
        if ($this->db->con != null) {
            if (isset($code) && isset($password)) {
                $sql = "SELECT * FROM candidates WHERE code=$code AND password=$password";
                $result =  $this->db->con->query($sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['candidate_id'] = $row['id'];
                    header("Location: candidateVotes.php");
                } else {
                    echo "<script>alert('Woops! code or Password is Wrong.')</script>";
                }
            }
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM candidates");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function deleteCandidate($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM candidates WHERE id={$item_id}");
            return $result;
        }
    }
    public function updateCandidate($item_id = null, $name, $code, $email, $photo, $department_id)
    {
        function imgg($imgg)
        {
            if (isset($imgg) && $imgg["error"] == 0) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = rand(0, 1000) . $imgg["name"];
                $filetype = $imgg["type"];
                $filesize = $imgg["size"];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                $maxsize = 5 * 1024 * 1024 * 1024;
                if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                if (in_array($filetype, $allowed)) {
                    if (file_exists("../../uploads/candidates/" . $filename)) {
                        echo $filename . " is already exists.";
                    } else {
                        $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/candidates/" . $filename);
                    }
                } else {
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
                if ($result) {
                    return "'" . $filename . "'";
                } else {
                    echo "Error: " . $imgg["error"];
                }
            }
        }
        if ($item_id != null) {
            if (!empty($photo['name'])) {
                $photo = imgg($photo);
                $this->db->con->query("UPDATE candidates SET name={$name},code={$code},email={$email}, photo={$photo}, department_id={$department_id} WHERE id={$item_id}");
            } else {
                $this->db->con->query("UPDATE candidates SET name={$name},code={$code},email={$email}, department_id={$department_id} WHERE id={$item_id}");
            }
        }
    }
}
