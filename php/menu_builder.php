<?php
    $upit = "SELECT * FROM navigation n";
    $res = executeQuery($upit);
    $novi = array();

    //dynamic dropdown menu in nav bar
    //1st part:
    foreach ($res as $r) {
        $novi[] = array("id" => intval($r->id_link),
            "title" => $r->link_title,
            "parent_id" => $r->parent,
            "path" => $r->path,
            "id_link" => $r->id_link,
            );
        }
      
    //2nd part: checking if links in nav bar have children 
    function has_children($rows, $id){
        foreach ($rows as $row) {
            if ($row['parent_id'] == $id) {
                return true;
            }
        }
        return false;
    }


    //3rd part: making dynamic dropdown menu in nav bar 
    function build_menu($rows, $parent = 0){
        $result = "<ul>";
        foreach ($rows as $row) {
            if ($row['parent_id'] == $parent) {
                $result .= "<li><a href='" . $row['path'] . "'>" 
                    . $row['title'] . "</a>";
                    if (has_children($rows, $row['id'])) {
                        $result .= build_menu($rows, $row['id']);
                        }
                $result .= "</li>";
                    }
                }
            $result .= "</ul>";
        return $result;
    }

    //dynamic menu in footer 
    function build_menu_without_childern($rows, $parent = 0){
        $result = "<ul class='angle angle-right'>";
        foreach ($rows as $row) {
            if ($row['parent_id'] == $parent) {
                $result .= "<li><a href='" . $row['path'] . "'>" 
                        . $row['title'] . "</a>";
                $result .= "</li>";
                }
            }
        $result .= "</ul>";
    return $result;
    }