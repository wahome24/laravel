$(document).ready(function () {
    $(".validation").validate();
    $(".validator").validate();
    $(".valid").validate();
})

$(".mpesa").on('submit',function(){
    $.ajax({
        method:'POST',
        url: "mpesa",
        data: $(this).serialize(),
        datatype: "json",
        success: function(result){
            alert("success");
        }
    })
})