<template>
	<div class="card">
		<div class="card-block">
			<img :src="content.url">
		</div>
		<div class="card-footer">
			<h4 class="card-title"> 
				{{ content.title }}
			</h4>
			<h6 class="card-text">
				{{ content.text }}
			</h6>
		</div>
	</div>
</template>
<script>
export default {
	props:['content']
}
</script>
<style lang="scss">
.card {
	width: 100%;
	text-align: left;
	margin: 20px;
	.card-block {
		position: relative;
		width: 360px;
		padding-top: 100%;
		padding-bottom: 0;
		overflow: hidden;
		margin: auto;
	}
	.card-block img {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}
	.card-footer {
		padding: 20px; 
		background-color: #FFF;
		.profile-card-title {
			font-weight: bold;
		}
	}
}
@media (max-width: 400px) {
	.card {
		margin: 0 0 15px 0;
	}
}
</style>
