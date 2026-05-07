<?php
function popka($arr, $albumId) {
    $out = "<table border='1' cellpadding='8' cellspacing='0'>
            <tr>
                <th>ID трека</th>
                <th>Название трека</th>
                <th>Примечание</th>
                <th>Альбом</th>
            </tr>";
    
    foreach ($arr as $track) {
        if ($track['id_album'] == $albumId) {
            $out .= "<tr>
                        <td>{$track['id_track']}</td>
                        <td>{$track['name']}</td>
                        <td>{$track['note']}</td>
                        <td>{$track['id_album']}</td>
                     </tr>";
        }
    }
    
    $out .= "</table>";
    return $out;
}
?>