<?php
    if(isset($_POST['submit'])){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST[
                "username"])){
                    echo "Nama kosong";
                }else{
                    $user_name = cek_input($_POST["username"]);
                    if (!preg_match("/^[a-z A-Z ]*$/",$user_name))
                        echo "nama harus huruf";
                     else {
                        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $message= $_POST['message'];

        echo "Atas nama $username dengan alamat email
        $email mengirimkan pesan $message";
    }
                }
            }
    }
function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>