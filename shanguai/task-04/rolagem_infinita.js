const xhr = new XMLHttpRequest();
const base_conteudo = document.getElementsByClassName('conteudos')[0]
let page = 1;
let carregando = false;
window.addEventListener('scroll', isScrollEnd);


function loadData(){
    if(carregando) return;
    carregando = true;

    xhr.open('GET', `api.php?page=${page}`);
    xhr.send();
}

loadData();

xhr.onreadystatechange = ()=>{
    
    if(xhr.readyState == 4){
        page++;
        tratarDados(xhr.response);
        carregando = false;
        
    }


}
function tratarDados(response){
    let json_response = JSON.parse(response);

    console.log(response)
    json_response.forEach(v => {
        showData(v);
    });
}

function showData(data){
    let conteudo = document.createElement('div');
    conteudo.classList.add("conteudo");
    
    conteudo.innerHTML = `
        <p>${data.name}</p>
        <p>${data.age}</p>
        <p>${data.email}</p>
    `;
    base_conteudo.appendChild(conteudo);
}

function isScrollEnd(){
    let lastElementY = base_conteudo.lastChild.offsetTop;
    let scroolY = window.scrollY;
    let heightScreen = window.innerHeight;

    if(lastElementY <= scroolY + heightScreen ) {
        loadData();
    }
}