<?php
/* Blowfish secret for cookies (32 chars random string) */
$cfg['blowfish_secret'] = 'this_should_be_32_chars_random_secret';

/* Servers configuration */
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = getenv('MYSQL_ADDON_HOST');
$cfg['Servers'][$i]['port'] = getenv('MYSQL_ADDON_PORT');
$cfg['Servers'][$i]['user'] = getenv('MYSQL_ADDON_USER');
$cfg['Servers'][$i]['password'] = getenv('MYSQL_ADDON_PASSWORD');
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/* phpMyAdmin settings */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
