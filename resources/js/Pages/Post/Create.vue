<script setup lang="ts">

import Navbar from "@/Components/Navbar.vue";
import InputLabel from "@/Components/InputLabel.vue";
import {QuillEditor} from "@vueup/vue-quill";
import PrimaryButton from "@/Components/PrimaryButton.vue";

</script>

<template>
    <Navbar />
    <div>
        <div class="mx-auto text-center md:max-w-full md:block hidden">
            <h1 class="text-3xl font-sans my-4">Criar Posts</h1>
        </div>
        <div class="md:max-w-full mx-auto px-4 sm:px-6 lg:px-8 bg-slate-500 py-6">
            <div class="md:max-w-7xl bg-slate-200 mx-auto rounded-md">
                <form>
                    <div class="flex flex-col justify-start md:max-w-7xl pt-6 pb-8 px-8 mb-4">
                        <div class="md:max-w-7xl mb-4">
                            <input-label  for="title" :value="'Titulo'" class="md:text-3xl font-normal font-sans pl-1.5"/>
                            <input type="text" name="title" id="title" class="shadow-sm
                            focus:ring-indigo-500 focus:border-indigo-500 dark:text-black block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="mb-4">
                            <input-label  for="tag" :value="'Tags'" class="md:text-3xl font-normal font-sans pl-1.5"/>
                            <input type="text" name="tag" id="tag" class="shadow-sm
                            focus:ring-indigo-500 focus:border-indigo-500 dark:text-black block w-full sm:text-sm border-gray-300 rounded-md" />
                        </div>
                        <div class="md:max-w-full">
                            <input-label  for="body" :value="'Body'" class="md:text-3xl font-normal font-sans pl-1.5"/>
<!--                            <textarea type="text" name="title" id=     "title" class="shadow-sm-->
<!--                            focus:ring-indigo-500 focus:border-indigo-500 dark:text-black block w-full sm:text-sm border-gray-300 rounded-md pb-6" />-->
                            <QuillEditor class="dark:text-black ql-bg-blue"/>
                        </div>
                         <div class="md:max-w-7xl text-center mt-5">
                             <PrimaryButton>
                                 Salvar
                             </PrimaryButton>
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>
