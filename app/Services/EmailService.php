<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;

class EmailService{
    //code
    protected $app_name;
    protected $host;
    protected $port;
    protected $username;
    protected $password;



    function __construct(){
        $this->app_name= config('app.name');
        $this->host= config('app.mail_host');
        $this->port= config('app.mail_port');
        $this->username= config('app.mail_username');
        $this->password= config('app.mail_password');
    }

    public function sendEmail($subject, $emailUser, $nameUser, $isHtml, $message){
        $nouveaumail= new PHPMailer;

        $nouveaumail->isSMTP();
        $nouveaumail->SMTPDebug= 0;
        $nouveaumail->Host= $this->host;
        $nouveaumail->Port= $this->port;
        $nouveaumail->Username= $this->username;
        $nouveaumail->Password= $this->password;
        $nouveaumail->SMTPAuth=true;
        $nouveaumail->Subject= $subject;
        $nouveaumail->setFrom($this->app_name, $this->app_name);
        $nouveaumail->addReplyTo($this->app_name, $this->app_name);
        $nouveaumail->addAddress($emailUser, $nameUser);
        $nouveaumail->isHTML($isHtml);
        $nouveaumail->Body= $message;
        $nouveaumail->send();
    }
}

?>
