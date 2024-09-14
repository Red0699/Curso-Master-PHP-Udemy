<?php require_once 'includes/cabecera.php'; ?>

<div id="contenedor">
    <?php require_once 'includes/lateral.php'; ?>

    <div id="principal">
        <h1>Ultimas entradas</h1>

        <?php
        $entradas = conseguirEntradas($db, true);

        if ($entradas):
            while ($entrada = mysqli_fetch_assoc($entradas)):
        ?>

                <article class="entrada">
                    <a href="ver-entrada.php?id=<?= $entrada['id'] ?>">
                        <h2><?= $entrada['titulo'] ?></h2>
                        <span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>
                        <p>
                            <?= substr($entrada['descripcion'], 0, 180) . '...' ?>
                        </p>
                    </a>
                </article>

            <?php endwhile;
        else:
            ?>

            <article class="entrada">
                <p>
                    No hay entradas
                </p>
            </article>
        <?php endif; ?>


        <div id="ver-todas">
            <a href="entradas.php">Ver todas las entradas</a>
        </div>

    </div>

</div>

<?php require_once 'includes/pie.php'; ?>