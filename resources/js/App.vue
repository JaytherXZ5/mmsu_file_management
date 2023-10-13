<template lang="">
    <div class=" bg-mmsu-green py-6 px-3 w-screen h-screen rounded-lg overflow-hidden"
            style="border-color: rgb(12,75,5);">
            <div class="relative bg-mmsu-light-gray w-[100%] h-[100%] top-0 left-0 rounded-[30px] flex-row">
                <div class="flex gap-1  h-20 rounded-t-[30px]" >
                    <div class="flex justify-center items-end w-20 mb-1">
                        <img src="../../public/images/mmsu-logo.png" class="w-12" alt="" srcset="">
                    </div>
                    <div class="flex justify-center items-center font-serif text-[20px]">
                        <p class="mt-5">MARIANO MARCOS STATE UNIVERSITY</p>
                    </div>
                    <div class="flex justify-center items-end ml-4 mb-1 w-[800px]">
                        <input class="border mt-5 h-12 rounded-3xl w-[100%] text-center focus:outline-none custom-shadow placeholder:font-semibold placeholder-green-800 bg-mmsu-light-gray" type="text" placeholder="Search For Files and Folders">
                        <font-awesome-icon :icon="faMagnifyingGlass" class="w-7 h-7 absolute ml-[700px] mb-2"/>
                    </div>
                    <div class="flex justify-center items-end ml-10 mb-1 ">
                        <img src="../../public/images/profile.png" class="w-12 custom-shadow rounded-full" alt="" srcset="">
                    </div>
                    <div class="flex "><h2 class=" font-semibold font-mono text-[20px] mt-9 ml-4">JAYTHER</h2></div>
                </div>
                <div class="flex flex-row h-[99%]">
                    <router-view></router-view>
                </div>
                
            </div>
    </div>

</template>

<script>
import { faMagnifyingGlass } from '@fortawesome/free-solid-svg-icons';
export default {
    computed:{
        faMagnifyingGlass(){return faMagnifyingGlass;},
    }
}
</script>
<style lang="">
    
</style>