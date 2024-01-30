<script setup lang="ts">
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
</script>

<template>
    <div class="flex flex-col md:max-w-3xl justify-center items-center mx-auto">
        <div class="flex items-center mt-4">
            <span class="text-3xl roboto mt-2">
                Gostou do conteúdo ?
            </span>
        </div>
        <div class="flex items-center">
            <span class="text-xl roboto italic">
                Me siga nas redes
            </span>
        </div>
        <div class="flex items-center justify-center fa-3x">
            <div class="mx-3">
                <a href="https://www.linkedin.com/in/joao-damaceno/">
                    <font-awesome-icon icon="fa-brands fa-linkedin-in"></font-awesome-icon>
                </a>
            </div>
            <div class="mx-3 ">
                <a href="https://github.com/coffeblackpremium">
                    <font-awesome-icon icon="fa-brands fa-github"/>
                </a>
            </div>
        </div>
    </div>
    <div class="mx-auto md:max-w-3xl">
        <hr style="height:1px;border-width:0;color:gray;background-color:gray"/>
        <span class="flex text-sm justify-center mt-3 ">
            Desenvolvido por: <span class="italic"> João Damaceno </span>
        </span>
    </div>
    <div class="flex flex-row-reverse ">
        <span class="hidden text-sm justify-start">
            Desenvolvido por: <span class="italic"> João Damaceno</span>
        </span>
        <span class="text-sm md:mr-4 mt-4">
            © Todos os direitos reservados
        </span>
    </div>
</template>

