<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h1 class="display-4 text-center">Captura tus ideas</h1>
                <div class="card bg-light mb-3">
                    <div class="card-header">
                        <h3>¿En que estás pensando?</h3>
                    </div>
                    <div class="card-body">
                        <form v-on:submit.prevent="saveIdea">
                            <div class="input-group">
                                <input type="text" class="form-control" 
                                    name="description" 
                                    maxlength="256"
                                    v-model="newIdea">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-text">
                        <div class="d-flex flex-row">
                            <ul class="list-unstyled">
                                <li class="p-2" v-for="idea in ideas">
                                    <p>
                                        <small class="text-muted">
                                            <em>{{ since(idea.created_at) }}</em>    
                                        </small>
                                         - {{ idea.description }}
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
    import axios from 'axios'
    import moment from 'moment'
    import toastr from 'toastr'

    moment.locale('es');

    export default {
        data () {
            return {
                ideas: [],
                newIdea: '',
            }
        },
        created: function() {
            this.getIdeas();
        },
        methods: {
            since: function(date) {
                return moment(date).fromNow();
            },
            getIdeas: function() {
                axios.get('mis-ideas').then(response => {
                    this.ideas = response.data
                });
            },
            saveIdea: function() {
                axios.post('guardar-idea', {
                    description: this.newIdea
                }).then(response => {
                    this.getIdeas();
                    this.newIdea = '';
                    toastr.success('Nueva idea registrada');
                }).catch(error => {
                    toastr.error('Error!');
                });
            }
        }
    }
</script>
