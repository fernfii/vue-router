<template>
	<div class="number">
		<p>
			{{ number }}
		</p>
		<button v-on:click="number -= 1" type="button" class="btn btn-secondary"> - </button>			
		<button v-on:click="number += 1" type="button" class="btn btn-secondary"> + </button>
	</div>
</template>
<script>
export default {
	data () {
		return {
			number: 0
		}
	},
}
</script>
<style lang="scss">
.number {
	color: #726E6D;
	font-size: 48px;
	.btn {
		padding: 0;
		font-size: 20px;
		width: 40px;
		height: 40px;
	}
}
</style>
