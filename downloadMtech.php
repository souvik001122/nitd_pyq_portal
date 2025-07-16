<?php
include "database.php";

function generateDownloadButton($fileName, $class)
{
    return '<td><button id="mtechBtn" class="' . $class . '"><a id="mtechBtn" style="text-decoration:dotted;" href="mtech/' . $fileName . '" download>Download</a></button></td>';
}


/* 
function getDataBySerialNo($startSerialNo, $endSerialNo)
{
    global $con;

    $sql = "SELECT * FROM btech WHERE id BETWEEN $startSerialNo AND $endSerialNo";
    $result = $con->query($sql);

    $count = 0;
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $fileName = $row["filename"];
        //
        if (!file_exists("btech/" . $fileName)) 
        {
            echo "<tr><td colspan='16'>The file is not available on the server!</td></tr>";
        }
        //
            $class = $count % 4 < 2 ? "oddd" : "even";
            echo generateDownloadButton($fileName, $class);
            $count++;
        }

    } 
    else 
    {
        echo "<tr><td colspan='16'>No records Found !</td></tr>";
    }

    
}

*/

function getDataBySerialNo($startSerialNo, $endSerialNo)
{
    global $con;

    $sql = "SELECT * FROM mtech WHERE id BETWEEN $startSerialNo AND $endSerialNo";
    $result = $con->query($sql);

    $count = 0;
    $recordsFound = false; // Flag to track if any records were found

    if ($result->num_rows > 0) 
    {
        // Records were found for this year
        $recordsFound = true; 

        while($row = $result->fetch_assoc()) 
        {
            $fileName = $row["filename"];

            if (!file_exists("mtech/" . $fileName)) 
            {
                echo "<td colspan='16'>The file is not available on the server!</td>";
            }
            else
            {
                $class = $count % 4 < 2 ? "oddd" : "even";
                echo generateDownloadButton($fileName, $class);
                $count++;
            }
        }
    }

    if (!$recordsFound) {
        // No records found for this year, print message in the same row
        echo "<td colspan='16'>No records Found !</td>";
    }
}

?>
