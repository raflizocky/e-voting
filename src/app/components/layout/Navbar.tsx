'use client';

import { useState } from 'react';

export default function Navbar({ redirectToLogin }: { redirectToLogin: () => void }) {
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    return (
        <nav className="bg-blue-700 text-white">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="flex items-center justify-between h-16">
                    <div className="flex items-center">
                        <div className="flex-shrink-0">
                            <div className="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M18 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM13 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM8 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM5 13a2 2 0 100 4h10a2 2 0 100-4H5z" />
                                </svg>
                                <span className="ml-2 text-xl font-bold">CampusVote</span>
                            </div>
                        </div>
                        <div className="hidden md:block">
                            <div className="ml-10 flex items-baseline space-x-4">
                                <a href="#features" className="px-3 py-2 rounded-md font-medium hover:bg-blue-600">Features</a>
                                <a href="#how-it-works" className="px-3 py-2 rounded-md font-medium hover:bg-blue-600">How It Works</a>
                                <a href="#testimonials" className="px-3 py-2 rounded-md font-medium hover:bg-blue-600">Testimonials</a>
                                <a href="#faq" className="px-3 py-2 rounded-md font-medium hover:bg-blue-600">FAQ</a>
                            </div>
                        </div>
                    </div>
                    <div className="hidden md:block">
                        <button onClick={redirectToLogin} className="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                            Login
                        </button>
                    </div>
                    <div className="-mr-2 flex md:hidden">
                        <button
                            onClick={() => setIsMenuOpen(!isMenuOpen)}
                            className="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-blue-600 focus:outline-none"
                        >
                            <svg className="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d={isMenuOpen ? "M6 18L18 6M6 6l12 12" : "M4 6h16M4 12h16M4 18h16"} />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {/* Mobile menu */}
            {isMenuOpen && (
                <div className="md:hidden">
                    <div className="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                        <a href="#features" className="block px-3 py-2 rounded-md font-medium hover:bg-blue-600">Features</a>
                        <a href="#how-it-works" className="block px-3 py-2 rounded-md font-medium hover:bg-blue-600">How It Works</a>
                        <a href="#testimonials" className="block px-3 py-2 rounded-md font-medium hover:bg-blue-600">Testimonials</a>
                        <a href="#faq" className="block px-3 py-2 rounded-md font-medium hover:bg-blue-600">FAQ</a>
                        <button onClick={redirectToLogin} className="mt-3 w-full flex items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded-lg">
                            Login
                        </button>
                    </div>
                </div>
            )}
        </nav>
    );
}