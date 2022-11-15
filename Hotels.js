// destination()
function destination() {
  if (document.getElementById('search').value == "Mumbai" || document.getElementById('search').value == "mumbai" || document.getElementById('search').value == "bombay" || document.getElementById('search').value == "Bombay") {
    let delhi = document.getElementById("hori-delhi")
    let mum = document.getElementById("hori-mumbai")
    let reg = document.getElementById("hotel-region");
    reg.innerHTML = "Hotels in Mumbai (Mumbai ,India)";
    delhi.style.display = "none";
    mum.style.display = "block";
    console.log("Hotels")
  }

  else if (document.getElementById('search').value == "Delhi" || document.getElementById('search').value == "delhi") {
    let delhi = document.getElementById("hori-delhi")
    let mum = document.getElementById("hori-mumbai")
    let reg = document.getElementById("hotel-region");
    reg.innerHTML = "Hotels in Delhi (Delhi ,India)";
    mum.style.display = "none";
    delhi.style.display = "block";
    console.log("Hotels")
  }
}