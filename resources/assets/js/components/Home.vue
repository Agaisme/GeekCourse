<template>
	<div>
		<nav class="panel column is-offset-0 is-12">
			<p class="panel-heading">
				GeekCourse
				<button class="button is-link is-outlined" @click="openAdd">
						Add New
				</button>
			</p>
			<div class="panel-block">
				<p class="control has-icons-left">
					<input class="input is-small" type="text" placeholder="search">
					<span class="icon is-small is-left">
						<i class="fas fa-search"></i>
					</span>
				</p>
			</div>
			<a class="panel-block">
				<span class="column is-9">				
					Nama Materi
				</span>
				<span class="panel-icon column is-1">
					<i class="has-text-primary fas fa-eye"></i>
				</span>
				<span class="panel-icon column is-1">
					<i class="has-text-info far fa-edit"></i>
				</span>
				<span class="panel-icon column is-1">
					<i class="has-text-danger far fa-trash-alt"></i>
				</span>
			</a>
		</nav>

		<Add :openmodal='addActive' @closeRequest='close'></Add>
	</div>
</template>

<script type="text/javascript">
let Add = require('./Add.vue');

	export default{
		components:{Add},
		data(){
			return{
				addActive : ''
			}
		},
		methods:{
			openAdd(){
				this.addActive = 'is-active';
			},
			close(){
				this.addActive = '';
			}
		},
	}

</script>