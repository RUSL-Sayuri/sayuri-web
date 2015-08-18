<?php
function generate_dashboard_graph_data($game_scores)
{
    $data_string = "";
    foreach ($game_scores as $type=>$scores){
        foreach($scores as $score){
            $data_string .= "{ 'period': '" . $score->date . "', '$type': " . $score->score . " },";
        }
    }
    return $data_string;
}

?>