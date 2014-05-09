$(document).ready(function(){


$(".src").keyup(function(){

    $("#deden").html("<div style='text-align: center;'><img src='"+$("#base").val()+"/Design/images/loading.gif' /></div>");
    $.ajax({
       type :   "POST",
       url  :  "Proses/cari.php",
       data :   "isi="+$(".src").val(),
       success : function(data){
            $("#deden").html(data);
       } 
    });
});

});
