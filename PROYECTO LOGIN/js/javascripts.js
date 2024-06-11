/*
document.getElementById("pOpcion").addEventListener("click" ,function(){
    var primeraOpcion = ("Software Development");
    
    //alert(primeraOpcion);
    
    fetch('summary.php',{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json', 
        },
        body: JSON.stringify({ primeraOpcion: primeraOpcion }),
    })

    .then(response => response.text())
    .then(data => {
        // Manejar la respuesta del servidor si es necesario
        console.log(data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
    
})

document.getElementById("sOpcion").addEventListener("click" ,function(){
    var segundaOpcion = ("User Experience");

    //alert(segundaOpcion);
    
    fetch('summary.php',{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json', 
        },
        body: JSON.stringify({ segundaOpcion: segundaOpcion }),
    })

    .then(response => response.text())
    .then(data => {
        // Manejar la respuesta del servidor si es necesario
        console.log(data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
    

})

document.getElementById("tOpcion").addEventListener("click" ,function(){
    var terceraOpcion = ("Graphic Design");

    //alert(terceraOpcion);
    
    fetch('summary.php',{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json', 
        },
        body: JSON.stringify({ terceraOpcion: terceraOpcion }),
    })

    .then(response => response.text())
    .then(data => {
        // Manejar la respuesta del servidor si es necesario
        console.log(data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });
    
})



