<template>
	<div class="col-md-6">
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input v-model="userName" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
		<!-- USERS LIST -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Users</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body p-0">
				<ul class="users-list clearfix">
					<li v-for="user in this.users">
						<img src="dist/img/user1-128x128.jpg" alt="User Image">
						<a class="users-list-name" href="#">{{user.name}}</a>
						<span class="users-list-date">Today</span>
					</li>
					
				</ul>
				<!-- /.users-list -->
			</div>
			<!-- /.card-body -->
			<div class="card-footer text-center">
				<a href="javascript::">View All Users</a>
				{{getUsers}}
			</div>
			<!-- /.card-footer -->
		</div>
		<!--/.card -->
	</div>
	<!-- /.col -->
</template>

<script>
	export default {
		data () {
				return {
					userName: '',
					users: []
			}
		},
		computed: {
			friends: function () {
				return this.$store.state.friends;
			},
			getUsers: function() {
				if(!this.userName){
					return;
				}
				
				axios.get(`friends/${this.userName}`, {

				})
				.then((response) => {
					this.users = response.data;
					console.log(this.users);
				})
				.catch(function (error) {
					console.log(error);
				});

				return this.userName
			}
		},
		methods: {
		},
	}
</script>