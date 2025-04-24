"use client";

export default function Footer() {
    return (
        <footer className="bg-gray-900 text-gray-300 py-12">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <div className="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M18 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM13 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM8 9.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM5 13a2 2 0 100 4h10a2 2 0 100-4H5z" />
                            </svg>
                            <span className="ml-2 text-xl font-bold text-white">CampusVote</span>
                        </div>
                        <p className="text-sm">Secure, transparent, and accessible e-voting platform for modern campus elections.</p>
                    </div>
                    <div>
                        <h3 className="font-bold text-white mb-4">Platform</h3>
                        <ul className="space-y-2 text-sm">
                            <li><a href="#features" className="hover:text-white">Features</a></li>
                            <li><a href="#how-it-works" className="hover:text-white">How It Works</a></li>
                            <li><a href="#testimonials" className="hover:text-white">Testimonials</a></li>
                            <li><a href="#faq" className="hover:text-white">FAQ</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 className="font-bold text-white mb-4">Support</h3>
                        <ul className="space-y-2 text-sm">
                            <li><a href="#" className="hover:text-white">Help Center</a></li>
                            <li><a href="#" className="hover:text-white">Contact Us</a></li>
                            <li><a href="#" className="hover:text-white">Privacy Policy</a></li>
                            <li><a href="#" className="hover:text-white">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 className="font-bold text-white mb-4">Connect</h3>
                        <div className="flex space-x-4 mb-4">
                            <a href="#" className="text-gray-400 hover:text-white">
                                <svg className="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                </svg>
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white">
                                <svg className="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a href="#" className="text-gray-400 hover:text-white">
                                <svg className="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16.98 0a6.9 6.9 0 01 5.08 1.98A6.94 6.94 0 0124 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0116.94 24H7.06a7.06 7.06 0 01-5.03-1.89A6.96 6.96 0 010 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 00-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 003.53 1.25h9.88a5 5 0 003.53-1.25 4.73 4.73 0 001.4-3.54V7.02a5 5 0 00-1.3-3.49 4.82 4.82 0 00-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 01-12.4 0 6.2 6.2 0 016.2-6.2zm0 2.22a3.99 3.99 0 00-3.97 3.97A3.99 3.99 0 0012 15.92a3.99 3.99 0 003.97-3.97A3.99 3.99 0 0012 7.98z" />
                                </svg>
                            </a>
                        </div>
                        <p className="text-sm">© 2025 CampusVote. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    );
}