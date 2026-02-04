import installationImage from 'figma:asset/d45c4aeaca8fc9f422b306735091731fb835e7d1.png';

export function InstallationEffect() {
  return (
    <section className="py-20 bg-black">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-white mb-4">
            Stunning Visual Impact
          </h2>
          <p className="text-xl text-gray-400">
            See the dramatic transformation these lights bring to your vehicle
          </p>
        </div>

        <div className="relative">
          <img 
            src={installationImage} 
            alt="Installation Effect" 
            className="w-full max-w-5xl mx-auto rounded-2xl shadow-2xl"
          />
          
          {/* Gradient overlay for extra effect */}
          <div className="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent pointer-events-none rounded-2xl"></div>
        </div>

        <div className="mt-12 grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
          <div className="text-center">
            <div className="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-full mx-auto mb-4 flex items-center justify-center">
              <span className="text-2xl">🌈</span>
            </div>
            <h3 className="text-lg font-bold text-white mb-2">16 Million Colors</h3>
            <p className="text-gray-400 text-sm">Choose from endless color combinations</p>
          </div>
          
          <div className="text-center">
            <div className="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full mx-auto mb-4 flex items-center justify-center">
              <span className="text-2xl">✨</span>
            </div>
            <h3 className="text-lg font-bold text-white mb-2">Multiple Modes</h3>
            <p className="text-gray-400 text-sm">Static, flash, fade, and music sync</p>
          </div>
          
          <div className="text-center">
            <div className="w-16 h-16 bg-gradient-to-br from-green-500 to-cyan-500 rounded-full mx-auto mb-4 flex items-center justify-center">
              <span className="text-2xl">📱</span>
            </div>
            <h3 className="text-lg font-bold text-white mb-2">App Control</h3>
            <p className="text-gray-400 text-sm">Full control from your smartphone</p>
          </div>
        </div>
      </div>
    </section>
  );
}
