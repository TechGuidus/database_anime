{include file='templates/header.tpl'}

<div class="container">

    <div class="row mt-4">

        
        <div class="col-md-4">
        <a class="btn btn-warning" href="logout">Logout </a>
            <h2>Crear Tarea</h2>
            <form class="form-alta" action="createTask" method="post">
                <input placeholder="Nombre" type="text" name="title" id="title" required>
                <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
                <input placeholder="prioridad" type="date" name="priority" id="priority">
                <input type="number" name="episodios" id="episodios" placeholder="Cantidad de episodios">
                <select name="selectGenres">
                    {foreach from=$genres item=$genre}
                        <option value="{$genre->id_genero}">{$genre->nombre}</option>   
                    {/foreach}
                </select>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        </div>
        <div class="col-md-8">
            <h1>{$titulo}</h1>

            <ul class="list-group">
                {foreach from=$tasks item=$task}
                    <li class="
                        list-group-item
                        ">
                            <h1>{$task->nombre}</h1>
                            <h4>{$task->descripcion|truncate:30}<h4>             
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>

{include file='templates/footer.tpl'}