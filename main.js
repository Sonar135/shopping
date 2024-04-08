

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





    $("#apply").prop("disabled", true); // Initially disable the sign-up button

$("#from, #to").on("input", function() { // Check all text input fields, textarea, and date input for changes
    var allFilled = true;

 
 


 

    $("#from, #to").each(function() {
        if ($(this).val().trim() === "") { // Use trim() to remove whitespace
            allFilled = false;
            return false; 
            // Exit the loop early if any input field, textarea, or date input is empty
        }  
    });

   
  
    
    if (allFilled) {
        $("#apply").prop("disabled", false); // Enable the sign-up button if all input fields, textarea, and date input have values
    } else {
        $("#apply").prop("disabled", true); // Disable the sign-up button if any input field, textarea, or date input is empty
    }
});
})