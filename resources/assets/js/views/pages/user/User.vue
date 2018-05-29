<template>
	<div>
		<h1>Hello World</h1>
		<button class="ui left labeled icon primary button"  @click="goHome">
			<i class="left arrow icon"></i>
			Back
		</button>
		<hr>
		<router-view></router-view>
	</div>
</template>

<script>
	export default {

        created() {
        	// alert($)
        },
        methods: {
        	goHome() {
        		this.$router.push('/');
        	}
        }
	}
</script>