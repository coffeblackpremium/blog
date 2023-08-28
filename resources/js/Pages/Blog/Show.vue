<script setup="ts">
import Navbar from "@/Components/Navbar.vue";

defineProps({posts: Object});

</script>

<template>
    <Navbar></Navbar>
    <!--    <div class="md:max-w-5xl h-25 md:mx-72 my-5">-->
    <!--        <div class="flex flex-col justify-center gap-5 container bg-white rounded-lg shadow-md p-4">-->
    <!--            <div class="md:max-w-7xl flex justify-stretch">-->
    <!--                <div class="grow shrink flex-nowrap w-full md:max-w-md">-->
    <!--                    <img class="rounded-lg" width="600" height="600" src="https://picsum.photos/600/600" alt="">-->
    <!--                </div>-->
    <!--                <div class="flex-col justify-between ml-5">-->
    <!--                    <h1 class="text-4xl font-italic wrap">-->
    <!--                        Laravel - Containers foda fodastico foda fodao .-->
    <!--                    </h1>-->
    <!--                    <h1 class="bg-red-200 font-italic text-md mt-4 mb-2">-->
    <!--                        Hello World!-->
    <!--                    </h1>-->
    <!--                    <span class="text-sm font-italic text-md ">-->
    <!--                        Hello World!-->
    <!--                    </span>-->

    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="bg-white mx-auto rounded-lg max-w-5xl my-10 md:max-w-3xl dark:bg-gray-900">
        <h2 class="font-light text-4xl mx-auto text-center py-10 font-roboto">Posts Mais recentes</h2>

        <div class="flex flex-col gap-5 my-10" v-for="post in posts.data" :key="post.id">
            <div class="w-full border-none lg:max-w-5xl max-w-sm mx-auto lg:flex transition ease-in-out delay-150 hover:-translate-y-1 hover:shadow-sm hover:scale-110 duration-300 ">
                    <img :src="post.image" class="h-48 lg:h-auto grow lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" alt="test" />
                <div
                    class="dark:bg-gray-900 border-r border-b border-l lg:flex-grow self-center border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 dark:text-white font-bold text-xl mb-2">
                            <a href="">
                                {{post.title}}
                            </a>
                        </div>
                        <p class="text-gray-700 dark:text-white text-base truncate max-w-2xl">{{ post.body.substring(0, 100)+ "..." }}</p>
                    </div>
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="" alt="Avatar of Jonathan Reinink"  />
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none">João Damaceno</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
