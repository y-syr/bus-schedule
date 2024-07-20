<!DOCTYPE html>
<html>
<head>
    <title>バス時刻表検索</title>
    <meta name="viewport" content="width=devuce-width, initial-scale=1.0">
    <script>
        function setStation(station, target) {
            document.getElementById(target).value = station;
        }

        function swapStations() {
            const departure = document.getElementById('departure').value;
            const arrival   = document.getElementById('arrival').value;
            document.getElementById('departure').value = arrival;
            document.getElementById('arrival').value = departure;
        }

        function submitForm() {
            const departure         = encodeURIComponent(document.getElementById('departure').value);
            const arrival           = encodeURIComponent(document.getElementById('arrival').value);
            const currentDate       = new Date();
            const formattedDate     = `${currentDate.getFullYear()}${('0' + (currentDate.getMonth() + 1)).slice(-2)}${('0' + currentDate.getDate()).slice(-2)}${('0' + currentDate.getHours()).slice(-2)}${('0' + currentDate.getMinutes()).slice(-2)}`;
            const baseUrl           = "https://transfer.navitime.biz/tokyubus/pc/extif/TransferIF";
            const url               = `${baseUrl}?orvName=${departure}&dnvName=${arrival}&date=${formattedDate}&basis=1&sort=2&wSpeed=normal`;
            window.location.href    = url;
            }
    </script>
</head>
<body>
        出発地: <input type="text" id="departure" name="departure" value="庚申塚" required><br>
        到着地: <input type="text" id="arrival" name="arrival" value="北八朔公園入口" required><br>
        <button type="button" onclick="swapStations()">出発地と到着地を入れ替える</button><br><br>

        <button type="button" onclick="setStation('庚申塚', 'departure')">庚申塚を出発地に設定</button>
        <button type="button" onclick="setStation('北八朔公園入口', 'departure')">北八朔公園入口を出発地に設定</button>
        <button type="button" onclick="setStation('中山駅北口', 'departure')">中山駅北口を出発地に設定</button>
        <button type="button" onclick="setStation('藤が丘', 'departure')">藤が丘を出発地に設定</button><br><br>

        <button type="button" onclick="setStation('庚申塚', 'arrival')">庚申塚を到着地に設定</button>
        <button type="button" onclick="setStation('北八朔公園入口', 'arrival')">北八朔公園入口を到着地に設定</button>
        <button type="button" onclick="setStation('中山駅北口', 'arrival')">中山駅北口を到着地に設定</button>
        <button type="button" onclick="setStation('藤が丘', 'arrival')">藤が丘を到着地に設定</button><br><br>

        <button type="button" onclick="submitForm()">バス時刻表を検索</button>
    </form>
</body>
</html>
