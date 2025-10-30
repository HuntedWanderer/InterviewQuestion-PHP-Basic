<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src = verify_ajax.js></script>
</head>

<body>
    <div id="outer-div">
        <div id = "username">
        <h4>User Name: </h4>
        <input name = "username"></input>
        </div>
        <br>
        <div id = "submit-btn">
        <button id="submit">Submit</button>
        </div>
        <br>
        <div id="messageDiv"></div>
    </div>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        height:100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h4 {
        margin-bottom: 10px;
        margin-right: 10px;
    }

    input {
        margin-right: 10px;
        border-radius: 5px;
    }

    #outer-div{
        display:block;
        border-radius: 5px;
        height: 25vh;
        width: 30vw;
        padding: 20px;
        background-color:lightgrey;
    }

    #username{
        display: flex;
        margin-left: 10%;
    }

    #submit-btn{
        margin-left: 45%;
    }

    button {
        padding: 8px 16px;
        border-radius:5px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    #messageDiv{
        margin-left:20%;
        font-weight: bold;
    }

    .error{
        color: red;
    }

    .verified{
        color: green;
    }

</style>