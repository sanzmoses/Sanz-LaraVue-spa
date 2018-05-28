<template>
    <div class="ui three column centered grid mt-50">
        <div class="column">
        <h2 class="ui center aligned header teal">
          <!-- <img src="assets/images/logo.png" class="image"> -->
          <div class="content">
            Log-in to your account
          </div>
        </h2>
        <form class="ui large form">
          <div class="ui stacked segment">
            <div class="field">
              <div class="ui left icon input">
                <i class="users icon"></i>
                <input type="text" name="email" placeholder="E-mail address">
              </div>
            </div>
            <div class="field">
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" placeholder="Password">
              </div>
            </div>
            <div class="ui fluid large teal submit button">Login</div>
          </div>

          <div class="ui error message"></div>

        </form>

        <div class="ui message">
          New to us? <a href="#">Sign Up</a>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
            }
        },
        methods: {
            

        }
    }
</script>

<style scoped>

</style>