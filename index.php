<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background: #040d15;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
        display: flex;
    }

    button {

        background: linear-gradient(90deg, #0162c8, #55e7fc);
        padding: 12px 36px;
        margin: 10px 0;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 18px;
        Letter-spacing: 2px;
        border-radius: 40px;
    }

    button:focus {
        border-color: dodgerBlue;
        box-shadow: 0 0 8px 0 dodgerBlue;

    }
    #B{
        position: relative;
        top: 70px;
        left: -350px;
    }
    #F{
        position: relative;
        top: -70px;
        left: 330px;

    }
    #R{
        position: relative;
        right: -20px;
        
    }
    #L{

        position: relative;
        right: 20px;
    }
    #S{
        background: linear-gradient(90deg, #FEB692, #EA5455);
    }
</style>

<body>

    <form action="View.php" method="get">
        <button name="Front" id="F">forward ↑</button>
        <button name="Left" id="L"> ← Left</button>
        <button name="Stop" id="S">Stop</button>
        <button name="Right" id="R">Right →</button>
        <button name="Back" id="B">backward ↓</button>
        
    </form>
    

</body>

</html>