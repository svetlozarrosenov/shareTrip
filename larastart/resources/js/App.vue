<template>
	<div id="app">
		<div class="container">
			<router-view></router-view>
		</div><!-- container -->
	</div><!-- app -->
</template>

<script>
import Dashboard from './components/DashboardComponent.vue';


export default {
	name: 'app',
	data () {
			return {
		}
	},
	components: {
		Dashboard
	}
}
</script>
