<?php

function printData($data)
{
    $data = "data/messages.txt";
    $content = file_get_contents($data);
    $formData = implode(' ',$_POST);
    $content .= $formData."/n";
    file_put_contents($data, $content);
    $messages = file_get_contents($data, true);
    $messages = explode('/n', $messages);
    echo "<div class='container d-flex flex-column mt-3'style='background: darkorange; border-radius: 2mm'>";
    echo "<h2 class='h2 align-self-center mt-3'>Booked Flights</h2>";
    echo "<div class='ul align-self-center'>";
        foreach($messages as $message)
        {
            echo "<p><b>$message</b></p><br>";
        }
    echo "</div>";
    echo "</div>";

}

