<span style="font-size: xx-large;">&nbsp;&nbsp;Vista de proyectos por Estado :<span style="font-weight: bolder"> <?php echo $stateLabel; ?></span></span>
<br/>
<script>
    function mostrarAvances(id_tarea){
        loadAjaxContent('index.php?app=hormiga&mod=proyectos&act=listarAvancesXtarea&idTarea='+id_tarea,'window');
        euiOpenWindow('window');
    }
</script>

<table class="crudTable">
    <thead>
        <tr>
            <th>-</th>
            <th>Prioridad<br>Proyecto</th>
            <th>Proyecto</th>
            <th>Comentarios<br>Proyecto</th>
            <th>Prioridad<br>Tarea</th>
            <th>Tarea</th>
            <th>Comentarios<br>Tarea</th>
            <th>Usuarios</th>
            <th>Etiquetas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $proyectos AS $proyecto): ?>
        <tr>
            <td><button class="eui_button" title="Avances" onclick="mostrarAvances(<?php echo $proyecto['id_tarea']; ?>)">A</button></td>
            <td><?php echo $proyecto['prioridad_proyecto']; ?></td>
            <td><b><?php echo $proyecto['proyecto']; ?></b></td>
            <td><?php echo $proyecto['comentarios_proyecto']; ?></td>
            <td><?php echo $proyecto['prioridad_tarea']; ?></td>
            <td><b><?php echo $proyecto['tarea']; ?></b></td>
            <td><?php echo $proyecto['comentarios_tarea']; ?></td>
            <td>
                <?php  
                    foreach ($usuariosProyectos[$proyecto['id']] as $usuario) {
                        if (in_array($usuario, $usuariosTareas[$proyecto['id_tarea']])) {
                            echo "<b>$usuario</b><br>";
                        }else{
                            echo "$usuario<br>";
                        }
                    }
                ?>
            </td>
            <td>
                <?php  
                    foreach ($etiquetasProyectos[$proyecto['id']] as $etiqueta) {
                        echo "$etiqueta<br>";
                    }
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!--Redefinir usando EUI-->

<script>
    $(document).ready(function(){
                $(".window").kendoWindow({
                    actions: ["Maximize", "Minimize", "Close"],
                    draggable: true,
                    position: {
                        top: 100,
                        left: 100
                    },
//                    modal: true,
//                    height: "300px",
//                    width: "500px"
//                    pinned: false,
                    resizable: true,
                    title: "-",
                });

    });


</script>

<div class='window' id='window'></div>