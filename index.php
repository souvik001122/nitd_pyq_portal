<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Apply spacing between table cells */
        table {
          border-collapse: separate;
          border-spacing: 10px; /* Adjust the spacing as needed */
        }
        
        /* Style for table cells */
        td {
          border: 1px solid black; /* Add borders to the cells */
          padding: 10px; /* Add padding inside the cells */
          text-align: center;
        }

        #logoNav{
            height: 100px;
            width:100vw;
            background-color: #f5f3d9;
            display: flex;
            flex-direction: row;
            justify-content:center;
            align-items: center;
            margin-bottom: 10px;
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


        #footer{
            position:relative;
            bottom: 0px;
            height: 100px;
            width:100vw;
            background-color: #5BBCFF;
            display: flex;
            flex-direction: row;
            justify-content:space-evenly;
            align-items: center;
            
            
        }

        .footer{
            background-color: #5BBCFF;
            font-weight: bolder;
            font-style: italic;
            text-align: center;
        }

        /* #update, #copyright, #icoe{
            align-self: center;
           
        }

        #update, #icon{
            padding: 0px 40px 0px 40px;
        }
        #update{
            padding-left: 100px;
        }
        #icon{
            padding-right: 100px;
        }

        #copyright{
            margin: auto;
            padding-right: 280px;
        } */
        #update, #copyright, #icon{
            align-self: center;
           
        }
        
        #update{
            width: 30%;
        }

        #copyright{
            width:40%;
            text-align: justify;
        }

        #icon{
            width: 30%;
        }
        
        .icon{
            font-size: 25px;
        }

        #prog{
            margin: auto;
            height: 300px;
            width: 800px;
            /* background-color: rgba(198, 195, 174, 0.4); */
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-content: center;

        }

        #btech, #mtech, #phd{
            background-color: rgb(198 195 174 / 40%);
            height: 200px;
            width: 200px;
            text-align: center;
            margin: 3px;
            border: 10px solid rgb(208 203 203);
            align-self: center;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10%;
            font-size: 25px;
            font-weight: bolder;
            font-style: italic;
            text-decoration: none;
            color: black;
            transition: all 1s ease-in 0s;
            animation: progAnim 5s ease-in 0s infinite alternate;
        }

        @keyframes progAnim{
            from{
                background-color: rgba(198, 195, 174, 0.4);
            }
            to{
                background-color: rgba(139, 208, 207, 0.4);
                border: 10px solid rgb(167, 150, 150);
            }
        }

        #btech:hover, #mtech:hover, #phd:hover{
            transition: all 1s ease-in 0s;
            transform: scale(1.02);
            /* animation: progHover 5s ease-in 0s infinite alternate; */
        }

        @keyframes progHover{
            from{
                background-color: rgba(198, 195, 174, 0.4);
            }
            to{
                background-color: rgba(56, 161, 160, 0.4);
                border: 10px solid rgb(167, 150, 150);
            }
        }


        </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    
    
        <div id="logoNav">
            <div id="nitdlogo"><img id="img" src="nitdlogo.svg" alt="NIT Delhi Logo"></div>
            <div id="nitd">
                                    <p class="nitd">राष्ट्रीय प्रौद्योगिकी संस्थान दिल्ली</p>
                                    
                             <p class="nitd">National Institute of Technology Delhi</p>
                                    
            <p class="nitd" style="font-size: medium;">An autonomus Institute under the aegis of Ministry of Education, Govt. of India</p>
            </div>

            <div id="mylogo"><img id="myImg" src="NITD PYQP.jpg" alt="NITD PYQP"></div>
        </div>

    <header id="header">
        <div id="nav">
            <!-- <div class="nav"><a href="#" id="image"><img id="img" src="nitdlogo.svg" alt="NIT Delhi Logo"></a></div> -->
            <div class="nav"><a href="#" id="home" onclick="showAndScrollToHiddenText('homeHidden')">Home</a></div>
            <div class="nav"><a href="#" id="aboutUs" onclick="showAndScrollToHiddenText('aboutUsHidden')">About Us</a></div>
            <div class="nav"><a href="#" id="contactUs" onclick="showAndScrollToHiddenText('contactUsHidden')">Contact Us</a></div>
            <div class="nav"><a href="signUp.html" id="signUp" onclick="showAndScrollToHiddenText('signUpHidden')">Sign Up</a></div>
        </div>
    </header>

    <main id="homeHidden" class="hidden">

        <h1 id="heading"><big><i>NIT DELHI PREVIOUS YEAR QUESTION PAPER</i></big></h1>
        <!-- <p id="intro">It is providing previous year Question papers of Minors and Majors to boost up your preparation for exams.</p> -->
        <br><br>
        <div style="display: flex; justify-content: center; "><h3 id="select">Select Your Programme</h3></div>
        
        
        <!-- <center>
            <div id="prog">
                <a id="btech" class="prog" href="btech.php"><img src="btech.jpg" alt="BTech"></a>
                <a id="mtech" class="prog" href="mtech.php"><img src="mtech.jpg" alt="MTech"></a>
                <a id="phd" class="prog" href="phd.php"><img src="phd.jpg" alt="Phd"></a>
            </div>
        </center> -->

        <div id="prog">
            <a id="btech" href="btech.php">B.Tech</a>
            <a id="mtech" href="mtech.php">M.Tech</a>
            <a id="phd" href="phd.php">PHD</a>
        </div>
    
    </main>


        <!-- About Us -->
        <div id="aboutUsHidden" class="hidden">
        <div id="aboutNav">
        <div id="aboutNav1">About National Institute Of Technology, Delhi</div>
        </div>
        <br>
        <div id="about">About NIT Delhi</div>
        <div id="info">
            <div class="info">
                National Institute of Technology Delhi (NITD) is one of the thirty one NIT (s) established in the year 2010 by an Act of Parliament. The Institute has been declared as an Institute of National importance.
            </div>
            <br>
            <div class="info">
                NIT Delhi is an autonomous Institute which functions under the aegis of Ministry of Education, Government of India. It aims to provide instructions and research facilities in various disciplines of Engineering, Science and Technology, Management, Social Sciences and Humanities for advance learning and dissemination of knowledge.
            </div>
            <br>
            <div class="info">
                MISSION: Application of Knowledge through learning and inculcating Research Oriented mindset towards Design and Innovative Development for Realistic Societal Solutions.
            </div>
            <br>
            <div class="info">
                VISION: Committed to holistic development of Lives and Society by imparting Knowledge of Science and Technology and Crystallizing the future.
            </div>
            <br>
            <div class="info">
                NIT Delhi has started its academic session in 2010 with three undergraduate B.Tech degree programmes in Computer Science and Engineering, Electronics and Communication Engineering and Electrical and Electronics Engineering. The academic activities of NIT Delhi were initiated at NIT Warangal in year 2010 which later moved to a temporary campus at Dwarka, New Delhi in June 2012 and then shifted to IAMR Campus, Narela in February 2014. Currently, NIT Delhi is operating from its permanent campus at Plot No. FA7, Zone P1, GT Karnal Road, Delhi-110036, India (Google Maps Link: https://goo.gl/maps/6yVMs8nygsw3hCR36 )
            </div>
            <br>
            <div class="info">
                Fifty one acre land has been allotted for permanent campus of NIT Delhi on NH-44, GT Karnal Road, Delhi-110036. The Phase 1A works consisting of Mini Campus, Startup Centre and Admin Block has been completed and the Phase 1B works consisting of Academic Building, Staff Quarters, Hostel-800 seater and Director’s Residence are under construction.
            </div>
            <br>
            <div class="info">
                The Institute has secured a remarkable NIRF 51st rank in 2023 among 4000 engineering colleges in India. The highest package awarded to the student of NIT Delhi is Rs. 82 LPA in 2023 and the average package awarded to the students of NIT Delhi is Rs. 17.72 LPA.
            </div>

        </div>

        <div id="about1">ACADEMIC PROGRAMMES UNDERWAY AT NIT DELHI</div>
        <div id="info1">
            <div class="info1">
                Admission for B.Tech programmes is made on the basis of the performance in the Joint Entrance Examination (JEE) for the Indian Nationals. Admission to 50% of the seats is made amongst the students of Delhi & Chandigarh and the remaining 50% seats are filled on All India basis. Admission to the M.Tech Programmes  is made on the basis of performance in GATE (Graduate Aptitude Test in Engineering). M.Tech (SFS-Self Finance Scheme) Admissions are also offered. Admission to Ph.D. (Full Time & Part Time) are also invited half yearly.
            </div>
        </div>
    </div>


    <!-- Contact Us -->

    <center id="contactUsHidden" class="hidden">
        <div id="contactNav">
            <div id="contactNav1">Contact Us</div>
            </div>
    <div class="contactUsHidden" style="padding-top: 50px;">
        <table>
            <caption>CONTACT US</caption>
            <tr>
                <th colspan="2">NATIONAL INSTITUTE OF TECHNOLOGY DELHI</th>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    
                        National Institute of Technology
                                    <br>
                            Plot No. FA7,Zone P1,
                                    <br>
                        GT Karnal Road, Delhi-110036
                    
                </td>
            </tr>
            <tr>
                <td>Fax:</td>
                <td>+9111-27787503</td>
            </tr>
            <tr>
                <td>Working Hours:</td>
                <td>9.00 AM to 5.30 PM</td>
            </tr>
        </table>
    </div>

    <div class="contactUsHidden">
        <table>
            <tr>
                <th>Purpose</th>
                <th>Contact Person</th>
                <th>Contact Number</th>
                <th>Email Address</th>
            </tr>
            <tr>
                <td>Director Office</td>
                <td>PS to Director</td>
                <td>911133861005</td>
                <td>secretary@nitdelhi.ac.in</td>
            </tr>
            <tr>
                <td>Registrar Office</td>
                <td>PS to Registrar</td>
                <td>911133861007</td>
                <td>registraroffice@nitdelhi.ac.in</td>
            </tr>
            <tr>
                <td>Academic Matters (UG and PG)</td>
                <td>Academics Section</td>
                <td>911133861106/1107
                            <br>
                    +91-9267998783</td>
                <td>academics@nitdelhi.ac.in</td>
            </tr>
            <tr>
                <td>Academic Matters (Ph.D.)</td>
                <td>Office of Dean R&C</td>
                <td>911133861104	</td>
                <td>deanrcoffice@nitdelhi.ac.in</td>
            </tr>
            <tr>
                <td>Accounts Matters</td>
                <td>Office of Accounts</td>
                <td>911133861030/1031/
                            <br>
                    +91-9267998697</td>
                <td>ac@nitdelhi.ac.in</td>
            </tr>
        </table>
    </div>
</center>

<!-- Sign Up -->

<br><br><br><br><br><br>
<!-- To insert last update date -->
<footer id="footer">
        <p id="update" class="footer">Last updated: <span class="footer" id="lastUpdateDateTime"></span></p>
        
            <div id="copyright" class="footer">
            <p class="footer">This Website belongs to National Institute of Technology, Delhi</p>
                    <p class="footer">Copyright © 2021 - All Rights Reserved - NIT Delhi</p>
            </div>  
        
        <div id="icon" class="footer">
            <a href="#" class="icon"><i class="fa-brands fa-facebook" ></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-twitter" ></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-youtube" ></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-square-instagram" ></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin"></i></a>

        </div>
</footer>



    <script src="script.js"></script>
</body>
</html>