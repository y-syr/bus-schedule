function setStation(station, target) {
    document.getElementById(target).value = station;
}

function swapStations() {
    const departure = document.getElementById('departure').value;
    const arrival = document.getElementById('arrival').value;
    document.getElementById('departure').value = arrival;
    document.getElementById('arrival').value = departure;
}

function submitForm() {
    const departure = encodeURIComponent(document.getElementById('departure').value);
    const arrival = encodeURIComponent(document.getElementById('arrival').value);
    const currentDate = new Date();
    const formattedDate = `${currentDate.getFullYear()}${('0' + (currentDate.getMonth() + 1)).slice(-2)}${('0' + currentDate.getDate()).slice(-2)}${('0' + currentDate.getHours()).slice(-2)}${('0' + currentDate.getMinutes()).slice(-2)}`;
    const baseUrl = "https://transfer.navitime.biz/tokyubus/pc/extif/TransferIF";
    const url = `${baseUrl}?orvName=${departure}&dnvName=${arrival}&date=${formattedDate}&basis=1&sort=2&wSpeed=normal`;
    window.location.href = url;
}
