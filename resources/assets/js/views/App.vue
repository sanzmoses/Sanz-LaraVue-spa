<template>
    <div class="ui two column centered grid mt-10">
        <div class="column">
            <app-header></app-header>
            <div class="ui segment">
              <router-view></router-view>
            </div> 
        </div>
    </div>
</template>

<script>
import Header from './partials/Header.vue';
    export default {
        data(){
            return {
            }
        },
        methods: {
            

        },
        components: {
            appHeader: Header
        }
    }
</script>

<style scoped>
</style>