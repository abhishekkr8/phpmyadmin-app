<?php
/* Blowfish secret for cookies (32 chars random string) */
$cfg['blowfish_secret'] = 'this_should_be_32_chars_random_secret';

/* Servers configuration */
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = getenv('127.0.0.1');
$cfg['Servers'][$i]['port'] = getenv('3308');
$cfg['Servers'][$i]['user'] = getenv('root');
$cfg['Servers'][$i]['password'] = getenv('Abhi8520@');
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/* phpMyAdmin settings */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
