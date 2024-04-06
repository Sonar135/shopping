

let value=1;

$(document).ready(()=>{
    $(".inc").click(()=>{
        value+=1;
        console.log(value);
        $("#input").val(value);
    })

    $(".dec").click(()=>{

        if(value>1){
            value=value-1;
            console.log(value);
            $("#input").val(value);
        }
      
    })
})