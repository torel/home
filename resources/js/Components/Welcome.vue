<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import SecondaryButton from "@/Components/SecondaryButton.vue";
import {usePage} from "@inertiajs/vue3";

const page = usePage();

async function openOrShutDoor() {

    const response = await axios.get(route('garage-door'), {
        headers: { 'X-CSRF-TOKEN': `${page.props.auth.csrf_token}` }
    });
    console.log(response);

}


</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">


            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Welcome .. home
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                This site manages our house..
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        Garage
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Open or close the garage door using this button. <br>

                    <SecondaryButton class="mt-2 me-2" type="button" @click.prevent="openOrShutDoor">
                        Door
                    </SecondaryButton>
                </p>

                <!--
                <p class="mt-4 text-sm">
                    <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">
                        Explore the documentation

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                            <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </p>
                -->
            </div>

            <div>
                <div class="flex items-center">
                    <img src="garage.jpg" alt="Image from inside garage, refreshes every minute">
                </div>
            </div>
        </div>
    </div>
</template>
