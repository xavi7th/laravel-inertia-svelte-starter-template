<script context="module">
  import PageLayout from "@appuser-pages/Layouts/AuthenticatedLayout.svelte";
  export const layout = PageLayout;
</script>

<script>
  import { pageTitle } from "@/stores";

  pageTitle.update((title) => "User Dashboard");
</script>

<template>
  <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mt-12 ml-8">User Dashboard</h2>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">You're logged in!</div>
      </div>
    </div>
  </div>
</template>
