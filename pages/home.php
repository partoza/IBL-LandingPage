<section id="home" class="w-full h-screen relative overflow-hidden">
  <!-- Full Screen Video Background -->
  <div class="absolute inset-0 z-0">
    <video autoplay muted loop class="w-full h-full object-cover">
      <source src="https://assets.mixkit.co/videos/preview/mixkit-white-sands-of-a-beach-1080p-large.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-[#f7ecec]"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 w-full h-full grid grid-cols-1 md:grid-cols-2 text-black/80">
    <!-- Left Side -->
    <div class="flex items-center justify-center p-8 scroll-animate">
      <div class="text-center md:text-left">
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-black tracking-tight mb-6">
          COMPANY<br>
          <span class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">REEL</span>
        </h1>
        <div class="w-20 h-1 bg-red-500 mx-auto md:mx-0 mb-8"></div>
        <p class="text-xl font-light opacity-90">Ideas Beyond Limits</p>
      </div>
    </div>

    <!-- Right Side -->
    <div class="flex items-center p-8 scroll-animate animate-delay-1">
      <div class="space-y-8 max-w-md">
        <div class="scroll-animate animate-delay-2">
          <p class="text-2xl font-semibold mb-2">We are Ideas Beyond Limits.</p>
          <p class="text-lg font-light opacity-90">Your world-class marketing solutions provider.</p>
        </div>

        <div class="scroll-animate animate-delay-3 bg-white/10 backdrop-blur-sm p-6 rounded-2xl">
          <div class="space-y-2 text-sm font-medium">
            <div class="flex items-center">
              <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
              <span>1,000+ projects delivered</span>
            </div>
            <div class="flex items-center">
              <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
              <span>200+ partners and clients served</span>
            </div>
            <div class="flex items-center">
              <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
              <span>25+ years of proven expertise</span>
            </div>
          </div>
        </div>

        <div class="scroll-animate animate-delay-4">
          <p class="text-lg font-medium mb-4 leading-relaxed">
            We build booths that sell.<br>
            We design visuals that speak.<br>
            We create marketing ideas without limits.
          </p>
        </div>

        <div class="scroll-animate animate-delay-1">
          <p class="text-base font-light opacity-90 leading-relaxed">
            From concept to execution,<br>
            we serve with purpose,<br>
            create with impact,<br>
            and deliver results.
          </p>
        </div>

        <div class="scroll-animate animate-delay-2 pt-4">
          <p class="text-xl font-semibold mb-2">We are Ideas Beyond Limits.</p>
          <p class="text-lg font-medium text-[#7e0505]">Grow your business with us today.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.scroll-animate {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.8s ease-out;
}

.scroll-animate.animate {
  opacity: 1;
  transform: translateY(0);
}

.animate-delay-1 { transition-delay: 0.2s; }
.animate-delay-2 { transition-delay: 0.4s; }
.animate-delay-3 { transition-delay: 0.6s; }
.animate-delay-4 { transition-delay: 0.8s; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.scroll-animate').forEach((el) => {
    observer.observe(el);
  });
});
</script>