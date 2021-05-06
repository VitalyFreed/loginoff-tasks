<?php

header('Content-type: image/jpeg');

$img = $_SERVER['DOCUMENT_ROOT'] . '/dog.jpeg';

imagejpeg(imagecreatefromjpeg($img));

