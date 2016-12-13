alert("Bienvenido a mi pagina");

if(confirm("Desea Interactual con la pagina?")){
do{
    var exit = false;
    var option = prompt("Seleccione una opcion\n" +
        "1: Tablas de Multiplicar\n" +
        "2: Escribir Tu Nombre")
    switch (option){
        case '1':
            for(var i=1;i<=12;i++){
                var k=1
                while(k<=12){
                    document.write(i+"X"+k+"="+(i*k)+"<br>");
                    k++;
                }
                document.write("<hr>");
            }
            exit = true;
            break;
        case '2':
            var name = prompt("Escriba su nombre");
            document.write("<h1>"+name+"<h1>");
            exit = true;
            break;
        default :
            alert("SELECCION FUERA DE RANGO");
    }

    if(exit) break;
}while(true);
}