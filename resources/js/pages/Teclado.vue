<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

const instruments = [
    {
        source: '/storage/instruments/teclado/1.jpg',
        image: 1
    },
    {
        source: '/storage/instruments/teclado/2.jpg',
        image: 2
    },
    {
        source: '/storage/instruments/teclado/3.jpg',
        image: 3
    },
    {
        source: '/storage/instruments/teclado/4.jpg',
        image: 4
    },
]
</script>

<template>
    <Head title="Instrumentos do Walter" />

    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8">
        <header class="mb-6 w-full max-w-[335px] text-center text-gray-800 text-2xl lg:max-w-4xl">
            <div class="mb-2">Teclado Cásio CT-S300</div>
            <p class="text-sm">Teclado em ótimo estado! Acompanha capa, caixa, pedal, fonte e suporte! Valor R$ 800,00</p>
            <div class="mt-4">
                <span class="text-blue-500 hover:underline"><Link :href="route('home')">Voltar</Link></span>
            </div>
        </header>

        <div class="duration-750 starting:opacity-0 flex w-full items-center justify-center opacity-100 transition-opacity lg:grow">
            <main class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row">
                <ul role="list" class="grid grid-cols gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <li v-for="instrument in instruments" :key="instrument.source" class="relative">
                        <div
                            class="group overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                            <img :src="instrument.source" alt=""
                                 class="aspect-7/10 object-cover group-hover:opacity-75" />
                        </div>
                    </li>
                </ul>
            </main>
        </div>
        <div class="h-14.5 hidden lg:block"></div>
    </div>
</template>
