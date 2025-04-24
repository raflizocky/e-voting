'use client';

export default function HeroSection({ redirectToLogin }: { redirectToLogin: () => void }) {
    return (
        <section className="bg-gradient-to-b from-blue-800 to-blue-700 text-white">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 className="text-4xl md:text-5xl font-bold mb-6">Campus Elections Made Simple, Secure, and Digital</h1>
                        <p className="text-xl mb-8">Transform your student body elections with our modern e-voting platform. Increase participation, ensure integrity, and get instant results.</p>
                        <div className="flex flex-col sm:flex-row gap-4">
                            <button onClick={redirectToLogin} className="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-6 rounded-lg text-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                                Vote Now
                            </button>
                            <a href="#how-it-works" className="bg-transparent border-2 border-white hover:bg-white hover:text-blue-700 text-white font-bold py-3 px-6 rounded-lg text-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div className="hidden md:block relative h-80">
                        <div className="absolute inset-0 bg-white/10 rounded-lg overflow-hidden p-6 backdrop-blur-sm">
                            <div className="relative h-full w-full bg-blue-600/50 rounded-lg border border-white/30 flex items-center justify-center">
                                <div className="bg-white p-6 rounded-lg shadow-lg w-4/5">
                                    <div className="flex items-center justify-center mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" className="h-12 w-12 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                                            <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                                        </svg>
                                    </div>
                                    <div className="text-center text-gray-800">
                                        <h3 className="font-bold text-xl mb-2">Vote Confirmation</h3>
                                        <p className="text-gray-600 mb-4">Your vote for Student Council President has been recorded.</p>
                                        <div className="bg-blue-100 p-3 rounded-lg text-blue-800 font-medium">
                                            Vote ID: CS-2025-8574
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="wave-divider">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffffff" fillOpacity="1" d="M0,96L48,117.3C96,139,192,181,288,181.3C384,181,480,139,576,138.7C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
        </section>
    );
}