<template>
	<div class="profile-card">
		<div class="profile-card-image">
			<img :src="content.url">
		</div>
		<div class="profile-card-footer">
			<h4 class="profile-card-title"> {{ content.title }} </h4>
			<h6 class="profile-card-text"> {{ content.text }} </h6>
		</div>
	</div>
</template>
<script>
export default {
    props:['content'],
    methods: {

    },
    mounted: function () {

    }
}
</script>
<style scoped lang="scss">
.profile-card {
	width: 100%;
	text-align: left;
	margin: 20px;
	border: 1px solid #ccc;
	box-shadow: 5px 5px 10px #ccc;
	.profile-card-image {
		position: relative;
		width: 360px;
		padding-top: 100%;
		overflow: hidden;
		margin: auto;
	}
	.profile-card-image img {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}
	.profile-card-footer {
		padding: 20px; 
		background-color: #FFF;
		.profile-card-title {
			font-weight: bold;
		}
	}
}
@media (max-width: 576px) {
    .profile-card {
        margin: 0;
    }
}
</style>