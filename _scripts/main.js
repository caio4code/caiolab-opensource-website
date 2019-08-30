function corpyright(){
var text = document.getElementById("corpyright");
var data = new Date();
var year = data.getFullYear();


text.innerHTML = `Corpyright &copy${year} Caio César`;
}


function nabeka(){
    var text = document.getElementById("sub-footer-core");
    var data = new Date();
    var year = data.getFullYear();
    
    
    text.innerHTML = `Corpyright &copy${year} Nabeka | formas de pagamento: <i class="fab fa-cc-paypal"></i>`;
}