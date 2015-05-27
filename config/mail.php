<?php

return [

    'driver' => 'mailgun',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => array('address' => 'erikper.magnusson@gmail.com', 'name' => 'Erik'),
    'encryption' => 'tls',
    'username' => env('MAIL_USERNAME','username'),
    'password' => env('MAIL_PASSWORD','password'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false

];
