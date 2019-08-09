<?php

$carList = [
    ["id" => 6, "name" => "Creta", "code" => "Creta", "image" => "/storage/cars/1561041417.png", "link" => "/Creta"],
    ["id" => 7, "name" => "H-1", "code" => "H-1", "image" => "/storage/cars/1561041426.png", "link" => "/H-1"],
    ["id" => 9, "name" => "i30N", "code" => "i30N", "image" => "/storage/cars/1561041440.png", "link" => "/i30N"],
    ["id" => 3, "name" => "Solaris", "code" => "Solaris", "image" => "/storage/cars/1561041395.png", "link" => "/Solaris"],
    ["id" => 5, "name" => "SONATA", "code" => "Sonata", "image" => "/storage/cars/1561041410.png", "link" => "/Sonata"],
    ["id" => 10, "name" => "ELANTRA", "code" => "Elantra", "image" => "/storage/cars/1561041448.png", "link" => "/NewElantra"],
    ["id" => 1, "name" => "SANTA FE", "code" => "Santa Fe", "image" => "/storage/cars/1561041379.png", "link" => "/NewSantaFe"],
    ["id" => 2, "name" => "TUCSON", "code" => "Tucson", "image" => "/storage/cars/1561041387.png", "link" => "/NewTucson"]
];

print json_encode($carList);