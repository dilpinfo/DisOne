
<?php
header('Content-Type: charset=ISO 8859-1');
// inclusion de la conexion
//$conn = mysqli_connect("localhost", "root", "", "virtualTrunk") or die("Database Error");
include ('conexion.php');
// usuario ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//buscar dato de la tabla chatbot
$check_data = "SELECT Resp FROM chatbot 
Inner join consulta on chatbot.idconsulta=consulta.idconsulta
inner join respuestas on chatbot.idRespuestas=respuestas.idRespuestas
WHERE consulta.consult LIKE '%$getMesg%'";
//

//$check_data = "SELECT Respuesta FROM chatbot WHERE Consulta LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// encontramos consultas de la fila
if(mysqli_num_rows($run_query) > 0){
    //resultado de consulta
    $fetch_data = mysqli_fetch_assoc($run_query);
    //respuestas a traves de ajax
    $replay = $fetch_data['Resp'];
    echo $replay;
}else{
    echo "Lo siento, no comprendo tu pregunta";
}

?>