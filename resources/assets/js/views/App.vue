<template>
        <div class="layout">
        <Layout>
            <Header>
                <Menu mode="horizontal" theme="dark" active-name="1">
                    <div class="layout-logo"></div>
                    <div class="layout-nav">
                        <MenuItem name="1">
                            <router-link :to="{ name: 'home' }" class="item active" @>Home</router-link>
                        </MenuItem>
                        <MenuItem name="2">
                            <router-link :to="{ name: 'hello' }" class="item">Hello World</router-link>
                        </MenuItem>
                        <MenuItem name="3">
                            <p @click="modal6 = true">Modal</p>
                        </MenuItem>    
                    </div>
                </Menu>
            </Header>
            <Content :style="{padding: '0 50px'}">
                <br>
                <Card>
                    <div style="min-height: 700px;">
                        <router-view></router-view>
                    </div>
                </Card>
            </Content>
            <Footer class="layout-footer-center">2011-2016 &copy; TalkingData</Footer>
            
        </Layout>

        <Modal
            v-model="modal6"
            title="Title"
            :loading="loading"
            @on-ok="asyncOK">
            <p>After you click ok, the dialog box will close in 2 seconds.</p>
        </Modal>

    </div>
</template>

<script>
    export default {
        data(){
            return {
                modal6: false,
                loading: true
            }
        },
        methods: {
            asyncOK () {
                setTimeout(() => {
                    this.modal6 = false;
                }, 2000);
            }

        }
    }
</script>

<style scoped>
.layout{
    border: 1px solid #d7dde4;
    background: #f5f7f9;
    position: relative;
    border-radius: 4px;
    overflow: hidden;
}
.layout-logo{
    width: 100px;
    height: 30px;
    background: #5b6270;
    border-radius: 3px;
    float: left;
    position: relative;
    top: 15px;
    left: 20px;
}
.layout-nav{
    width: 420px;
    margin: 0 auto;
    margin-right: 20px;
}
.layout-footer-center{
    text-align: center;
}
</style>