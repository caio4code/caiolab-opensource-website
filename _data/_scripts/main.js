function corpyright(){
var text = document.getElementById("corpyright");
var data = new Date();
var year = data.getFullYear();


text.innerHTML = `Corpyright &copy${year} Caio César`;
}