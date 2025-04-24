"use client";

export default function FaqSection() {
    return (
        <section id="features" className="py-16 bg-white">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center mb-16">
                    <h2 className="text-3xl font-bold text-gray-900">Why Choose CampusVote?</h2>
                    <p className="mt-4 text-xl text-gray-600">Our platform is built with campus elections in mind</p>
                </div>
                <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div className="bg-blue-50 p-8 rounded-xl">
                        <div className="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                            </svg>
                        </div>
                        <h3 className="text-xl font-bold text-gray-900 mb-4">Secure & Anonymous</h3>
                        <p className="text-gray-600">End-to-end encryption ensures votes remain private and tamper-proof while maintaining voter anonymity.</p>
                    </div>
                    <div className="bg-blue-50 p-8 rounded-xl">
                        <div className="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                            </svg>
                        </div>
                        <h3 className="text-xl font-bold text-gray-900 mb-4">Easy Integration</h3>
                        <p className="text-gray-600">Seamlessly connects with existing student information systems for verified voter authentication.</p>
                    </div>
                    <div className="bg-blue-50 p-8 rounded-xl">
                        <div className="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clipRule="evenodd" />
                            </svg>
                        </div>
                        <h3 className="text-xl font-bold text-gray-900 mb-4">User-Friendly</h3>
                        <p className="text-gray-600">Intuitive interface accessible from any device, making it easy for all students to participate.</p>
                    </div>
                </div>
            </div>
        </section>
    );
}