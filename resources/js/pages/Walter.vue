<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

const instruments = [
    {
        title: 'Baixo Giannini 5 Cordas',
        source: '/storage/instruments/baixo 1/1.jpg',
        link: route('baixo 1'),
        price: 'R$ 800,00'
    },
    {
        title: 'Baixo Fender Califórnia',
        source: '/storage/instruments/baixo 2/1.jpg',
        link: route('baixo 2'),
        price: 'R$ 4.000,00'
    },
    {
        title: 'Guitarra EwaGuitars Com Capa',
        source: '/storage/instruments/guitarra/1.jpg',
        link: route('guitarra'),
        price: 'R$ 800,00'
    },
    {
        title: 'Teclado Cásio CT-S300',
        source: '/storage/instruments/teclado/4.jpg',
        link: route('teclado'),
        price: 'R$ 800,00'
    },
]
</script>

<template>
    <Head title="Lista" />

    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8">
        <header class="mb-6 w-full max-w-[335px] text-center text-gray-800 text-2xl lg:max-w-4xl">
            <div class="mb-4">Instrumentos Disponíveis</div>
            <div class="text-base mb-4">Havendo interesse favor entrar em contato nesse e-mail <span class="text-blue-600 underline">machadovalter321@mail.com</span> ou pelo WhatsApp: (11) 94975-0559</div>
            <div class="text-sm">Clique nas imagens para ver mais imagens </div>
        </header>
        <div class="duration-750 starting:opacity-0 flex w-full items-center justify-center opacity-100 transition-opacity lg:grow">
            <main class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row">
                <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                    <li v-for="instrument in instruments" :key="instrument.source" class="relative">
                        <div
                            class="group overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                            <img :src="instrument.source" alt=""
                                 class="aspect-7/10 object-cover group-hover:opacity-75" />
                            <Link as="button" :href="instrument.link" class="absolute inset-0 focus:outline-hidden">
                                <span class="sr-only">View details for {{ instrument.title }}</span>
                            </Link>
                        </div>
                        <div class="mt-2 pointer-events-none block truncate text-sm font-medium text-gray-900">
                            <p class="mb-2">{{ instrument.title }}</p>
                            <p>{{ instrument.price }}</p>
                        </div>
                    </li>
                </ul>
            </main>
        </div>
        <div class="h-14.5 hidden lg:block"></div>
    </div>
</template>
