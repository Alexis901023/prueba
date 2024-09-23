<template>
    <div>
      <h1>Agregar Persona</h1>
      <form @submit.prevent="agregarPersona">
        <input v-model="nombre" placeholder="Nombre" required />
        <input v-model="apellidos" placeholder="Apellidos" required />
        <input v-model.number="edad" type="number" placeholder="Edad" required />
        <input v-model.number="sexo" placeholder="Sexo" required />
        <input v-model.number="correo" placeholder="Correo" required />
        <button type="submit">Agregar</button>
      </form>
  
      <h2>Lista de Personas</h2>
      <ul>
        <li v-for="(persona, index) in personas" :key="index">
          {{ persona.nombre }} {{ persona.apellidos }}  {{ persona.edad }} {{ persona.sexo }} {{ persona.correo }}
        </li>
      </ul>
    </div>

    <h2>Cantidad de Personas por Sexo</h2>
    <p>Masculinos: {{ contarPorSexo('masculino') }}</p>
    <p>Femeninos: {{ contarPorSexo('femenino') }}</p>

    <h2>Edad Promedio</h2>
    <p v-if="personas.length > 0">Edad Promedio: {{ calcularEdadPromedio() }}</p>
    <p v-else>No hay personas registradas</p>

  </template>
  
  <script>
  export default {
    data() {
      return {
        nombre: '',
        apellidos: '',
        edad: null,
        sexo: '',
        correo: '',
        personas: []
      };
    },
    methods: {
      agregarPersona() {
        if (this.nombre && this.apellidos && this.edad !== null && this.sexo !== null && this.correo !== null) {
          this.personas.push({
            nombre: this.nombre,
            apellidos: this.apellidos,
            edad: this.edad,
            sexo: this.sexo,
            correo: this.correo
          });
  
          // Limpiar los campos después de agregar
          this.nombre = '';
          this.apellidos = '';
          this.edad = null;
          this.sexo = '';
          this.correo = '';
        }
      },
        contarPorSexo(sexo) {
            return this.personas.filter(persona => persona.sexo === sexo).length;
        },
        calcularEdadPromedio() {
                const totalEdad = this.personas.reduce((acc, persona) => acc + persona.edad, 0);
            }
        }
    };
  </script>
  
  <style scoped>
  /* Estilos opcionales */
  form {
    margin-bottom: 20px;
  }
  input {
    margin-right: 10px;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    margin: 5px 0;
  }
  </style>
  