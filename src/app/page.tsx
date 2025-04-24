'use client';

import Navbar from './components/layout/Navbar';
import Footer from './components/layout/Footer';
import {
  HeroSection,
  FeaturesSection,
  HowItWorksSection,
  TestimonialsSection,
  FaqSection,
  CtaSection
} from './components/sections/index';

export default function Home() {
  const redirectToLogin = () => {
    window.location.href = 'http://127.0.0.1:8000/';
  };

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar redirectToLogin={redirectToLogin} />
      <HeroSection redirectToLogin={redirectToLogin} />
      <FeaturesSection />
      <HowItWorksSection />
      <TestimonialsSection />
      <FaqSection />
      <CtaSection redirectToLogin={redirectToLogin} />
      <Footer />
    </div>
  );
}