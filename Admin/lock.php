<html>
    <head>
        <title>platform for learning from disasters </title>
        <style>
            body{
                background-image:url("../images/lock.jpg")
            }
          
           .clock {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        color: #17D4FE;
        font-size: 60px;
        font-family: Orbitron;
        letter-spacing: 7px;
        background-color:brown;
        padding:20px;
        border-radius:20px;
}
#unlock{
    position: absolute;
        top: 70%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        color: #17D4FE;
        font-size: 40px;
        font-family: Orbitron;
        letter-spacing: 7px;
        background-color:brown;
        padding:20px;
        border-radius:50px;
        border:10px groove gold;
}
        </style>
        <script>
            function unlock(){
                prompt("Enter the Password");
            }
            function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}
showTime();

            </script>
    </head>
    <body onload="showTime()">
        
        <div id="MyClockDisplay" class="clock" ></div>
    <center><button id="unlock" onclick="unlock()">Unlock</button></center>
    </body>
    
</html>
