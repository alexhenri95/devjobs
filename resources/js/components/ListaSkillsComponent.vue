<template>
	<div>
		<ul class="flex flex-wrap justify-center cursor-pointer">
			<li class="border border-gray-500 px-5 py-2 mb-1 rounded mr-1 text-sm"
				:class="verificarClaseActiva(skill)"
				v-for="(skill, i) in this.skills" 
				v-bind:key="i"
				@click="activar($event)">{{skill}}</li>
		</ul>
		<input type="hidden" name="skills" id="skills">
	</div>
</template>

<script>
	export default {
		props: ['skills', 'oldskills'],
		data: function(){
			return {
				habilidades: new Set()
			}
		},
		created: function(){
			if (this.oldskills) {
				const skillsArray = this.oldskills.split(',');
				skillsArray.forEach(skill => this.habilidades.add(skill))
			}
		},
		mounted(){
			document.querySelector('#skills').value = this.oldskills;
		},
		methods: {
			activar(e){
				if (e.target.classList.contains('bg-indigo-400')) {
					//El skill esta en activo
					e.target.classList.remove('bg-indigo-400');
					//Eliminar del set de habilidades
					this.habilidades.delete(e.target.textContent);
				}else{
					//El skill no esta activo, añadirlo
					e.target.classList.add('bg-indigo-400');
					//Agregar al set de hailidades
					this.habilidades.add(e.target.textContent);
				}
				//Agregar las skills al input hidden
				const stringHabilidades = [...this.habilidades];
				document.querySelector('#skills').value = stringHabilidades;
			},
			verificarClaseActiva(skill) {
				return this.habilidades.has(skill) ? 'bg-indigo-400' : '';
			}
		}
	}
</script>