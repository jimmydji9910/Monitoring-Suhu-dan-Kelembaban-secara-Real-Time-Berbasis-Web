// Ambil data suhu dan kelembaban dari server PHP
function getData() {
    fetch('data.php')
    .then(response => response.json())
    .then(data => {
        document.getElementById('suhu').innerText = data.suhu;
        document.getElementById('kelembaban').innerText = data.kelembaban;
    })
    .catch(error => console.error('Error:', error));
}

// Panggil fungsi getData setiap 5 detik
setInterval(getData, 5000);
