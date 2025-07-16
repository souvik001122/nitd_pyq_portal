<?php
function generateSemesterTable() {
    $html = '<tr>
                <th class="year" style="font-size: 20px;"><big>Year</big></th>
                <th class="oddd" style="font-size: 18px;" colspan="2">I Semester</th>
                <th class="even" style="font-size: 18px;" colspan="2">II Semester</th>
                <th class="oddd" style="font-size: 18px;" colspan="2">III Semester</th>
                <th class="even" style="font-size: 18px;" colspan="2">IV Semester</th>
                <th class="oddd" style="font-size: 18px;" colspan="2">V Semester</th>
                <th class="even" style="font-size: 18px;" colspan="2">VI Semester</th>
                
            </tr>
            <tr>
                <td class="year">*****</td>
                <td class="oddd" style="font-size: 16px; font-style: italic; font-weight: bolder;">Mid Sem</td>
                <td class="oddd" style="font-size: 16px; font-style: italic; font-weight: bolder;">End Sem</td>
                <td class="even" style="font-size: 16px; font-style: italic; font-weight: bolder;">Mid Sem</td>
                <td class="even" style="font-size: 16px; font-style: italic; font-weight: bolder;">End Sem</td>
                <td class="oddd" style="font-size: 16px; font-style: italic; font-weight: bolder;">Mid Sem</td>
                <td class="oddd" style="font-size: 16px; font-style: italic; font-weight: bolder;">End Sem</td>
                <td class="even" style="font-size: 16px; font-style: italic; font-weight: bolder;">Mid Sem</td>
                <td class="even" style="font-size: 16px; font-style: italic; font-weight: bolder;">End Sem</td>
                <td class="oddd" style="font-size: 16px; font-style: italic; font-weight: bolder;">Mid Sem</td>
                <td class="oddd" style="font-size: 16px; font-style: italic; font-weight: bolder;">End Sem</td>
                <td class="even" style="font-size: 16px; font-style: italic; font-weight: bolder;">Mid Sem</td>
                <td class="even" style="font-size: 16px; font-style: italic; font-weight: bolder;">End Sem</td>
                
            </tr>';
            
    return $html;
}

// echo generateSemesterTable();
?>
