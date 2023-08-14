<script setup lang="ts">

import Navbar from "@/Components/Navbar.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
</script>

<template>
    <Navbar />
    <div class="max-w-full dark:bg-gray-900">
        <div class="my-4 text-center">
            <h1 class="text-2xl font-semibold dark:text-white ">Criar Posts</h1>
        </div>
        <div class="bg-red-500 md:max-w-7xl md:mx-auto dark:bg-slate-200 rounded-sm">
            <form>
                <div class="flex flex-col mx-auto max-w-full">
                    <div class="mb-4 max-w-full">
                        <InputLabel class="font-thin text-2xl">
                            Título
                        </InputLabel>
                        <TextInput model-value="Testando" class="dark:bg-slate-400 rounded-sm py-1 pr-12"/>
                    </div>
                    <div class="py-1 max-w-full mx-auto">
                        <InputLabel class="font-thin text-2xl">
                            Título
                        </InputLabel>
                        <TextInput model-value="Testando" class="dark:bg-slate-400 rounded-sm py-1 pr-12"/>
                    </div>
                    <div class="py-1 max-w-full mx-auto">
                        <InputLabel class="font-thin text-2xl">
                            Título
                        </InputLabel>
                        <TextInput model-value="Testando" class="dark:bg-slate-400 rounded-sm py-1 pr-12"/>
                    </div>
                    <div class="py-1 max-w-full mx-auto">
                        <InputLabel class="font-thin text-2xl">
                            Título
                        </InputLabel>
                        <TextInput model-value="Testando" class="dark:bg-slate-400 rounded-sm py-1 pr-12"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
