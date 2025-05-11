<script setup lang="ts">
import Navbar from "../layouts/navbar.vue";
import Footer from "../layouts/footer.vue";
import FeatureCard from "../components/FeatureCard.vue";
import TestimonialCard from "../components/TestimonialCard.vue";
import FaqItem from "../components/FaqItem.vue";

const redirectToLogin = () => {
  window.location.href =
    import.meta.env.VITE_LOGIN_URL || "http://127.0.0.1:8000/";
};

const features = [
  {
    title: "Secure Voting",
    description: "End-to-end encryption...",
    icon: "lock",
  },
  {
    title: "Mobile Friendly",
    description: "Vote from anywhere...",
    icon: "device-mobile",
  },
  {
    title: "Real-time Results",
    description: "Instant vote tallies...",
    icon: "chart-bar",
  },
  {
    title: "Student Verification",
    description: "Multi-factor authentication...",
    icon: "user-check",
  },
  {
    title: "Election Management",
    description: "Create and schedule elections...",
    icon: "calendar",
  },
  {
    title: "Candidate Profiles",
    description: "Rich candidate info...",
    icon: "user-circle",
  },
];

const testimonials = [
  {
    text: "CampusVote increased our student participation by 78%...",
    name: "Sarah Johnson",
    role: "Student Affairs Director",
    school: "University of California",
    image: "https://randomuser.me/api/portraits/women/45.jpg ",
  },
  {
    text: "The security features gave us complete confidence in the election results.",
    name: "Michael Chen",
    role: "Student Government President",
    school: "NYU",
    image: "https://randomuser.me/api/portraits/men/32.jpg ",
  },
  {
    text: "With CampusVote, we had everything configured in under an hour.",
    name: "Dr. Angela Rodriguez",
    role: "Dean of Students",
    school: "Texas A&M",
    image: "https://randomuser.me/api/portraits/women/68.jpg ",
  },
];

const faqs = [
  {
    question: "How secure is the platform?",
    answer: "Our platform implements industry-leading security measures...",
  },
  {
    question: "How do you prevent duplicate voting?",
    answer:
      "Our system integrates with your institution's student information system...",
  },
  {
    question: "Can students vote from their mobile phones?",
    answer:
      "Yes! Our platform is fully responsive and works seamlessly on all devices.",
  },
  {
    question: "How long does it take to set up an election?",
    answer:
      "Most institutions can set up their first election within 1-2 days.",
  },
];
</script>

