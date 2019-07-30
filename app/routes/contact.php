<?php

$app->get('/contact', 'ContactController:contact');
$app->post('/mail', 'ContactController:mail');