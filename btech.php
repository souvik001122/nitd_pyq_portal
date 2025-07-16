
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTech</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* main{
            
        } */
        /* table {
            border-collapse: collapse;
            width: 75%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align:center;
        } */
        
        table {
            width: calc(80% - 4px); /* Adjust the width as needed, subtracting twice the border width */
            border-collapse: collapse;
            margin: 0 auto; /* Center the table horizontally */
            border: 2px solid rgb(201, 224, 224); /* Set table border rgb(170, 221, 221*/
        }
        th, td {
            border: 3px solid rgb(201, 220, 220); /* Set cell border */
            padding: 3.5px; /* Further reduce padding */
            text-align: center;
            max-width: calc(200px - 4px); /* Increase max width, subtracting twice the border width */
            overflow-wrap: break-word; /* Break words to fit within cell */
            word-wrap: break-word; /* For older browsers */
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        /* ************** */
        #logoNav{
            height: 100px;
            width:100vw;
            background-color: #f5f3d9;
            display: flex;
            flex-direction: row;
            justify-content:center;
            align-items: center;
            margin-bottom: 10px;

            margin-bottom: 30px;
        }
        
        #nitdlogo, #nitd{
            height:100px;
            align-self: center;
        }

        #img{
            height:100px;
            width:100px;
            margin-right: 10px;
        }

        #myImg{
            height: 100px;
            width:100px;
            border-radius: 50%;
            border: 5px solid rgb(227, 231, 223);
            margin-top: 10px;
    
        }

        #mylogo{
            position: absolute;
            right: 5px;
            color: #5BBCFF;
        }

        #nidlogo{
            margin-right: 10px;
        }

        #nitd{
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            
        }

        .nitd{
            font-size: 25px;
            font-weight: bolder;
            color:rgb(13, 13, 148);
        }

        #btechMove{
            background-color:#e7e6f0;
            height: 50px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-bottom: 20px;
        }

        #btechMove1{
            display: inline-block;
            background-color: #e7e6f0;
            
            font-weight: bolder;
            animation: move 5s ease-in 0s infinite alternate;
            text-align: center;
            font-size: 30px;
            align-self: center;
            font-style: italic;
        }

        /* @keyframes move{
        from{
            color: #59850e;        
            transform: translate(-200px);
        }
        to{
            color: #0f85b7;
            transform: translate(200px);
        }
    } */

    </style>
</head>
<body>
    
    
    <main >
        

        <div id="logoNav">
            <div id="nitdlogo"><img id="img" src="nitdlogo.svg" alt="NIT Delhi Logo"></div>
            <div id="nitd">
                                    <p class="nitd">राष्ट्रीय प्रौद्योगिकी संस्थान दिल्ली</p>
                                    
                             <p class="nitd">National Institute of Technology Delhi</p>
                                    
            <p class="nitd" style="font-size: medium;">An autonomus Institute under the aegis of Ministry of Education, Govt. of India</p>
            </div>

            <div id="mylogo"><img id="myImg" src="NITD PYQP.jpg" alt="NITD PYQP"></div>
        </div>

        <!-- ***** -->
        <!-- #5BBCFF; -->
        <div id="btechMove">
            <div id="btechMove1">B.TECH PROGRAMME</div>
        </div>

        <header>
            <h1 id="btechHeading"><i>B.Tech Programme</i></h1>
            <br>
        </header>

        <div style="display: flex; justify-content: center;"><h3 id="selectBranch">Select Your Branch</h3></div>
        
            <center>
                <select id="dropdown" onchange="handleDropdownChange('dropdown', 'btech')">
                    <option value="default">Select an Option</option>
                    <option value="cse">CSE</option>
                    <option value="aids">AI & DS</option>
                    <option value="ece">ECE</option>
                    <option value="ee">EEE/EE</option>
                    <option value="civil">CIVIL</option>
                    <option value="me">ME</option>
                </select>
            </center>
        
            <br><br><br>

        
        <!-- For CSE ... -->
        
        
        <center id="cse" class="btech">
            <table>
                <caption><h2>CSE</h2></caption>
                <?php
                include "codeGenerate.php";
                echo generateSemesterTable();
                ?>
                
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    include "download.php";
                    getDataBySerialNo(1,16);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(97,112);
                    ?>
                </tr>
            </table>
        </center>
        
    

    <!-- For AI & DS -->
    
    <center id="aids" class="btech">
        <table>
            <caption><h2>AI & DS</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(17,32);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(113,128);
                    ?>
                </tr>
        </table>
    </center>

    
    <!-- For ECE -->
    
    <center id="ece" class="btech">
        <table>
            <caption><h2>ECE</h2></caption>
            <?php
                echo generateSemesterTable();
                // echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(33,48);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(129,144);
                    ?>
                </tr>
        </table>
    </center>

    
    <!-- For EE/EEE -->
    
    <center id="ee" class="btech">
        <table>
            <caption><h2>EEE/EE</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(49,64);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(145,160);
                    ?>
                </tr>
        </table>
    </center>

    
    <!-- For CIVIL -->
    
    <center id="civil" class="btech">
        <table>
            <caption><h2>CIVIL</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(65,80);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(161,176);
                    ?>
                </tr>
        </table>
    </center>


    <!-- For ME -->
    <center id="me" class="btech">
        <table>
            <caption><h2>ME</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>

                    <?php
                    getDataBySerialNo(81,96);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(177,192);
                    ?>
                </tr>
        </table>
    
    </center>
    

</main>
    <script src="script.js"></script>
</body>
</html>
<?php
include "btechUpload.php";
?>