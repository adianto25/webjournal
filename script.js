//fungsi waktu
function tampilWaktu() {
  var waktu = new Date();
  var bulan = waktu.getMonth() + 1;

  var tanggalLengkap =
    waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
  function formatDuaDigit(angka) {
    return angka < 10 ? "0" + angka : angka;
  }

  var jamLengkap =
    formatDuaDigit(waktu.getHours()) +
    ":" +
    formatDuaDigit(waktu.getMinutes()) +
    ":" +
    formatDuaDigit(waktu.getSeconds());

  document.getElementById("tanggal").innerHTML = tanggalLengkap;
  document.getElementById("jam").innerHTML = jamLengkap;
}

tampilWaktu();

setInterval(tampilWaktu, 1000);

//theme switcher
const tombolHitam = document.getElementById("tombolHitam");
const tombolMerah = document.getElementById("tombolMerah");

//tombol dark
tombolHitam.addEventListener("click", () => {
  document.body.classList.add("dark-mode");
});

//tombol light
tombolMerah.addEventListener("click", () => {
  document.body.classList.remove("dark-mode");
});
