<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
    </style>
</head>

<body>
<div style="margin-left:400px">
    <div style="border:1px solid;width: 600px;height: 500px;">
        <div id="msgArea" style="width:100%;height: 100%;text-align:start;resize: none;font-family: 微软雅黑;font-size: 20px;overflow-y: scroll"></div>
    </div>
    <div style="border:1px solid;width: 600px;height: 200px;">
        <div style="width:100%;height: 100%;">
            <textarea id="userMsg" style="width:100%;height: 100%;text-align:start;resize: none;font-family: 微软雅黑;font-size: 20px;"></textarea>
        </div>
    </div>
    <div style="border:1px solid;width: 600px;height: 25px;">
        <button style="float: right;" onclick="sendMsg()">发送</button>
    </div>
</div>
</body>

</html>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script>
    var ws;
    $(function(){
        link();
    })

    function link () {
        ws = new WebSocket("ws://swoole.cddong.top:8500");//连接服务器
        ws.onopen = function(event){
            console.log(event);
            alert('连接了');
        };
        ws.onmessage = function (event) {
            var msg = "<p>"+event.data+"</p>";
            $("#msgArea").append(msg);
        }
        ws.onclose = function(event){alert("已经与服务器断开连接\r\n当前连接状态："+this.readyState);};

        ws.onerror = function(event){alert("WebSocket异常！");};
    }

    function sendMsg(){
        var msg = $("#userMsg").val();
        ws.send(msg);
    }
</script>
