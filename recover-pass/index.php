<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forget-pass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            font-family:roboto;
        }
        .hdr_p{
            font-size:14.5px;
            color:#4C5561;
            text-align:center;
        }
        .psignup{
            font-size:14px;
            color:#4C5561;
            text-align:left; 
            margin-left:5px;
        }
        h1{
            color:#6E61BB;
            padding:5%;
            position:relative;
            left:13%;
            top:10px;
      
        }
        span{
            border-top:0.5px solid #E7E8EC;
            padding-left:250px;
            position:relative;
            top:20px;
            left:14.5%;
        }
        a{
            text-decoration:none;
            font-family:roboto;
            color:#8F13E1;
            font-size:13px;
        }
    
        a:hover{
            text-decoration:none;
            border-bottom:none;
            color:#4C5561;
        }
       input{
        border:0.5px solid #D6DADC;
        color:#4C5561;
        font-family:roboto;
        padding:2.5%;
        border-radius:6px;
        font-size:14px;
        margin-bottom:10px;
    }
    input:hover{
        border:0.5px solid #7B98B8;
    }
    button{
        border:none;
        color:#F7F7F7;
        padding:2.5%;
        background:#9FAEDC;
        border-radius:4px;
        margin-top:2.5%;
        margin-left:4px;

    }
    button:hover{
        box-shadow: 0px 0px 15px 4px rgba(0, 0, 0,0.1);
    }
    .card{
        border-radius:8px;
        top:80px;
        position:relative;
        left:20%;
        width:350px;
        box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
    }
    form{
        width:350px;
        position:relative;
left:24%;
    }
    </style>

</head>
<body>
    <div class='card'>
        <h1>Lost password?</h1>
        <p class='hdr_p'>You can recover it here</p>
        <form>
           <input placeholder='Username' type='txt'>
            <input placeholder='Email' type='email'>
            <button>Send me</button>
        </form>
        <span></span>
        <div style='display:flex; position:relative;left:15%;'>
            <p class='psignup'>Remember your Password</p>
            <a href='#' style='position:relative;left:2%; top:14px;'>LOGIN HERE</a>
        </div>
    </div>
</body>