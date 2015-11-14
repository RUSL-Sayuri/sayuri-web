<?php
function generate_dashboard_graph_data($game_scores)
{
    $data_string = "";
    foreach ($game_scores as $date => $score) {

        $data_string .= "{ 'period': '" . $date . "', 'Score': " . $score . " },";

    }
    return $data_string;
}

function generate_morris_graph_data($game_scores, $category){
    $data_string = "";
    foreach ($game_scores as  $score) {

        $data_string .= "{ 'period': '" . substr($score->date_time,0,10) . "', '$category': " . $score->score . " },";

    }
    return $data_string;

}

?>