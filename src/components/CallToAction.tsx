import { ShoppingCart, Heart, Share2 } from 'lucide-react';

export function CallToAction() {
  return (
    <section className="py-20 bg-gradient-to-b from-black to-gray-900">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 className="text-4xl md:text-5xl font-bold text-white mb-6">
          Ready to Light Up Your Ride?
        </h2>
        <p className="text-xl text-gray-400 mb-12">
          Transform your vehicle with professional-grade RGB rock lights. Easy installation, stunning results.
        </p>

        <div className="bg-gradient-to-br from-white/10 to-white/5 border border-white/20 rounded-2xl p-8 mb-8">
          <div className="flex flex-col md:flex-row items-center justify-between gap-6">
            <div className="text-left">
              <div className="text-sm text-gray-400 mb-1">Special Offer</div>
              <div className="text-3xl md:text-4xl font-bold text-white mb-2">
                <span className="line-through text-gray-500 text-2xl mr-3">$149.99</span>
                $99.99
              </div>
              <div className="text-green-400 text-sm">Save $50 - Limited Time Only!</div>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <button className="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-8 py-4 rounded-lg flex items-center gap-2 transition-all transform hover:scale-105 shadow-lg shadow-purple-500/30">
                <ShoppingCart className="w-5 h-5" />
                Add to Cart
              </button>
              <button className="bg-white/10 hover:bg-white/20 text-white px-6 py-4 rounded-lg border border-white/20 transition-all">
                <Heart className="w-5 h-5" />
              </button>
              <button className="bg-white/10 hover:bg-white/20 text-white px-6 py-4 rounded-lg border border-white/20 transition-all">
                <Share2 className="w-5 h-5" />
              </button>
            </div>
          </div>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm text-gray-400">
          <div className="flex items-center justify-center gap-2">
            <span>✓</span>
            <span>Free Shipping</span>
          </div>
          <div className="flex items-center justify-center gap-2">
            <span>✓</span>
            <span>2-Year Warranty</span>
          </div>
          <div className="flex items-center justify-center gap-2">
            <span>✓</span>
            <span>30-Day Returns</span>
          </div>
          <div className="flex items-center justify-center gap-2">
            <span>✓</span>
            <span>24/7 Support</span>
          </div>
        </div>
      </div>

      {/* Footer */}
      <footer className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20 pt-12 border-t border-white/10">
        <div className="text-center text-gray-500 text-sm">
          <p>&copy; 2026 RGB Rock Lights. All rights reserved.</p>
        </div>
      </footer>
    </section>
  );
}
