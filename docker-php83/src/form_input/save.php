<?php session_start();


if (isset($_POST['save'])) {
    $name   = $_POST['name'];
    $eng1   = $_POST['eng1'];
    $ccs112 = $_POST['ccs112'];
    $itew3  = $_POST['itew3'];

    
    $student = [
        "name"   => $name,
        "ENG1"   => $eng1,
        "CCS112" => $ccs112,
        "ITEW3"  => $itew3
    ];

    $_SESSION['students'][] = $student;
}

if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

exit();
?>
