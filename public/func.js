import './bootstrap';
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}

// file kosong untuk mencegah 404 pada script src (tambahkan fungsi JS jika diperlukan)

fetch('footer.html')
  .then(r => r.text())
  .then(html => document.body.insertAdjacentHTML('beforeend', html))
  .catch(() => console.warn('footer load failed'));