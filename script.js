let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{

  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');

}

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if(window.scrollY > 60){
    document.querySelector('#scroll-top').classList.add('active');
  }else{
    document.querySelector('#scroll-top').classList.remove('active');
  }

}

function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
  setInterval(loader, 3000);
}

window.onload = fadeOut();

function sendViaWhatsApp() {
  // get the form data
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var number = document.getElementById("number").value;
  var foodname = document.getElementById("foodname").value;
  var quantity = document.getElementById("quantity").value;
  var address = document.getElementById("address").value;
  
  var url = "https://wa.me/233547736844?text="
  + "*Name:* " + name + "%0a%0a"
  + "*Email:* " + email + "%0a%0a"
  + "*Number:* " + number + "%0a%0a"
  + "*Food Name:* " + foodname + "%0a%0a"
  + "*Quantity:* " + quantity + "%0a%0a"
  + "*Delivery Address:* " + address;

  // open the WhatsApp url on a new tab
  window.open(url, '_blank').focus();
}