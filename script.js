function clearAll() {
    const parent1=document.querySelector('.single-pro-image');
    const parent2=document.querySelector('#pro_title');
    const parent3=document.querySelector('#cost');
    const parent4=document.querySelector('#text');
  
    parent1.innerHTML='';
    parent2.innerHTML='';
    parent3.innerHTML='';
    parent4.innerHTML='';
}
function showIMG(url1,title,cost1,text1) {
        clearAll();
        const parenta=document.querySelector('.single-pro-image');
        const parentb=document.querySelector('#pro_title');
        const parentc=document.querySelector('#cost');
        const parentd=document.querySelector('#text');
        const newi=document.createElement('img');
        newi.setAttribute('src',url1);
        //newi.setAttribute('id',"MainImg");
        parenta.appendChild(newi);
        parentb.innerHTML=title;
        parentc.innerHTML=cost1;
        parentd.innerHTML=text1;
        }