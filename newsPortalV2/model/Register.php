<?php
class Register{
    // register
    public function registerUser(){
        $controll=array(0=>false,1=>"error");
        if(isset($_POST["save"]))
        {
            $errorString="";
            $name = $_POST["name"];
            $email = filter_input(INPUT_POST, "email",FILTER_VALIDATE_EMAIL);
            if(!$email){
                $errorString.="Wrong email<br />";
            }
            $password = $_POST["password"];
            $confirm = $_POST["confirm"];
            if (!$password || !$confirm || mb_strlen($password)<6)
            {
                $errorString.="The password must include more than 6 symbols <br />";

            }
            if($password!=$confirm){
                $errorString.="The passwords don't match <br />";
            }
            if(mb_strlen($errorString)==0)
            {
                $passwordHash = password_hash($_POST["password"],PASSWORD_DEFAULT);
                $date=Date("Y-m-d");
                
                $sql="INSERT INTO `users` (`id`,`username`,`email`,`password`,`status`,`registration_date`,`pass`) 
                VALUES (NULL,'$name','$email','$passwordHash','user','$date','$password')";
                $db = new Database();
                $item = $db->executeRun($sql);
                    if($item)
                        $controll=array(0=>true);
                    else
                        $controll=array(0=>false,1=>"error");
                        echo ($name);
                        echo ($email);
                        echo ($passwordHash);
                        echo ($date);
                        echo ($password);
                        echo($sql);
            }
            else
            {
                $controll=array(0=>false,1=>$errorString);
            }

        }
        return $controll;
    }
}
?>