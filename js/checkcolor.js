var select = document.getElementById('box1');
var select1 = document.getElementById('box2');
var select2 = document.getElementById('box3');
var select3 = document.getElementById('box4');

select.addEventListener('change', () => {
    if (select.value) {                                              
        document.getElementById("userSelect").style.backgroundColor = select.value;
        if(select.value == "black"){
        document.getElementById("cl12").value = 0;
        }else if(select.value == "brown"){
        document.getElementById("cl12").value = 1;
        }
        else if(select.value == "red"){
        document.getElementById("cl12").value = 2;
        } else if(select.value == "orange"){
        document.getElementById("cl12").value = 3;
        } else if(select.value == "yellow"){
        document.getElementById("cl12").value = 4;
        } else if(select.value == "green"){
        document.getElementById("cl12").value = 5;
        }
        else if(select.value == "blue"){
        document.getElementById("cl12").value = 6;
        }else if(select.value == "purple"){
        document.getElementById("cl12").value = 7;
        }
        else if(select.value == "gray"){
        document.getElementById("cl12").value = 8;
        }
        else if(select.value == "white"){
        document.getElementById("cl12").value = 9;
        }
    }

})
select1.addEventListener('change', () => {
    if (select1.value) {
        document.getElementById("userSelect1").style.backgroundColor = select1.value;
        if(select1.value == "black"){
        document.getElementById("cl13").value = 0;
        }else if(select1.value == "brown"){
        document.getElementById("cl13").value = 1;
        }
        else if(select1.value == "red"){
        document.getElementById("cl13").value = 2;
        } else if(select1.value == "orange"){
        document.getElementById("cl13").value = 3;
        } else if(select1.value == "yellow"){
        document.getElementById("cl13").value = 4;
        } else if(select1.value == "green"){
        document.getElementById("cl13").value = 5;
        }
        else if(select1.value == "blue"){
        document.getElementById("cl13").value = 6;
        }else if(select1.value == "purple"){
        document.getElementById("cl13").value = 7;
        }
        else if(select1.value == "gray"){
        document.getElementById("cl13").value = 8;
        }
        else if(select1.value == "white"){
        document.getElementById("cl13").value = 9;
        }
    }


})

select2.addEventListener('change', () => {
    if (select2.value) {
        document.getElementById("userSelect2").style.backgroundColor = select2.value;
        if(select2.value == "black"){
        document.getElementById("cl14").value = 0;
        }else if(select2.value == "brown"){
        document.getElementById("cl14").value = Math.pow(1,1);
        }
        else if(select2.value == "red"){
        document.getElementById("cl14").value =  Math.pow(10,2);
        } else if(select2.value == "orange"){
        document.getElementById("cl14").value =  Math.pow(10,3);
        } else if(select2.value == "yellow"){
        document.getElementById("cl14").value =  Math.pow(10,4);
        } else if(select2.value == "green"){
        document.getElementById("cl14").value =  Math.pow(10,5);
        }
        else if(select2.value == "blue"){
        document.getElementById("cl14").value =  Math.pow(10,6);
        }else if(select2.value == "purple"){
        document.getElementById("cl14").value =  Math.pow(10,7);
        }
        else if(select2.value == "gray"){
        document.getElementById("cl14").value =  Math.pow(10,8);
        }
        else if(select2.value == "white"){
        document.getElementById("cl14").value =  Math.pow(10,9);
        }
    }

})

select3.addEventListener('change', () => {
    if (select3.value) {
        document.getElementById("userSelect3").style.backgroundColor = select3.value;
        if(select3.value == "black"){
        document.getElementById("cl15").value = 0 ;
        }else if(select3.value == "brown"){
        document.getElementById("cl15").value = 1+"%";
        }
        else if(select3.value == "red"){
        document.getElementById("cl15").value =  2+"%";
        } else if(select3.value == "orange"){
        document.getElementById("cl15").value =  3+"%";
        } else if(select3.value == "yellow"){
        document.getElementById("cl15").value =  4+"%";
        } else if(select3.value == "green"){
        document.getElementById("cl15").value =  0.5+"%";
        }
        else if(select3.value == "blue"){
        document.getElementById("cl15").value =  0.25+"%";                
       }else if(select2.value == "purple"){
        document.getElementById("cl15").value =  0.1+"%";
        }
        else if(select2.value == "gray"){
        document.getElementById("cl15").value =  0.05+"%";
        }
        else if(select2.value == "gold"){
        document.getElementById("cl15").value =  5+"%";
        }
    }
})

    