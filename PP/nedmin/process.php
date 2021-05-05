<?php

include 'connect.php';
ob_start();
session_start();

//admin kayıt
if (isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
   $password_1 = $_POST['password_1'];
   $password_2 = $_POST['password_2'];

    //şifre uyuşma kontrolü
    if ($password_1 === $password_2) {
        //echo 'şifreler aynı';
        //şifre karakter kontrolü
        if (strlen($password_1) >= 6) {
            //echo 'başarılı';

            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control->execute();
            $has_admin = $admin_control->rowCount();
            if ($has_admin == 0) {
                $pass = md5($password_1);
                $admin_signup = $db->prepare("INSERT INTO user SET
                user_name='$user_name',
                email='$email',
                password='$pass'");

                $insert = $admin_signup->execute();

                if ($insert) {
                    //echo 'başarılı';
                header("Location: login.php?status=ok&user_name=$user_name");
                } else {
                   // echo 'başarısız';
                   header("Location: login.php?register=no");
                }
            } else {
                //echo 'kayıtlı admin mevcut';
                header("Location: login.php?register=hasadmin");
            }
        } else {
            //echo 'şifre kısa';
            header("Location: login.php?register=lowchar");
        }
    } else {
        //echo 'şifreler farklı';
        header("Location: login.php?register=inequal");
    }
}

// ADMİN giriş
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass = md5($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login->execute();

    $count = $login -> rowcount();

    if($count==1){
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    } else{
        header("Location:login.php?login=no");
    }
}

//insert skill 
if(isset($_POST['insert_skills'])){
    $site_tittle = $_POST['site_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $fourth_skill = $_POST['fourth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $fourth_counter =$_POST['fourth_counter'];

$insert_skill = $db->prepare("INSERT INTO skills SET
    site_title='$site_tittle' ,
    first_skill='$first_skill',
    second_skill='$second_skill',
    third_skill='$third_skill',
    fourth_skill='$fourth_skill',
    first_counter='$first_counter',
    second_counter='$second_counter',
    third_counter='$third_counter',
    fourth_counter='$fourth_counter'
");
$insert=$insert_skill->execute();

    if($insert){
    header("Location: skill.php?insert=ok");
   }else{
    header("Location: skill.php?insert=no");
  }
}
//update skill
if(isset($_POST['update_skills'])){
    $site_title = $_POST['site_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $fourth_skill = $_POST['fourth_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];
    $fourth_counter = $_POST['fourth_counter'];

    $update_skill = $db -> prepare("UPDATE skills SET
        site_title='$site_title',
        first_skill ='$first_skill',
        second_skill ='$second_skill',
        third_skill ='$third_skill',
        fourth_skill ='$fourth_skill',
        first_counter ='$first_counter',
        second_counter ='$second_counter',
        third_counter ='$third_counter',
        fourth_counter ='$fourth_counter' WHERE skill_id=1     
    ");
    $update=$update_skill -> execute();
    if($update){
        header("Location: skill.php?update=ok");
    }else{
        header("Location: skill.php?update=no");
    }
}

// insert about 
if(isset($_POST['insert_about'])){
    $about_title = $_POST['about_title'];
    $content = $_POST['content'];
    $cv = $_POST['cv'];

    $insert_about = $db -> prepare("INSERT INTO about_me SET
    about_title ='$about_title',
    content= '$content',
    cv='$cv'
    ");
    $insert_a=$insert_about -> execute();
    if($insert_a){
        header("Location: about_us.php?insert_a=ok");
    }else{
        header("Location: about_us.php?insert_a=no");
    }
}
//update about

if(isset($_POST['update_about'])){
    $about_title = $_POST['about_title'];
    $content = $_POST['content'];
    $cv = $_POST['cv'];

    $update_about = $db ->prepare("UPDATE about_me SET
    about_title ='$about_title',
    content= '$content',
    cv='$cv'
    ");
    $update_a=$update_about -> execute();
    if($update_a){
        header("Location: about_us.php?update_a=ok");
    }else{
        header("Location: about_us.php?update_a=no");
    }
}

//insert contact
 if(isset($_POST['insert_contact'])){
    $content = $_POST['content'];
    $locationn=$_POST['locationn'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $gsm = $_POST['gsm'];
    
    $insert_contact = $db -> prepare("INSERT INTO contact SET
    content='$content',
    locationn='$locationn',
    email ='$email',
    facebook = '$facebook',
    instagram ='$instagram',
    twitter ='$twitter',
    linkedin ='$linkedin',
    gsm ='$gsm'
    ");
    $insert_c=$insert_contact -> execute();
    if($insert_c){
        header("Location: contact.php?insert_c=ok");
    }else{
        header("Location: contact.php?insert_c=no");
    }
}
//update contact

if(isset($_POST['update_contact'])){
    $content = $_POST['content'];
    $locationn = $_POST['locationn'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $gsm = $_POST['gsm'];
    
    $update_contact = $db -> prepare("UPDATE contact SET
    content ='$content',
    locationn ='$locationn',
    email ='$email',
    facebook = '$facebook',
    instagram ='$instagram',
    twitter ='$twitter',
    linkedin ='$linkedin',
    gsm ='$gsm'
    ");
    $update_c=$update_contact -> execute();
    if($update_c){
        header("Location: contact.php?update_c=ok");
    }else{
        header("Location: contact.php?update_c=no");
    }
}

//insert site settings
if(isset($_POST['insert_settings'])){
    $site_title = $_POST['site_title'];
    $namee=$_POST['namee'];
    
    $insert_settings = $db -> prepare("INSERT INTO site_settings SET
    site_title ='$site_title',
    namee='$namee'
    
    ");
    $insert_set=$insert_settings -> execute();
    if($insert_set){
        header("Location: settings.php?insert_set=ok");
    }else{
        header("Location: settings.php?insert_set=no");
    }
}
//update settings
if (isset($_POST['update_settings'])) {
    $site_title = $_POST['site_title'];
    $namee = $_POST['namee'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        if (strlen($password) >=6) {
            $pass1 = md5($password);
            $newpassword = $db->prepare("UPDATE user SET password='$pass1' ");
            $updatepass = $newpassword->execute();
        }
    }
    $update_settings = $db->prepare("UPDATE site_settings SET 
            site_title ='$site_title',
            namee= '$namee'
            
            WHERE settings_id=1
            ");
    $update_set = $update_settings->execute();

    if ($update_set and $updatepass) {
        header("Location: settings.php?update_set=ok");
    } else {
        header("Location: settings.php?update_set=no");
    }
}