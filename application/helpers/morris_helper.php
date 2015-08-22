<?php
function generate_dashboard_graph_data($game_scores)
{
    $data_string = "";
    foreach ($game_scores as $date => $score) {

        $data_string .= "{ 'period': '" . $date . "', 'Score': " . $score . " },";

    }
    return $data_string;
}

?>