'use client';

export default function CtaSection({ redirectToLogin }: { redirectToLogin: () => void }) {
    return (
        <section className="py-16 bg-blue-700 text-white">
            <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 className="text-3xl font-bold mb-6">Ready to modernize your campus elections?</h2>
                <p className="text-xl mb-8">Join thousands of students already using CampusVote for fair and accessible elections.</p>
                <button onClick={redirectToLogin} className="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-8 rounded-lg text-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                    Get Started Now
                </button>
            </div>
        </section>
    );
}