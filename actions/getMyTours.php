<?php
$userId = $_REQUEST['user'];
$query = "SELECT hotel.NAME AS hotel, attractions.NAME AS attractions, user.NAME AS name, user.surname AS surname, user.email as email, ticket.TYPE AS ticket 
FROM usertour
LEFT JOIN hotel ON usertour.hotel = hotel.id
LEFT JOIN user ON usertour.user = user.id
LEFT JOIN attractions ON usertour.attractions = attractions.id
LEFT JOIN ticket ON usertour.ticket = ticket.id
WHERE user.id = $userId";
$res = $link->query($query);
