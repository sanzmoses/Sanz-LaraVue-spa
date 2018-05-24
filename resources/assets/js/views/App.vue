<template>
    <div>
        <div class="ui two column centered grid mt-5">
            <div class="column">
                <h1>Vue Router Demo App</h1>

                <div class="ui secondary pointing menu">
                  <router-link :to="{ name: 'home' }" class="item active" @>Home</router-link>
                  <router-link :to="{ name: 'hello' }" class="item">Hello World</router-link>

                  <div class="right menu">
                    <a class="ui item" @click="open">
                      Modal
                    </a>
                  </div>
                </div>
                <div class="ui segment">
                    <div class="container">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                data: ""
            }
        },
        methods: {
            open(){
                console.log('test');
                $('.ui.modal').modal('show');
            }
        }
    }
</script>