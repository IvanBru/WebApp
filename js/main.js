window.onscroll = function showHeader() {
    var header = document.querySelector('.header');
    if(window.pageYOffset > 200){
        header.classList.add('header_fixed');
    } else{
        header.classList.remove('header_fixed');
    }
}

document.getElementById('change').onclick = function() {
  document.getElementById('nav').classList.toggle('navbar-dark');
  document.getElementById('nav').classList.toggle('bg-dark');
  document.getElementById('footer').classList.toggle('bg-dark');
  document.getElementById('main').classList.toggle('text-light');
  document.getElementById('container').classList.toggle('bg-dark');
  document.getElementById('table').classList.toggle('table-dark');
  document.getElementById('myfilms').classList.toggle('dark');
  document.getElementById('Model3d').classList.toggle('dark');
   var nav = document.getElementById('change');
	switch (nav.innerHTML) {
	case 'Dark': nav.innerHTML = 'Light'; break;
	case 'Light': nav.innerHTML = 'Dark'; break;
}
}