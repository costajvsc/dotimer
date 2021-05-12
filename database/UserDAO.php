<?php 
require_once('DAO.php');

class UserDAO extends DAO
{
    public function create(User $user) 
    {
        $email = $user->getEmail();
        $password = $user->getPassword();

        $query = "INSERT INTO users(email, password) VALUES ('{$email}', '{$password}')";
        
        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function retrieve()
    {
        $query = "SELECT * FROM users";

        $users = array();
        $result = mysqli_query($this->connection->getConnection(), $query);

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        
        return $users;
    }

    public function find(int $id_user)
    {
        $query = "SELECT * FROM users WHERE id_user = '{$id_user}'";
        
        $result = mysqli_query($this->connection->getConnection(), $query);
        return mysqli_fetch_assoc($result);
    }

    public function update(User $user)
    {
        $id_user = $user->getIDUser();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $query = "UPDATE users SET email = '{$email}', password = '{$password}' WHERE id_user = '{$id_user}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }

    public function delete(int $id_user)
    {
        $query = "DELETE FROM users WHERE id_user = '{$id_user}'";

        return mysqli_query($this->connection->getConnection(), $query);
    }
}
?>