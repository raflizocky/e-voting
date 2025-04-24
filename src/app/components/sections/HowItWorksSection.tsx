"use client";

export default function FaqSection() {
    return (
        <section id="how-it-works" className="py-16 bg-gray-50">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center mb-16">
                    <h2 className="text-3xl font-bold text-gray-900">How CampusVote Works</h2>
                    <p className="mt-4 text-xl text-gray-600">Simple, transparent, and efficient e-voting</p>
                </div>
                <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div className="bg-white p-6 rounded-xl shadow-md">
                        <div className="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700 font-bold text-xl">1</div>
                        <h3 className="text-lg font-bold text-gray-900 mb-3">Authentication</h3>
                        <p className="text-gray-600 text-sm">Students login with their university credentials for secure access.</p>
                    </div>
                    <div className="bg-white p-6 rounded-xl shadow-md">
                        <div className="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700 font-bold text-xl">2</div>
                        <h3 className="text-lg font-bold text-gray-900 mb-3">Candidate Selection</h3>
                        <p className="text-gray-600 text-sm">Browse candidate profiles and platforms before making your choice.</p>
                    </div>
                    <div className="bg-white p-6 rounded-xl shadow-md">
                        <div className="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700 font-bold text-xl">3</div>
                        <h3 className="text-lg font-bold text-gray-900 mb-3">Vote Casting</h3>
                        <p className="text-gray-600 text-sm">Submit your ballot with just a few clicks from any device.</p>
                    </div>
                    <div className="bg-white p-6 rounded-xl shadow-md">
                        <div className="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-4 text-blue-700 font-bold text-xl">4</div>
                        <h3 className="text-lg font-bold text-gray-900 mb-3">Results</h3>
                        <p className="text-gray-600 text-sm">Get instant, accurate results as soon as the voting period ends.</p>
                    </div>
                </div>
            </div>
        </section>
    );
}