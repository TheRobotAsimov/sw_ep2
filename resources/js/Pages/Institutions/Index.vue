<template>
    <!-- f -->
    <h2>Api de Opciones Vue2</h2>
    <p>brand:{{ brand }}</p>
    <p>model:{{ model }}</p>
    <p>color:{{ color }}</p>
    <p>price:{{ price }}</p>
    <p>power:{{ power }}</p>
    <p>mensaje:{{ mensaje }}</p>
    <br>
    <button @click="upPower(10)" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Aumentar
    </button>
    <button @click="downPower(10)" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
        Disminuir
    </button>
    <br>
    <br>
    <br>
    <h1>{{ titulo }}</h1>
    <p>{{ Institution }}</p>

</template>

<script>
import {ref} from "vue";
export default {
    props: {titulo: String, Institution: Object},

    setup(){    // Vue3, todo dentro del método setup
        const brand = "Audi";
        const model = "A4";
        const color = ["Azul", "Rojo", "Verde"]
        const price = 3800;
        let power = ref(180);
        const mensaje = {
            title: "Hola mundo",
            text: "Adios",
        };

        //Método aumentar
        const upPower = (newPower)=>{
            power.value = power.value+newPower;
        };  

        //Método disminuir
        const downPower = (newPower)=>{
            power.value = power.value-newPower;
        };

        return{brand, model, color, price, power, mensaje, upPower, downPower};
    }

    /* data() { // Vue2, la variables se declaran dentro de data
        return { // Defino variables
            brand: "Audi",
            model: "A4",
            color: ["Azul", "Rojo", "Verde"],
            price: 3800,
            power: 180,
            mensaje: {
                title: "Hola mundo",
                text: "Adios",
            },
        };
    }, */

    
};
</script>

<style>

</style>