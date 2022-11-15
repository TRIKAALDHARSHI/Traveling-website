function navdrop() {
    if (document.getElementById('nav-ol').style.display == "block") {
        document.getElementById('nav-ol').style.display = "none";
    }
    else {
        document.getElementById('nav-ol').style.display = "block"
    }
}


function Register() {
    document.getElementById('login').style.display = "none";
    document.getElementById('register').style.display = "block";
}

function FAQ1(num) {
    let a = document.getElementsByClassName('faq-info');
    for (let y of a) {
        y.style.display = "none";
    }
    if (a[num].style.display == "block") {
        a[num].style.display = "none";
    }
    else {
        a[num].style.display = "block";
    }
} 
