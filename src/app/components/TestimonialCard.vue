<template>
    <div class="bg-blue-50 rounded-xl p-8 flex flex-col hover:shadow-lg transition">
      <div class="flex-1">
        <div class="flex text-yellow-400 mb-4 justify-center">
          <svg v-for="n in 5" :key="n" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
          </svg>
        </div>
        <p class="text-gray-600 mb-6 text-center">{{ data.text }}</p>
      </div>
      <div class="flex items-center justify-center">
        <img :src="data.image" alt="Profile" class="h-12 w-12 rounded-full object-cover mr-4" />
        <div>
          <h4 class="font-bold text-gray-900">{{ data.name }}</h4>
          <p class="text-gray-600">{{ data.role }}</p>
          <p class="text-sm text-gray-500">{{ data.school }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script setup lang="ts">
  defineProps({ data: Object });
  </script>