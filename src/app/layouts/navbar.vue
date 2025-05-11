<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue';

defineProps({
  redirectToLogin: {
    type: Function,
    required: true
  }
});

const isMenuOpen = ref(false);
const navLinks = [
  { href: '#features', text: 'Features' },
  { href: '#how-it-works', text: 'How It Works' },
  { href: '#testimonials', text: 'Testimonials' },
  { href: '#faq', text: 'FAQ' }
];

// Close menu when clicking outside
const handleClickOutside = (event: MouseEvent) => {
  if (!(event.target as HTMLElement).closest('nav')) {
    isMenuOpen.value = false;
  }
};

onMounted(() => document.addEventListener('click', handleClickOutside));
onUnmounted(() => document.removeEventListener('click', handleClickOutside));

function toggleMenu() {
  isMenuOpen.value = !isMenuOpen.value;
}
</script>

<template>
  <nav class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="/" class="flex items-center" aria-label="CampusVote Home">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                <path d="M18 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM13 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM8 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM5 13a2 2 0 100 4h10a2 2 0 100-4H5z" />
              </svg>
              <span class="ml-2 text-xl font-bold">CampusVote</span>
            </a>
          </div>
          
          <!-- Desktop Navigation -->
          <div class="hidden md:block ml-10">
            <div class="flex items-baseline space-x-4">
              <a v-for="link in navLinks" :key="link.href"
                 :href="link.href" 
                 class="px-3 py-2 rounded-md font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                {{ link.text }}
              </a>
            </div>
          </div>
        </div>
        
        <!-- Desktop Login Button -->
        <div class="hidden md:block">
          <button 
            @click="redirectToLogin" 
            class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded-lg transition duration-300 
                   hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-700"
            aria-label="Login">
            Login
          </button>
        </div>
        
        <!-- Mobile Menu Button -->
        <div class="-mr-2 flex md:hidden">
          <button
            @click="toggleMenu"
            class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-white"
            :aria-expanded="isMenuOpen"
            aria-label="Toggle menu">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    :d="isMenuOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div v-show="isMenuOpen" class="md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a v-for="link in navLinks" :key="link.href"
           :href="link.href" 
           class="block px-3 py-2 rounded-md font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
          {{ link.text }}
        </a>
        <button 
          @click="redirectToLogin" 
          class="mt-3 w-full flex items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-white"
          aria-label="Login">
          Login
        </button>
      </div>
    </div>
  </nav>
</template>
