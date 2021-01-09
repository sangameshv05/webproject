var count=10;

setInterval(function(){
    count--;
    if (count>=0)
        document.getElementById('time').innerHTML=count;

    if(count==0){
        document.getElementById('time').innerHTML='completed';
    }
},1000)