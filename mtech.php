<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTech</title>
    <link rel="stylesheet" href="style.css">

    <style>
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

        #mtechMove{
            background-color:#e7e6f0;
            height: 50px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-bottom: 20px;
        }

        #mtechMove1{
            display: inline-block;
            background-color: #e7e6f0;
            font-size: 30px;
            font-weight: bolder;
            animation: move 5s ease-in 0s infinite alternate;
            text-align: center;
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
    
    
    <main>
        

        <div id="logoNav">
            <div id="nitdlogo"><img id="img" src="nitdlogo.svg" alt="NIT Delhi Logo"></div>
            <div id="nitd">
                                    <p class="nitd">राष्ट्रीय प्रौद्योगिकी संस्थान दिल्ली</p>
                                    
                             <p class="nitd">National Institute of Technology Delhi</p>
                                    
            <p class="nitd" style="font-size: medium;">An autonomus Institute under the aegis of Ministry of Education, Govt. of India</p>
            </div>

            <div id="mylogo"><img id="myImg" src="NITD PYQP.jpg" alt="NITD PYQP"></div>
        </div>

        <div id="mtechMove">
            <div id="mtechMove1">M.TECH PROGRAMME</div>
        </div>

        <header>
            <h1 id="mtechHeading"><i>M.Tech Programme</i></h1>
            <br>
        </header>
        <div style="display: flex; justify-content: center;"><h3 id="selectMtechBranch">Select Your Branch</h3></div>

            <center>
                <select id="mtechDropdown" onchange="handleDropdownChange('mtechDropdown', 'mtech')">
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
        
        
        <center id="cse" class="mtech">
            <table>
                <caption><h2>CSE</h2></caption>
                <?php
                include "codeGenerateMtech.php";
                echo generateSemesterTable();
                ?>
                
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    include "downloadMtech.php";
                    getDataBySerialNo(1,12);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(13,24);
                    ?>
                </tr>
            </table>
        </center>

    
        <!-- For AI & DS -->
    
    <center id="aids" class="mtech">
        <table>
            <caption><h2>AI & DS</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
        </table>
    </center>


        <!-- For ECE -->
    
    <center id="ece" class="mtech">
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
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
        </table>
    </center>


        <!-- For EE/EEE -->
    
    <center id="ee" class="mtech">
        <table>
            <caption><h2>EEE/EE</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
        </table>
    </center>

        <!-- For CIVIL -->
    
    <center id="civil" class="mtech">
        <table>
            <caption><h2>CIVIL</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
        </table>
    </center>

        <!-- For ME -->
    <center id="me" class="mtech">
        <table>
            <caption><h2>ME</h2></caption>
            <?php
                echo generateSemesterTable();
            ?>
            
                <!-- 2023 -->
                <tr>
                    <td class="year">2023</td>

                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
                
                <!-- 2024 -->
                <tr>
                    <td class="year">2024</td>
                    <?php
                    getDataBySerialNo(100,112);
                    ?>
                </tr>
        </table>
    
    </center>

</main>
    <script src="script.js"></script>
</body>
</html>

<?php
include "mtechUpload.php";
?>