<?php


require ("includes/conn.php");

function getUsersData ($id)
{
    $array = array();
    $query = mysql_query ("SELECT * FROM 'instructors' WHERE id =".$id);
    while ($row = mysql_fetch_assoc($query))
    {
        $array['id'] = $row['id'];
        $array['firstname'] = $row['firstname'];
        $array['lastname'] = $row['lastname'];
        $array['username'] = $row['username'];
        $array['password'] = $row['password'];
        $array['department'] = $row['department'];
    }
    return $array;
}

function getId ($id)
{
    $query = mysql_query("SELECT 'id' FROM 'instructors' WHERE 'id'=".$id);
    while ($row = mysql_fetch_assoc($query))
    {
        return $row['id'];
    }
}
?>
