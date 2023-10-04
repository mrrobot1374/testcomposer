<?php

require './vendor/autoload.php';
use User\UserController;
use Teacher\teacher;
use Teacher\Controller\TeacherController;

$user = new UserController();
$user->test();

$teacher = new teacher();

$teacherCo = new TeacherController();

var_dump($teacherCo);
//$client = new \GuzzleHttp\Client();
//$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1/comments');
//$data = json_decode($response->getBody());
//foreach ($data as $D){
//    echo $D->body . "<br>";
//}
