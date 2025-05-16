<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1 de sweetAlert.</title>

</head>

<body>

<button id="btn">SweetAlert</button>
    
<script src="js/sweetAlert.js"></script>

<script>

const btnSweetAlert = document.querySelector('#btn');

btnSweetAlert.addEventListener('click', function () {
    
    Swal.fire({
    title: "Muito de bom!",
    text: "Click neste botão!",
    icon: "success",
    showCancelButton: true

}). then((result) => {

    if (result.isDismissed) {
        
    }else{

        if (result.isConfirmed) {
            
            window.location.href = "teste2.php";
        }
    }

});

})

</script>
</body>

</html>