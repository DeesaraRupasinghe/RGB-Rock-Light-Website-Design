import upgradeImage from 'figma:asset/be4274e235ef3d81d8be90465866c03f33807760.png';

export function Features() {
  return (
    <section className="py-20 bg-gradient-to-b from-black to-gray-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-white mb-4">
            Premium Upgrade Features
          </h2>
          <p className="text-xl text-gray-400">
            Superior quality and safety compared to standard rock lights
          </p>
        </div>

        <div className="mb-12">
          <img 
            src={upgradeImage} 
            alt="Highlight Upgrade Comparison" 
            className="w-full max-w-4xl mx-auto rounded-2xl shadow-2xl"
          />
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          <div className="bg-gradient-to-br from-red-500/10 to-red-600/5 border border-red-500/20 rounded-xl p-6 hover:border-red-500/40 transition-all">
            <div className="w-12 h-12 bg-red-500/20 rounded-lg flex items-center justify-center mb-4">
              <div className="text-2xl">💡</div>
            </div>
            <h3 className="text-xl font-bold text-white mb-2">36 LED Upgrade</h3>
            <p className="text-gray-400">
              Enhanced brightness with 36 LEDs compared to standard 16 LED lights for maximum visibility and impact.
            </p>
          </div>

          <div className="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 border border-yellow-500/20 rounded-xl p-6 hover:border-yellow-500/40 transition-all">
            <div className="w-12 h-12 bg-yellow-500/20 rounded-lg flex items-center justify-center mb-4">
              <div className="text-2xl">🔒</div>
            </div>
            <h3 className="text-xl font-bold text-white mb-2">Built-in Fuse</h3>
            <p className="text-gray-400">
              Upgraded with safety fuse protection to prevent electrical damage and ensure long-lasting performance.
            </p>
          </div>

          <div className="bg-gradient-to-br from-green-500/10 to-green-600/5 border border-green-500/20 rounded-xl p-6 hover:border-green-500/40 transition-all">
            <div className="w-12 h-12 bg-green-500/20 rounded-lg flex items-center justify-center mb-4">
              <div className="text-2xl">🔗</div>
            </div>
            <h3 className="text-xl font-bold text-white mb-2">Secure Connection</h3>
            <p className="text-gray-400">
              Upgraded connectors prevent dropping and ensure stable, reliable connections in all conditions.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
