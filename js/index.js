(function(){

    $(".btn_acceso").click(function(e){
        e.preventDefault()
       let nomb =$("#nickname").val()
       let clave=$("#clave").val()
       $.ajax({
            type:"POST",
            url:"./php/validar.php",
            data:{ nomb,clave},
            dataType:"JSON"
       }).done(function(resp){

        if(resp.success){
         alert(resp.mensaje)
            window.location='./dashboard.php'
        } else {
            alert(resp.mensaje)
        }
            
      
        })


    })

$(".btn-registro").click(function(){
    $("#fregistro").removeClass('d-none')
    $(".loginve").addClass("d-none")

})

$(".btn_registro").click(function(e){
    e.preventDefault()
let cedula= $("#cedula").val()
let nombre= $("#nombre").val()
let apellido= $("#apellido").val()
let telefono= $("#celular").val()
let nick= $("#nick").val()
let clave= $("#miclave").val()


        $.ajax({
            type:'POST',
            url:"./php/registro.php",
            data:{ cedula, nombre,apellido,telefono, nick, clave},
            dataType:'Json'
        }).done(function(resp){
alert(resp.mensaje)
    $(".loginve").removeClass('d-none')
    $("#fregistro").addClass("d-none")


        })
})


})();