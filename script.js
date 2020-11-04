const btnCol = document.querySelector('.btnCol');
const footer = document.querySelector('footer');

const colors = ["green","red","black","white"];
btnCol.addEventListener('click', change);

function change(){
    let random = Math.floor(Math.random()*colors.length);
    footer.style.backgroundColor = colors[random];
}
