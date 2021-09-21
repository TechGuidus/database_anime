{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">{$task->titulo}</h1>
    <h2>Descripcion: {$task->descripcion}</h2>
    <h2>Prioridad: {$task->prioridad}</h2>
    <h2>Finalizada: {$task->finalizada}</h2>

    <a href="home" > Volver </a>
</div>

{include file='templates/footer.tpl'}