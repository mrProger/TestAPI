<?php

$_POST = json_decode(file_get_contents('php://input'), true);

if (isset($_POST['function']))
    if ($_POST['function'] == 'get_photo_data' && isset($_POST['tags']))
        get_photo_data($_POST['tags']);

function get_photo_data($tags) {
    $sql = mysqli_connect('localhost', 'root', '', 'Ilya_Kh_API');
    $status = false;

    $names_array = array();
    $paths_array = array();
    
    if (!$sql) {
        echo mysqli_connect_error();
        $status = false;
    }
    else
        $status = true;

    if ($status) {
        if (count($tags) > 0)
            $query = "SELECT * FROM photo WHERE tags=JSON_OBJECT('tag', '" . json_encode($tags) . "')";
        else
            $query = "SELECT * FROM photo";

        $result = $sql->query($query);

        while ($row = $result->fetch_assoc()) {
            if (isset($row['name']))
                array_push($names_array, $row['name']);
            
            if (isset($row['path']))
                array_push($paths_array, $row['path']);
        }

        $result = array('names' => $names_array, 'paths' => $paths_array);

        echo json_encode($result);
    }
} 