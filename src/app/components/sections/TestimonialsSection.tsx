"use client";

export default function FaqSection() {
    return (
        <section id="testimonials" className="py-16 bg-white">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center mb-16">
                    <h2 className="text-3xl font-bold text-gray-900">Trusted by Campus Leaders</h2>
                    <p className="mt-4 text-xl text-gray-600">See what students and administrators say about CampusVote</p>
                </div>
                <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div className="bg-gray-50 p-8 rounded-xl">
                        <div className="flex items-center mb-6">
                            <div className="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center text-white font-bold text-xl">M</div>
                            <div className="ml-4">
                                <h4 className="font-bold">Maria Rodriguez</h4>
                                <p className="text-gray-600 text-sm">Student Body President</p>
                            </div>
                        </div>
                        <p className="text-gray-700">&quot;CampusVote increased our election turnout by 45%. The platform is so easy to use that students who never participated before are now voting!&quot;</p>
                    </div>
                    <div className="bg-gray-50 p-8 rounded-xl">
                        <div className="flex items-center mb-6">
                            <div className="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center text-white font-bold text-xl">J</div>
                            <div className="ml-4">
                                <h4 className="font-bold">Dr. James Chen</h4>
                                <p className="text-gray-600 text-sm">Faculty Advisor</p>
                            </div>
                        </div>
                        <p className="text-gray-700">&quot;The security features and audit capabilities give us complete confidence in the integrity of our student elections. Setup was surprisingly simple.&quot;</p>
                    </div>
                    <div className="bg-gray-50 p-8 rounded-xl">
                        <div className="flex items-center mb-6">
                            <div className="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center text-white font-bold text-xl">T</div>
                            <div className="ml-4">
                                <h4 className="font-bold">Tyler Washington</h4>
                                <p className="text-gray-600 text-sm">Student Senator</p>
                            </div>
                        </div>
                        <p className="text-gray-700">&quot;Being able to vote from my phone made the whole process so convenient. The candidate information section helped me make informed choices.&quot;</p>
                    </div>
                </div>
            </div>
        </section>
    );
}