formulario.addEventListener("submit",(evento)=>{
evento.preventDefault()
const datos = new FormData(formulario)
fetch("guardar.php",{
     method:"Post",
     body:datos 
}).then(
    cabecera => {
        console.log("ver que tiene: ",cabecera);
        return cabecera.json()
    }
).then(
    datos => {
        console.log(datos);
       
        }

        
    )
})