<?php

$engines = [
    ["name" => "Solaris New","engines" => ["Бензиновый" => ["1.4","1.6"]],"code" => "solarisnew","image" => "/service/cars/car-image--solarisnew.png"],
    ["name" => "Solaris","engines" => ["Бензиновый" => ["1.4","1.6"]],"code" => "solaris","image" => "/service/cars/car-image--solaris.png"],
    ["name" => "i30","engines" => ["Бензиновый" => ["1.4","1.6"]],"code" => "i30","image" => "/service/cars/car-image--i30.png"],
    ["name" => "Elantra","engines" => ["Бензиновый" => ["1.6","1.8"]],"code" => "elantra","image" => "/service/cars/car-image--elantra.png"],
    ["name" => "Elantra new","engines" => ["Бензиновый" => ["1.6","2.0"]],"code" => "elantranew","image" => "/service/cars/car-image--elantranew.png"],
    ["name" => "Sonata","engines" => ["Бензиновый" => ["2.0","2.4 GDi"]],"code" => "sonata","image" => "/service/cars/car-image--sonata.png"],
    ["name" => "Veloster","engines" => ["Бензиновый" => ["1.6","1.6T GDI"]],"code" => "veloster","image" => "/service/cars/car-image--veloster.png"],
    ["name" => "i40","engines" => ["Бензиновый" => ["1.6","2.0"],"Дизельный" => ["1.7"]],"code" => "i40","image" => "/service/cars/car-image--i40.png"],
    ["name" => "Creta","engines" => ["Бензиновый" => ["1.6","2.0"]],"code" => "creta","image" => "/service/cars/car-image--creta.png"],
    ["name" => "ix35","engines" => ["Бензиновый" => ["2.0"],"Дизельный" => ["2.0"]],"code" => "ix35","image" => "/service/cars/car-image--ix35.png"],
    ["name" => "Tucson","engines" => ["Бензиновый" => ["1.6","2.0","1.6T GDI"],"Дизельный" => ["2.0"]],"code" => "tucson","image" => "/service/cars/car-image--tucson.png"],
    ["name" => "Santa Fe","engines" => ["Бензиновый" => ["2.4"],"Дизельный" => ["2.2"]],"code" => "santafe","image" => "/service/cars/car-image--santafe.png"],
    ["name" => "Santa Fe New","engines" => ["Бензиновый" => ["2.4"],"Дизельный" => ["2.2"]],"code" => "santafenew","image" => "/service/cars/car-image--santafenew.png"],
    ["name" => "Grand Santa Fe","engines" => ["Бензиновый" => ["3.3","3.0 GDI"],"Дизельный" => ["2.2"]],"code" => "grandsantafe","image" => "/service/cars/car-image--grandsantafe.png"],
    ["name" => "H1","engines" => ["Бензиновый" => ["2.4"],"Дизельный" => ["2.5"]],"code" => "h1","image" => "/service/cars/car-image--h1.png"]
];
print json_encode($engines);

