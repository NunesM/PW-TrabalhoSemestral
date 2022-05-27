

function getPage(page){
        //Ajax
    
    //criamos um objecto request

    var request = new XMLHttpRequest();
    
    //usando controlo de erros

    request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
        document.getElementById('views').innerHTML = this.responseText;
        } else{
            //document.getElementById('caixa').innerHTML = 'Tente mais tarde';  
            //alert('Ocorreu um erro, Tente mais tarde');
            }
    }
               
    // chamar a actualizacao - html
    request.open('GET', page, true);
    request.send();

}



function getCrentes(page){
    //Ajax

//criamos um objecto request

var request = new XMLHttpRequest();

//usando controlo de erros

request.onreadystatechange = function(){
if(request.readyState == 4 && request.status == 200){
    document.getElementById('crentesView').innerHTML = this.responseText;
    } else{
        //document.getElementById('caixa').innerHTML = 'Tente mais tarde';  
        //alert('Ocorreu um erro, Tente mais tarde');
        }
}
           
// chamar a actualizacao - html
request.open('GET', page, true);
request.send();

}
