<?php


class Users extends Database
{
    protected $table = "users";



    public function login($email, $password)
    {
        $this->query("SELECT * FROM users WHERE email = :email and password = :password");
        $this->bind(':email', $email);
        $this->bind(":password",$password);
        $result = $this->single();

        if($result){
            Session::set('email', $email);
            header("location:index.php?message99= Uspešno ste se ulogovali");
        }else{
            header("location:login.php?message101=*Nije vam dobar email ili šifra");
        }

    }


    public function current_user()
    {
        $email=$_SESSION['email'];
        $this->query("SELECT * FROM users WHERE email = '$email'");
        return $this->single();
    }

}