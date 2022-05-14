<?php
session_start();
class Users
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function Register($name,$code, $email, $password, $photo, $role)
    {
        if (isset($name)&& isset($code)  && isset($email) && isset($password) && isset($role)) {
            $sqll = "SELECT * FROM users WHERE email=$email";
            $resultt =  $this->db->con->query($sqll);
            if ($resultt->num_rows > 0) {
                echo "<script>alert('the email already exist')</script>";
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
                            if (file_exists("uploads/users/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($imgg["tmp_name"], "uploads/users/" . $filename);
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
                $this->db->con->query("INSERT INTO users(name,code,email,password,photo,role) VALUES($name,$code,$email,$password,$photo,$role)");
                header("Refresh:0");
                $sqlll = "SELECT * FROM users WHERE email=$email AND password=$password";
                $resulttt =  $this->db->con->query($sqlll);
                if ($resulttt->num_rows > 0) {
                    $row = mysqli_fetch_assoc($resulttt);
                    $_SESSION['name'] =  $row['name'];
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    header("Location: vote.php");
                } else {
                    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                }
            }
        }
    }
    public function addUser($name,$code, $email, $password, $photo, $role)
    {
        if (isset($name) && isset($code) && isset($email) && isset($password) && isset($role)) {
            $sqll = "SELECT * FROM users WHERE email=$email";
            $resultt =  $this->db->con->query($sqll);
            $sqllc = "SELECT * FROM users WHERE code=$code";
            $resulttc =  $this->db->con->query($sqllc);
            if ($resultt->num_rows > 0) {
                echo "<script>alert('the email already exist')</script>";
            }
            elseif ($resulttc->num_rows > 0) {
                echo "<script>alert('the code already exist')</script>";
            }
            else {
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
                            if (file_exists("../../uploads/users/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/users/" . $filename);
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
                $this->db->con->query("INSERT INTO users(name,code,email,password,photo,role) VALUES($name,$code,$email,$password,$photo,$role)");
             
            }
        }
    }
    public function signIn($code, $password)
    {
        if ($this->db->con != null) {
            if (isset($code) && isset($password)) {
                $sql = "SELECT * FROM users WHERE code=$code AND password=$password";
                $result =  $this->db->con->query($sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['role'] = $row['role'];
                    if ($row['role'] == 1) {
                        header("Location: dashboard/dashboard.php");
                    } elseif($row['role'] == 0) {
                        header("Location: vote.php");
                    }
                    // header("Location: dashboard/dashboard.php");
                } else {
                    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
                }
            }
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM users");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function deleteUser($item_id = null)
    {
        if ($item_id != null) {
            $this->db->con->query("DELETE FROM votes WHERE user_id={$item_id}");
           $this->db->con->query("DELETE FROM users WHERE id={$item_id}");

        }
    }
      public function updateUser($item_id = null, $name,$code, $email, $photo, $role)
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
                    if (file_exists("../../uploads/users/" . $filename)) {
                        echo $filename . " is already exists.";
                    } else {
                        $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/users/" . $filename);
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
                $this->db->con->query("UPDATE users SET name={$name},code={$code},email={$email}, photo={$photo}, role={$role} WHERE id={$item_id}");
            }else{
                $this->db->con->query("UPDATE users SET name={$name},code={$code},email={$email}, role={$role} WHERE id={$item_id}");
 
            }
        }
    }

}