<template>
  <div class="min-h-screen flex flex-col bg-white">
    <Navbar :redirectToLogin="redirectToLogin" />

    <!-- Hero Section -->
    <section
      class="bg-gradient-to-b from-blue-800 to-blue-700 text-white py-16 md:py-24"
    >
      <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center"
      >
        <div class="animate-fade-in-up">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Campus Elections Made Simple, Secure, and Digital
          </h1>
          <p class="text-xl mb-8">
            Transform your student body elections with our modern e-voting
            platform.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <button
              @click="redirectToLogin"
              class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-6 rounded-lg transition transform hover:-translate-y-1"
            >
              Vote Now
            </button>
            <a
              href="#how-it-works"
              class="border border-white hover:bg-white hover:text-blue-700 text-white font-bold py-3 px-6 rounded-lg transition transform hover:-translate-y-1"
              >Learn More</a
            >
          </div>
        </div>
        <div class="hidden md:block relative h-80 animate-fade-in">
          <div
            class="absolute inset-0 bg-white/10 rounded-lg overflow-hidden p-6 backdrop-blur-sm"
          >
            <div
              class="relative h-full w-full bg-blue-600/50 rounded-lg border border-white/30 flex items-center justify-center"
            >
              <div class="bg-white p-6 rounded-lg shadow-lg w-4/5">
                <div class="flex items-center justify-center mb-6">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-12 w-12 text-blue-700"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </div>
                <div class="text-center text-gray-800">
                  <h3 class="font-bold text-xl mb-2">Vote Confirmation</h3>
                  <p class="text-gray-600 mb-4">
                    Your vote for Student Council President has been recorded.
                  </p>
                  <div
                    class="bg-blue-100 p-3 rounded-lg text-blue-800 font-medium"
                  >
                    Vote ID: CS-2025-8574
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Platform Features
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our e-voting platform combines security, accessibility, and ease of
            use.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <FeatureCard
            v-for="(feature, i) in features"
            :key="i"
            :title="feature.title"
            :description="feature.description"
            :icon="feature.icon"
          />
        </div>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            How It Works
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Our platform simplifies the entire election process from start to
            finish
          </p>
        </div>

        <div class="relative">
          <!-- Timeline line -->
          <div
            class="hidden md:block absolute top-0 left-1/2 w-1 h-full bg-blue-200 transform -translate-x-1/2"
          ></div>

          <!-- Step 1 -->
          <div class="md:flex mb-12 md:mb-24 items-center">
            <div
              class="md:w-1/2 md:pr-12 md:text-right mb-8 md:mb-0 animate-fade-in"
            >
              <div
                class="bg-white p-6 rounded-xl shadow-md inline-block text-left md:text-right"
              >
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                  1. Election Setup
                </h3>
                <p class="text-gray-600">
                  Administrators create the election, add positions, set voting
                  periods, and define eligibility rules through an intuitive
                  dashboard.
                </p>
              </div>
            </div>
            <div class="md:w-1/2 md:pl-12 flex justify-center md:justify-start">
              <div
                class="bg-blue-600 rounded-full h-12 w-12 flex items-center justify-center text-white font-bold text-lg relative z-10"
              >
                1
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="md:flex mb-12 md:mb-24 items-center">
            <div
              class="md:w-1/2 md:pr-12 flex justify-center md:justify-end order-1 md:order-none"
            >
              <div
                class="bg-blue-600 rounded-full h-12 w-12 flex items-center justify-center text-white font-bold text-lg relative z-10"
              >
                2
              </div>
            </div>
            <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 animate-fade-in">
              <div class="bg-white p-6 rounded-xl shadow-md inline-block">
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                  2. Candidate Registration
                </h3>
                <p class="text-gray-600">
                  Candidates register with their profiles, photos, and campaign
                  platforms, which are reviewed by administrators before
                  publication.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="md:flex mb-12 md:mb-24 items-center">
            <div
              class="md:w-1/2 md:pr-12 md:text-right mb-8 md:mb-0 animate-fade-in"
            >
              <div
                class="bg-white p-6 rounded-xl shadow-md inline-block text-left md:text-right"
              >
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                  3. Voter Authentication
                </h3>
                <p class="text-gray-600">
                  Students log in using their school credentials and complete
                  two-factor authentication to verify their identity.
                </p>
              </div>
            </div>
            <div class="md:w-1/2 md:pl-12 flex justify-center md:justify-start">
              <div
                class="bg-blue-600 rounded-full h-12 w-12 flex items-center justify-center text-white font-bold text-lg relative z-10"
              >
                3
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="md:flex items-center">
            <div
              class="md:w-1/2 md:pr-12 flex justify-center md:justify-end order-1 md:order-none"
            >
              <div
                class="bg-blue-600 rounded-full h-12 w-12 flex items-center justify-center text-white font-bold text-lg relative z-10"
              >
                4
              </div>
            </div>
            <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 animate-fade-in">
              <div class="bg-white p-6 rounded-xl shadow-md inline-block">
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                  4. Secure Voting
                </h3>
                <p class="text-gray-600">
                  Students cast their votes privately through an easy-to-use
                  ballot interface, receiving a confirmation receipt.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            What Schools Are Saying
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Trusted by universities and colleges nationwide.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <TestimonialCard
            v-for="(testimonial, i) in testimonials"
            :key="i"
            :data="testimonial"
          />
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Frequently Asked Questions
          </h2>
          <p class="text-xl text-gray-600">
            Everything you need to know about our e-voting platform.
          </p>
        </div>
        <div class="space-y-6">
          <FaqItem
            v-for="(faq, i) in faqs"
            :key="i"
            :question="faq.question"
            :answer="faq.answer"
          />
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section
      class="py-16 bg-gradient-to-b from-blue-700 to-blue-800 text-white"
    >
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
          Ready to Transform Your Campus Elections?
        </h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">
          Join hundreds of schools already using CampusVote.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button
            @click="redirectToLogin"
            class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1"
          >
            Request a Demo
          </button>
          <a
            href="#pricing"
            class="border border-white hover:bg-white hover:text-blue-700 text-white font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1"
            >View Pricing</a
          >
        </div>
      </div>
    </section>

    <!-- Footer -->
    <Footer />
  </div>
</template>
