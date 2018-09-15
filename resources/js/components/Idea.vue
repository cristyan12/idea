<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h1 class="display-4 text-center">Captura tus ideas</h1>
                <div class="card bg-light mb-3">
                    <div class="card-header text-center">
                        <h3>¿En que estás pensando?</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" name="description" maxlength="256" v-model="idea">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="card-text">
                        <div class="d-flex flex-row">
                            <ul class="list-unstyled">
                                <li class="p-2">
                                    <p>
                                        <span class="text-muted">
                                            <em>hace unos minutos</em>    
                                        </span>
                                         - Hola
                                    </p>
                                </li>
                            </ul>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>
