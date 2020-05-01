<template>
    <card class="flex flex-col">
        <div class="px-3 py-3">
            <h4 class="mb-3">Tasks</h4>
            <table class="table w-full">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Prefix</th>
                </tr>
                <tr v-for="project in projects">
                     <td>
                        <router-link :to="'/resources/tasks/' + project.id">
                            {{project.name}}
                        </router-link>
                    </td>
                    <td>
                        <router-link v-bind:to="'/resources/tasks/' + project.id">
                            {{project.prefix}}
                        </router-link>
                    </td>
                </tr>
            </table>
        </div>
    </card>
</template>

<script>
    export default {
        props: [
            'card',
        ],
        data: function(){
            return {
                projects: []
            }
        },
        methods: {
            loadProjects: function(){
                fetch('/nova-vendor/nova-card-tasks-board/tasks?limit=10&highlight=true').then((response) => {
                    return response.json();
                }).then((data) => {
                    if(data.result.projects){
                        this.projects = data.result.projects;
                    }
                }).catch((error) => {
                    console.log(error);
                });
            }
        },
        mounted(){
            this.loadProjects();
        },
    }
</script>

<style scoped>
    .card-panel {
        height: auto;
    }

    a {
        text-decoration: none;
        color: #1F6FED;
    }
</style>
