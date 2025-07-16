<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload & Download</title>
    <link rel="stylesheet" href="uploadStyle.css">

    <style>
        #uploadPdf{
        background-color: #e7e6f0;
        height: 50px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 40px;;
    }

    #uploadPdf1{
        display: inline-block;
        background-color:#e7e6f0;
        font-size: 30px;
        font-weight: bolder;
        animation: move 5s ease-in 0s infinite alternate;
        align-self: center;
    }

        #submit, #remove{
            font-weight: bold;
            font-style: italic;
            width:150px;
            margin: 10px 0px 10px 0px;
        }

        #submit:hover,#remove:hover{
            background-color: rgb(52, 144, 157);
        }

        #uploadSelectHeading{
            margin-top: 20px;
            margin-bottom: 3px;
        }

        #submit{
            margin-top: 20px;
        }

        #uploadContainer{
            margin-top: 20px;
        }
    </style>
    
</head>
<body id="uploadBody">

    <div id="uploadPdf">
        <div id="uploadPdf1">You can also upload PDF file</div>
    </div>
    <div id="uploadContainer">
        <h1 class="uploadContainer">Upload PDF File</h1>
        <form id="form" class="uploadContainer" method="post" enctype="multipart/form-data">
            <label for="uploadSelect" class="form">
                <div id="uploadSelectBox">
                <h3 id="uploadSelectHeading">Select PDF File</h3>
                
                <input type="file" name="pdfFile" class="form" id="uploadSelect" style="position: relative; left: 40px; font-weight: bold; font-style:italic;">
                
            </div>
            </label>
            
            <div id="button">
            <button type="submit" name="submit" value="submit" class="form" id="submit">Upload File</button>
            
            <button type="reset" name="remove" value="remove" class="form" id="remove">Reset</button>
        </div>
        </form>
    </div>
</body>
</html>