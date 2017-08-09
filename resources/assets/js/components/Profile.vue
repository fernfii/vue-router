<template>
	<div class="profile col-12 col-lg-4">
		<card v-for="(detail, index) in details" :key="index" :content="detail"></card>
	</div>
</template>
<script>
import Card from './Card.vue'
export default {
	components:{
		'card': Card
	},
	data () {
		return {
			details: [
				{ title: 'Name', text: 'Nuttha Nantamongkonjarat', url: '/images/Name.jpg' },
				{ title: 'Job', text: 'Web Developer' , url: '/images/Job.jpg'},
				{ title: 'Office', text: 'Jeban.com' , url: '/images/Office.jpg' }
			]
		}
	}
}
</script>
<style>
.profile {
	display: flex;
}
@media (max-width: 576px) {
	.profile {
		display: inline-block;
	}
}
</style>
