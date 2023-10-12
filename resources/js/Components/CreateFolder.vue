<template>
    <div>
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">CREATE FOLDER</label>
        <input v-model="formData.name" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="FOLDER NAME" required>
        <button @click="createFolder" class="border p-2 rounded-lg bg-slate-400">CREATE</button>
        <button  class="border p-2 ml-2 rounded-lg bg-slate-500">CANCEL</button>
    </div>
</template>
<script>

import axios from 'axios';
import Swal from 'sweetalert2';
export default {
data(){
    return{
        formData:{
            name: "",
        }
    }
},
methods:{
    async createFolder(){
        try { 
            const {data} = await axios.post('api/folder/create', this.formData);
            if(data){
                this.$router.push({path: '/'});
            }
        } catch (error) {
            console.log(error)
            Swal.fire(error?.response?.data?.message);
        }
    }
}
}
</script>
<style lang="">

</style>