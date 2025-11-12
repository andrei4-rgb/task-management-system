<?php

$students = [
    [
        "name" => "Andrei",
        "grades" => [
            "CCS112" => 59,
            "ITEW3"  => 80,
            "ENG1"   => 83
        ]
    ],
    [
        "name" => "Villapando",
        "grades" => [
            "CCS112" => 45,
            "ITEW3"  => 60,
            "ENG1"   => 90
        ]
    ],
    [
        "name" => "Artillero",
        "grades" => [
            "CCS112" => 55,
            "ITEW3"  => 60,
            "ENG1"   => 58
        ]
    ],
    [
        "name" => "Abad",
        "grades" => [
            "CCS112" => 60, 
            "ITEW3"  => 60, 
            "ENG1"   => 60
        ]
    ],
    [
        "name" => "Lexin",
        "grades" => [
            "CCS112" => 75,
            "ITEW3"  => 50,
            "ENG1"   => 61
        ]
    ]
];

foreach ($students as $student) {
    echo "Student: " . $student["name"] . "<br>";
    $total = 0;
    $count = 0;

foreach ($student["grades"] as $subject => $grade) {
        echo "Grades: " . $subject . " - " . $grade . "<br>";
        $total += $grade;
        $count++;
    }

}
?>