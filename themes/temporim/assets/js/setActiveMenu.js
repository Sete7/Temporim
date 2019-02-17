/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var elements = document.getElementsByClassName("child");
for(var i = 0;i < elements.length;i++){
    elements[i].onclick = function(){
        var el = elements[0];
        while(el){
            if(el.tagName === "A"){
                el.classList.remove("ativation");
            }
            el = el.nextSibling;
        }
        this.classList.add("ativation");
    };
}

