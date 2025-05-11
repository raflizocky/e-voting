<template>
    <details class="group bg-white rounded-xl shadow-md overflow-hidden">
      <summary class="flex justify-between items-center cursor-pointer p-6">
        <h3 class="text-lg font-semibold text-gray-900">{{ question }}</h3>
        <span class="text-blue-600 group-open:rotate-180 transition-transform">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </span>
      </summary>
      <div class="px-6 pb-6 pt-0 text-gray-600">
        <p>{{ answer }}</p>
      </div>
    </details>
  </template>
  
  <script setup lang="ts">
  defineProps({ question: String, answer: String });
  </script>