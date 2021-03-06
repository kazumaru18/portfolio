<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "utf-8">
    <title>現在時刻</title>
</head>

<body>
    <p id="realtime"></p>
    
<script>
    function twoDigit(num) {
        let ret;
        if( num < 10 ) 
            ret = "0" + num; 
        else 
            ret = num; 
        return ret;
    }
    function showClock() {
        let nowTime = new Date();
        let nowHour = twoDigit( nowTime.getHours() );
        let nowMin  = twoDigit( nowTime.getMinutes() );
        let nowSec  = twoDigit( nowTime.getSeconds() );
        let msg = "現在時刻：" + nowHour + ":" + nowMin + ":" + nowSec;
        document.getElementById("realtime").innerHTML = msg;
    }
    setInterval('showClock()',1000);
</script>

</body>
</html>