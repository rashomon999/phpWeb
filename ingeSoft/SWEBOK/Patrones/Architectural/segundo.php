<?php

for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}
for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

$mostrar_solucion = '';
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';

    if ($mostrar_solucion === 'mostrar_solucion') {

        $respuesta_1  = 'adyacencia';
        $respuesta_2  = 'layer bridging';
        $respuesta_3  = 'portabilidad';
        $respuesta_4  = 'modificabilidad';
        $respuesta_5  = 'sidecar';
        $respuesta_6  = 'uso permitido';
        $respuesta_7  = 'segmentos';
        $respuesta_8  = 'por encima';
        $respuesta_9  = 'respuesta';
        $respuesta_10 = 'arriba';
        $respuesta_11 = 'callbacks';
        $respuesta_12 = 'aislada';
        $respuesta_13 = 'Muchos sistemas se construyen a partir de una coleccion de servicios distribuidos en multiples servidores';
        $respuesta_14 = 'servidores';
        $respuesta_15 = 'interoperaran';
        $respuesta_16 = 'disponibilidad';
        $respuesta_17 = 'naturaleza';
        $respuesta_18 = 'ubicacion';
        $respuesta_19 = 'dinamicamente';
        $respuesta_20 = 'broker separa a los usuarios de servicios';
        $respuesta_21 = 'clientes';
        $respuesta_22 = 'servidores';
        $respuesta_23 = 'insertando un intermediario';
        $respuesta_24 = 'broker';
        $respuesta_25 = 'interfaz de servicio';
        $respuesta_26 = 'reenvía';
        $respuesta_27 = 'resultado';
        $respuesta_28 = 'identidad';
        $respuesta_29 = 'ubicacion';
        $respuesta_30 = 'caracteristicas';
        $respuesta_31 = 'reemplazo';
        $respuesta_32 = 'broker';
        $respuesta_33 = 'proxies';
        $respuesta_34 = 'marshaling';
        $respuesta_35 = 'unmarshaling';
        $respuesta_36 = 'complejidad';
        $respuesta_37 = 'latencia';
        $respuesta_38 = 'seguridad';
        $respuesta_39 = 'cuello de botella';
        $respuesta_40 = 'broker';
        $respuesta_41 = 'tiempo de ejecucion';
        $respuesta_42 = 'clientes';
        $respuesta_43 = 'servidores';
        $respuesta_44 = 'Cliente';
        $respuesta_45 = 'solicitante de servicios';
        $respuesta_46 = 'Servidor';
        $respuesta_47 = 'proveedor de servicios';
        $respuesta_48 = 'intermediario';
        $respuesta_49 = 'servidor adecuado';
        $respuesta_50 = 'reenvía';
        $respuesta_51 = 'devuelve los resultados';
        $respuesta_52 = 'Client-side proxy';
        $respuesta_53 = 'comunicacion real';
        $respuesta_54 = 'marshaling';
        $respuesta_55 = 'Server-side proxy';
        $respuesta_56 = 'adjuncion';
        $respuesta_57 = 'clientes';
        $respuesta_58 = 'servidores';
        $respuesta_59 = 'brokers';
        $respuesta_60 = 'un broker';
        $respuesta_61 = 'proxy del lado del cliente';
        $respuesta_62 = 'un broker';
        $respuesta_63 = 'proxy del lado del servidor';
        $respuesta_64 = 'indirección';
        $respuesta_65 = 'latencia';
        $respuesta_66 = 'cuello de botella';
        $respuesta_67 = 'unico punto de falla';
        $respuesta_68 = 'complejidad';
        $respuesta_69 = 'seguridad';
        $respuesta_70 = 'probar';
        $respuesta_71 = 'modificabilidad';
        $respuesta_72 = 'disponibilidad';
        $respuesta_73 = 'rendimiento';
        $respuesta_74 = 'latencia';
        $respuesta_75 = 'de los proveedores de servicios';
         for ($i = 1; $i <= 80; $i++) {
            ${"verificar_$i"} = "correcto";
        }

    } else {

        $answers = [
            1  => 'adyacencia',
            2  => 'layer bridging',
            3  => 'portabilidad',
            4  => 'modificabilidad',
            5  => 'sidecar',
            6  => 'uso permitido',
            7  => 'segmentos',
            8  => 'por encima',
            9  => 'respuesta',
            10 => 'arriba',
            11 => 'callbacks',
            12 => 'aislada',
            13 => 'Muchos sistemas se construyen a partir de una coleccion de servicios distribuidos en multiples servidores',
            14 => 'servidores',
            15 => 'interoperaran',
            16 => 'disponibilidad',
            17 => 'naturaleza',
            18 => 'ubicacion',
            19 => 'dinamicamente',
            20 => 'broker separa a los usuarios de servicios',
            21 => 'clientes',
            22 => 'servidores',
            23 => 'insertando un intermediario',
            24 => 'broker',
            25 => 'interfaz de servicio',
            26 => 'reenvía',
            27 => 'resultado',
            28 => 'identidad',
            29 => 'ubicacion',
            30 => 'caracteristicas',
            31 => 'reemplazo',
            32 => 'broker',
            33 => 'proxies',
            34 => 'marshaling',
            35 => 'unmarshaling',
            36 => 'complejidad',
            37 => 'latencia',
            38 => 'seguridad',
            39 => 'cuello de botella',
            40 => 'broker',
            41 => 'tiempo de ejecucion',
            42 => 'clientes',
            43 => 'servidores',
            44 => 'Cliente',
            45 => 'solicitante de servicios',
            46 => 'Servidor',
            47 => 'proveedor de servicios',
            48 => 'intermediario',
            49 => 'servidor adecuado',
            50 => 'reenvía',
            51 => 'devuelve los resultados',
            52 => 'Client-side proxy',
            53 => 'comunicacion real',
            54 => 'marshaling',
            55 => 'Server-side proxy',
            56 => 'adjuncion',
            57 => 'clientes',
            58 => 'servidores',
            59 => 'brokers',
            60 => 'un broker',
            61 => 'proxy del lado del cliente',
            62 => 'un broker',
            63 => 'proxy del lado del servidor',
            64 => 'indirección',
            65 => 'latencia',
            66 => 'cuello de botella',
            67 => 'unico punto de falla',
            68 => 'complejidad',
            69 => 'seguridad',
            70 => 'probar',
            71 => 'modificabilidad',
            72 => 'disponibilidad',
            73 => 'rendimiento',
            74 => 'latencia',
            75 => 'de los proveedores de servicios',
        ];

        foreach ($answers as $i => $correct) {
            ${"respuesta_$i"} = isset($_POST["respuesta_$i"]) ? $_POST["respuesta_$i"] : '';
            if (${"respuesta_$i"} === $correct) {
                ${"verificar_$i"} = "correcto";
            } elseif (${"respuesta_$i"} === '') {
                ${"verificar_$i"} = '';
            } else {
                ${"verificar_$i"} = "incorrecto";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrones Arquitectónicos – Segundo</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../style_2_0.css">

<style>
    .seccion {
        width: calc(50% - 7.5px);
        padding: 20px;
        box-sizing: border-box;
        height: 310vh;
    }
</style>

<script>
function handleSubmit(event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    fetch(event.target.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(html => {
        document.body.innerHTML = html;
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}
</script>

</head>
<body>

<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off">
<div class="form-container">

<!-- ==================== COLUMNA IZQUIERDA ==================== -->
<div class="seccion izquierda">

    <img src="../../../../img/guia_434.png" alt="">

    <p>
        Pero todavía me sorprende cuán pocos arquitectos realmente se toman la molestia de hacer esto.
        Y si no lo hacen, sus diagramas de capas resultan ambiguos.
    </p>

    <p>
        Segundo, cualquier conjunto de cajas apiladas unas sobre otras no constituye
        una arquitectura en capas.
    </p>

    <p>
        Por ejemplo, observe el diseño mostrado en la Figura 13.3, el cual utiliza flechas
        en lugar de
        <input type="text" name="respuesta_1" value="<?php echo $respuesta_1; ?>" size="10">
        para indicar las relaciones entre las cajas.
    </p>

    <p>
        Aquí, todo puede usar todo. Esto definitivamente no es una arquitectura en capas.
    </p>

    <p>
        La razón es que, si la Capa A se reemplaza por una versión diferente, la Capa C
        (que la utiliza en esta figura) muy probablemente tendría que cambiar también.
    </p>

    <img src="../../../../img/guia_435.png" alt="">
    <p><strong>Figura 13.3. Un lobo con piel de capa</strong></p>

    <p>
        Tercero, muchas arquitecturas que supuestamente son en capas se parecen
        a la Figura 13.4.
    </p>

    <p>
        Los "sidecars" como este suelen contener utilidades comunes
        (a veces importadas), como manejadores de errores, protocolos de comunicación
        o mecanismos de acceso a bases de datos.
    </p>

    <p>
        Este tipo de diagrama tiene sentido únicamente en el caso en que no se permita
        <input type="text" name="respuesta_2" value="<?php echo $respuesta_2; ?>" size="14">
        en la pila principal.
    </p>

    <p>
        De lo contrario, D podría simplemente convertirse en la capa más inferior
        de la pila principal y la geometría de "
        <input type="text" name="respuesta_5" value="<?php echo $respuesta_5; ?>" size="8">
        " sería innecesaria.
    </p>

    <img src="../../../../img/guia_436.png" alt="">
    <p><strong>Figura 13.4. Capas con un "sidecar"</strong></p>

    <p>
        A veces las capas se dividen en
        <input type="text" name="respuesta_7" value="<?php echo $respuesta_7; ?>" size="10">
        que denotan una descomposición más fina de los módulos.
    </p>

    <p>
        En ocasiones esto ocurre cuando un conjunto preexistente de unidades,
        como módulos importados, comparte la misma relación de "uso permitido".
        Cuando esto sucede, es necesario especificar qué reglas de uso están vigentes
        entre los segmentos. Son posibles muchas reglas de uso, pero deben hacerse explícitas.
    </p>

    <p>
        Los diagramas en capas suelen ser una fuente de ambigüedad oculta porque
        el diagrama no hace explícitas las relaciones de "
        <input type="text" name="respuesta_6" value="<?php echo $respuesta_6; ?>" size="14">
        ".
    </p>

    <img src="../../../../img/guia_437.png" alt="">
    <p><strong>Figura 13.5. Diseño en capas con capas segmentadas</strong></p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_1; ?>
    <?php echo $verificar_2; ?>
    <?php echo $verificar_5; ?>
    <?php echo $verificar_6; ?>
    <?php echo $verificar_7; ?>

    <hr>

    <p>
        Finalmente, el punto más importante sobre las capas es que una capa
        no tiene permitido usar ninguna capa que esté
        <input type="text" name="respuesta_8" value="<?php echo $respuesta_8; ?>" size="10">
        de ella.
    </p>

    <p>
        Un módulo "usa" otro módulo cuando depende de la
        <input type="text" name="respuesta_9" value="<?php echo $respuesta_9; ?>" size="10">
        que obtiene de él.
    </p>

    <p>
        Pero una capa sí tiene permitido realizar llamadas hacia
        <input type="text" name="respuesta_10" value="<?php echo $respuesta_10; ?>" size="8">
        , siempre que no espere una respuesta de ellas.
    </p>

    <p>
        Así es como funciona el esquema común de manejo de errores mediante
        <input type="text" name="respuesta_11" value="<?php echo $respuesta_11; ?>" size="12">
        .
    </p>

    <p>
        Un programa en la capa A llama a un programa en una capa inferior B,
        y los parámetros incluyen un puntero a un programa de manejo de errores
        en A que la capa inferior debe invocar en caso de error.
        El software en B realiza la llamada al programa en A, pero no le importa
        en absoluto lo que este haga.
        Al no depender de ninguna manera del contenido de A, B queda
        <input type="text" name="respuesta_12" value="<?php echo $respuesta_12; ?>" size="8">
        de los cambios en A.
    </p>

    <p>—PCC</p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_8; ?>
    <?php echo $verificar_9; ?>
    <?php echo $verificar_10; ?>
    <?php echo $verificar_11; ?>
    <?php echo $verificar_12; ?>

    <hr>

    <h3>Otros Patrones de Módulos</h3>

    <p>
        Los diseñadores de un dominio particular suelen publicar descomposiciones
        "estándar" de módulos para sistemas de dicho dominio.
        Estas descomposiciones estándar, si se presentan en la forma
        "contexto, problema, solución", constituyen patrones de descomposición de módulos.
    </p>

    <p>
        De manera similar, en el ámbito orientado a objetos, las soluciones "estándar"
        o publicadas de diseño de clases/objetos para una clase de sistemas constituyen
        patrones orientados a objetos.
    </p>

</div>

<!-- ==================== COLUMNA DERECHA ==================== -->
<div class="seccion derecha">

    <h2>Patrones de Componentes y Conectores</h2>

    <h3>Patrón Broker</h3>

    <p>
        <strong>Contexto:</strong>
         
        <input type="text" name="respuesta_13" value="<?php echo $respuesta_13; ?>" size="100">
      
        .
    </p>

    <p>
        Implementar estos sistemas es complejo porque se debe considerar cómo
        <input type="text" name="respuesta_15" value="<?php echo $respuesta_15; ?>" size="14">
        los sistemas —cómo se conectarán entre sí y cómo intercambiarán información—,
        así como la
        <input type="text" name="respuesta_16" value="<?php echo $respuesta_16; ?>" size="14">
        de los servicios componentes.
    </p>

    <p>
        <strong>Problema:</strong>
        ¿Cómo estructuramos software distribuido de manera que los usuarios de servicios
        no necesiten conocer la
        <input type="text" name="respuesta_17" value="<?php echo $respuesta_17; ?>" size="10">
        y
        <input type="text" name="respuesta_18" value="<?php echo $respuesta_18; ?>" size="10">
        de los proveedores de servicios,
        facilitando así cambiar
        <input type="text" name="respuesta_19" value="<?php echo $respuesta_19; ?>" size="14">
        las vinculaciones entre usuarios y proveedores?
    </p>

    <p>
        <strong>Solución:</strong>
        El patrón
        <input type="text" name="respuesta_20" value="<?php echo $respuesta_20; ?>" size="36">
          (
        <input type="text" name="respuesta_21" value="<?php echo $respuesta_21; ?>" size="8">
        ) 
        <input type="text" name="respuesta_75" value="<?php echo $respuesta_75; ?>" size="31">
          (
        <input type="text" name="respuesta_22" value="<?php echo $respuesta_22; ?>" size="10">
        )  
        <input type="text" name="respuesta_23" value="<?php echo $respuesta_23; ?>" size="24">
        llamado <em>broker</em>.
    </p>

    <p>
        Cuando un cliente necesita un servicio, consulta a un
        <input type="text" name="respuesta_24" value="<?php echo $respuesta_24; ?>" size="8">
        mediante una
        <input type="text" name="respuesta_25" value="<?php echo $respuesta_25; ?>" size="18">
        .
    </p>

    <p>
        El broker luego
        <input type="text" name="respuesta_26" value="<?php echo $respuesta_26; ?>" size="8">
        la solicitud de servicio del cliente a un servidor,
        el cual procesa la solicitud.
        El
        <input type="text" name="respuesta_27" value="<?php echo $respuesta_27; ?>" size="10">
        del servicio se comunica desde el servidor de vuelta al broker,
        que posteriormente devuelve el resultado (y cualquier excepción) al cliente solicitante.
    </p>

    <p>
        De esta manera, el cliente permanece completamente ignorante de la
        <input type="text" name="respuesta_28" value="<?php echo $respuesta_28; ?>" size="10">
        ,
        <input type="text" name="respuesta_29" value="<?php echo $respuesta_29; ?>" size="10">
        y
        <input type="text" name="respuesta_30" value="<?php echo $respuesta_30; ?>" size="14">
        del servidor.
    </p>

    <p>
        Gracias a esta separación, si un servidor deja de estar disponible, el broker puede
        seleccionar dinámicamente un
        <input type="text" name="respuesta_31" value="<?php echo $respuesta_31; ?>" size="10">
        .
        Si un servidor es reemplazado por un servicio diferente (compatible), nuevamente el
        <input type="text" name="respuesta_32" value="<?php echo $respuesta_32; ?>" size="8">
        es el único componente que necesita conocer este cambio.
    </p>

    <p>
        Los
        <input type="text" name="respuesta_33" value="<?php echo $respuesta_33; ?>" size="8">
        suelen introducirse como intermediarios adicionales junto al broker para ayudar
        con detalles de interacción con el broker, como el empaquetado y desempaquetado
        (
        <input type="text" name="respuesta_34" value="<?php echo $respuesta_34; ?>" size="12">
        y
        <input type="text" name="respuesta_35" value="<?php echo $respuesta_35; ?>" size="14">
        ) de mensajes.
    </p>

    <p>
        Las desventajas de los brokers son que añaden
        <input type="text" name="respuesta_36" value="<?php echo $respuesta_36; ?>" size="12">
        y agregan un nivel de indirección entre cliente y servidor, lo cual añade
        <input type="text" name="respuesta_37" value="<?php echo $respuesta_37; ?>" size="8">
        a la comunicación.
    </p>

    <p>
        Desde la perspectiva de
        <input type="text" name="respuesta_38" value="<?php echo $respuesta_38; ?>" size="10">
        , el broker constituye un punto obvio de ataque,
        por lo que debe fortalecerse adecuadamente.
        Además, un broker, si no se diseña cuidadosamente, puede convertirse en un único punto
        de falla para un sistema grande y complejo.
        Y los brokers también pueden convertirse potencialmente en
        <input type="text" name="respuesta_39" value="<?php echo $respuesta_39; ?>" size="16">
        para la comunicación.
    </p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_13; ?>
    <?php echo $verificar_14; ?>
    <?php echo $verificar_15; ?>
    <?php echo $verificar_16; ?>
    <?php echo $verificar_17; ?>
    <?php echo $verificar_18; ?>
    <?php echo $verificar_19; ?>
    <?php echo $verificar_20; ?>
    <?php echo $verificar_21; ?>
    <?php echo $verificar_75; ?>

    <?php echo $verificar_22; ?>
    <?php echo $verificar_23; ?>
    <?php echo $verificar_24; ?>
    <?php echo $verificar_25; ?>
    <?php echo $verificar_26; ?>
    <?php echo $verificar_27; ?>
    <?php echo $verificar_28; ?>
    <?php echo $verificar_29; ?>
    <?php echo $verificar_30; ?>
    <?php echo $verificar_31; ?>
    <?php echo $verificar_32; ?>
    <?php echo $verificar_33; ?>
    <?php echo $verificar_34; ?>
    <?php echo $verificar_35; ?>
    <?php echo $verificar_36; ?>
    <?php echo $verificar_37; ?>
    <?php echo $verificar_38; ?>
    <?php echo $verificar_39; ?>

    <hr>

    <h3>Tabla 13.2. Solución del Patrón Broker</h3>

    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Sección</th>
            <th>Descripción</th>
        </tr>

        <tr>
            <td><strong>Visión General</strong></td>
            <td>
                El patrón
                <input type="text" name="respuesta_40" value="<?php echo $respuesta_40; ?>" size="8">
                define un componente en
                <input type="text" name="respuesta_41" value="<?php echo $respuesta_41; ?>" size="18">
                , llamado <em>broker</em>, que media la comunicación entre múltiples
                <input type="text" name="respuesta_42" value="<?php echo $respuesta_42; ?>" size="8">
                y
                <input type="text" name="respuesta_43" value="<?php echo $respuesta_43; ?>" size="10">
                .
            </td>
        </tr>

        <tr>
            <td><strong>Elementos</strong></td>
            <td>
                <p>
                    <strong>
                    <input type="text" name="respuesta_44" value="<?php echo $respuesta_44; ?>" size="8">
                    (<em>Client</em>)</strong>, un
                    <input type="text" name="respuesta_45" value="<?php echo $respuesta_45; ?>" size="22">
                    .
                </p>

                <p>
                    <strong>
                    <input type="text" name="respuesta_46" value="<?php echo $respuesta_46; ?>" size="8">
                    (<em>Server</em>)</strong>, un
                    <input type="text" name="respuesta_47" value="<?php echo $respuesta_47; ?>" size="22">
                    .
                </p>

                <p>
                    <strong>Broker</strong>, un
                    <input type="text" name="respuesta_48" value="<?php echo $respuesta_48; ?>" size="12">
                    que localiza un
                    <input type="text" name="respuesta_49" value="<?php echo $respuesta_49; ?>" size="16">
                    para satisfacer la solicitud de un cliente,
                    <input type="text" name="respuesta_50" value="<?php echo $respuesta_50; ?>" size="8">
                    la solicitud al servidor y
                    <input type="text" name="respuesta_51" value="<?php echo $respuesta_51; ?>" size="22">
                    al cliente.
                </p>

                <p>
                    <strong>
                    <input type="text" name="respuesta_52" value="<?php echo $respuesta_52; ?>" size="18">
                    </strong>, un intermediario que administra la
                    <input type="text" name="respuesta_53" value="<?php echo $respuesta_53; ?>" size="18">
                    con el broker, incluyendo el empaquetado, envío y desempaquetado
                    (
                    <input type="text" name="respuesta_54" value="<?php echo $respuesta_54; ?>" size="12">
                    y <em>unmarshaling</em>) de mensajes.
                </p>

                <p>
                    <strong>
                    <input type="text" name="respuesta_55" value="<?php echo $respuesta_55; ?>" size="18">
                    </strong>, un intermediario que administra la comunicación real
                    con el broker, incluyendo el empaquetado, envío y desempaquetado de mensajes.
                </p>
            </td>
        </tr>

        <tr>
            <td><strong>Relaciones</strong></td>
            <td>
                La relación de <strong>
                <input type="text" name="respuesta_56" value="<?php echo $respuesta_56; ?>" size="12">
                (<em>attachment</em>)</strong> asocia
                <input type="text" name="respuesta_57" value="<?php echo $respuesta_57; ?>" size="8">
                (y opcionalmente proxies del lado del cliente) y
                <input type="text" name="respuesta_58" value="<?php echo $respuesta_58; ?>" size="10">
                (y opcionalmente proxies del lado del servidor) con
                <input type="text" name="respuesta_59" value="<?php echo $respuesta_59; ?>" size="8">
                .
            </td>
        </tr>

        <tr>
            <td><strong>Restricciones</strong></td>
            <td>
                <ul>
                    <li>
                        El cliente solo puede conectarse a
                        <input type="text" name="respuesta_60" value="<?php echo $respuesta_60; ?>" size="10">
                        (potencialmente a través de un
                        <input type="text" name="respuesta_61" value="<?php echo $respuesta_61; ?>" size="26">
                        ).
                    </li>

                    <li>
                        El servidor solo puede conectarse a
                        <input type="text" name="respuesta_62" value="<?php echo $respuesta_62; ?>" size="10">
                        (potencialmente a través de un
                        <input type="text" name="respuesta_63" value="<?php echo $respuesta_63; ?>" size="28">
                        ).
                    </li>
                </ul>
            </td>
        </tr>

        <tr>
            <td><strong>Debilidades</strong></td>
            <td>
                <ul>
                    <li>
                        Los brokers agregan una capa de
                        <input type="text" name="respuesta_64" value="<?php echo $respuesta_64; ?>" size="12">
                        y, por lo tanto,
                        <input type="text" name="respuesta_65" value="<?php echo $respuesta_65; ?>" size="8">
                        entre clientes y servidores,
                        y dicha capa puede convertirse en un
                        <input type="text" name="respuesta_66" value="<?php echo $respuesta_66; ?>" size="18">
                        de comunicación.
                    </li>

                    <li>
                        El broker puede ser un
                        <input type="text" name="respuesta_67" value="<?php echo $respuesta_67; ?>" size="22">
                        .
                    </li>

                    <li>
                        Un broker añade
                        <input type="text" name="respuesta_68" value="<?php echo $respuesta_68; ?>" size="12">
                        inicial al sistema.
                    </li>

                    <li>
                        Un broker puede ser objetivo de ataques de
                        <input type="text" name="respuesta_69" value="<?php echo $respuesta_69; ?>" size="10">
                        .
                    </li>

                    <li>
                        Un broker puede ser difícil de
                        <input type="text" name="respuesta_70" value="<?php echo $respuesta_70; ?>" size="8">
                        .
                    </li>
                </ul>
            </td>
        </tr>
    </table>

    <button type="submit">Enviar</button>
    <?php echo $verificar_40; ?>
    <?php echo $verificar_41; ?>
    <?php echo $verificar_42; ?>
    <?php echo $verificar_43; ?>
    <?php echo $verificar_44; ?>
    <?php echo $verificar_45; ?>
    <?php echo $verificar_46; ?>
    <?php echo $verificar_47; ?>
    <?php echo $verificar_48; ?>
    <?php echo $verificar_49; ?>
    <?php echo $verificar_50; ?>
    <?php echo $verificar_51; ?>
    <?php echo $verificar_52; ?>
    <?php echo $verificar_53; ?>
    <?php echo $verificar_54; ?>
    <?php echo $verificar_55; ?>
    <?php echo $verificar_56; ?>
    <?php echo $verificar_57; ?>
    <?php echo $verificar_58; ?>
    <?php echo $verificar_59; ?>
    <?php echo $verificar_60; ?>
    <?php echo $verificar_61; ?>
    <?php echo $verificar_62; ?>
    <?php echo $verificar_63; ?>
    <?php echo $verificar_64; ?>
    <?php echo $verificar_65; ?>
    <?php echo $verificar_66; ?>
    <?php echo $verificar_67; ?>
    <?php echo $verificar_68; ?>
    <?php echo $verificar_69; ?>
    <?php echo $verificar_70; ?>

    <hr>

    <p>
        El broker es, por supuesto, el componente crítico de este patrón.
    </p>

    <p>
        El patrón proporciona todos los beneficios de
        <input type="text" name="respuesta_71" value="<?php echo $respuesta_71; ?>" size="16">
        de la táctica de usar un intermediario (<em>use-an-intermediary tactic</em>)
        (descrita en el Capítulo 7), un beneficio de
        <input type="text" name="respuesta_72" value="<?php echo $respuesta_72; ?>" size="14">
        (porque el patrón broker facilita reemplazar un servidor fallido por otro)
        y un beneficio de
        <input type="text" name="respuesta_73" value="<?php echo $respuesta_73; ?>" size="10">
        (porque el patrón broker facilita asignar trabajo al servidor menos ocupado).
    </p>

    <p>
        Sin embargo, el patrón también conlleva ciertas desventajas.
        Por ejemplo, el uso de un broker impide optimizaciones de rendimiento
        que podrían realizarse si se conociera la ubicación exacta y las características
        del servidor.
        Además, el uso de este patrón añade la sobrecarga del intermediario y,
        por lo tanto, incrementa la
        <input type="text" name="respuesta_74" value="<?php echo $respuesta_74; ?>" size="8">
        .
    </p>

    <button type="submit">Enviar</button>
    <?php echo $verificar_71; ?>
    <?php echo $verificar_72; ?>
    <?php echo $verificar_73; ?>
    <?php echo $verificar_74; ?>

    <hr>
    <strong>Si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion" value="<?php echo $mostrar_solucion; ?>">
    <button type="submit">Mostrar Solución</button>

</div>
</div>
</form>

<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="tercero.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>