"use client";

export default function FaqSection() {
    return (
        <section id="faq" className="py-16 bg-gray-50">
            <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="text-center mb-16">
                    <h2 className="text-3xl font-bold text-gray-900">Frequently Asked Questions</h2>
                    <p className="mt-4 text-xl text-gray-600">Everything you need to know about CampusVote</p>
                </div>
                <div className="space-y-6">
                    <div className="bg-white p-6 rounded-xl shadow-sm">
                        <h3 className="font-bold text-lg text-gray-900">How secure is the voting platform?</h3>
                        <p className="mt-2 text-gray-600">Our platform uses end-to-end encryption, multi-factor authentication, and blockchain technology to ensure votes cannot be tampered with or traced back to individual voters.</p>
                    </div>
                    <div className="bg-white p-6 rounded-xl shadow-sm">
                        <h3 className="font-bold text-lg text-gray-900">Can students vote from any device?</h3>
                        <p className="mt-2 text-gray-600">Yes! CampusVote works on computers, tablets, and smartphones, making it accessible to all students regardless of their preferred device.</p>
                    </div>
                    <div className="bg-white p-6 rounded-xl shadow-sm">
                        <h3 className="font-bold text-lg text-gray-900">How is voter eligibility verified?</h3>
                        <p className="mt-2 text-gray-600">We integrate with your university&apos;s student information system to verify student status and prevent duplicate voting while maintaining anonymity.</p>
                    </div>
                    <div className="bg-white p-6 rounded-xl shadow-sm">
                        <h3 className="font-bold text-lg text-gray-900">How quickly are results available?</h3>
                        <p className="mt-2 text-gray-600">Results are calculated instantly when the voting period ends and can be published immediately or at a scheduled time as determined by election administrators.</p>
                    </div>
                </div>
            </div>
        </section>
    );
}