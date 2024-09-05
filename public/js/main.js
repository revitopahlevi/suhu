const url = 'http://127.0.0.1:8000/api/data'
async function data() {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        const data = await response.json();
        document.getElementById('temp1').innerText = data.suhu1
        document.getElementById('temp2').innerText = data.suhu2
        document.getElementById('relayStatus').innerText = data.Relay
    } catch (error) {
        console.error('GAGAL', error);
    }
    
}

setInterval(function() {
    data()
}, 2000);