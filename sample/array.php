<?php
    $numbers = array();
    $numbers[] = 7;
    echo $number[0];
    array_push($numbers, 9);
    print_r($numbers); //http://php.net
    $sport = array("Hockey", "Jumping");
    $sport[] = 17;
    print_r($sport);
    $info = array(
        "name" => "Bob",
        "age" => 25,
        "sport" => "Baseball"
    );
    print_r($info);
    echo $info["name"];
    $info["work"] = "programmer";
    
    function printInfo($info)
    {
        $data = "<label>Name:</label>" . 
            "<strong>" . $info["name"] . "</strong>" . 
            "<br>" . 
            "<label>Age: </label>" . 
            "<span>" . $info["age"] . "</span>";
        echo $data;
    }