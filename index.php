<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Heavens, Earth & Hell</title>
    <style>
 body {
        font-family: Arial, sans-serif;
        background: url(trio.jpeg) no-repeat center top fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        color: white;
        text-align: center;
        min-height: 100vh;
        position: relative;
        overflow-x: hidden;
    }

    .parallax-bg {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url(bitiful.jpeg) no-repeat center top;
        background-size: cover;
        z-index: -1;
    }

    .content {
        position: relative;
        z-index: 1;
    }

        .mist {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 100%);
            pointer-events: none;
            animation: mistAnimation 20s infinite alternate;
        }

        @keyframes mistAnimation {
            0% { opacity: 0.2; }
            100% { opacity: 0.8; }
        }

        .cloud {
            position: fixed;
            width: 200px;
            height: 60px;
            background: rgba(255,255,255,0.4);
            border-radius: 50px;
            filter: blur(10px);
            animation: cloudAnimation 30s infinite linear;
        }

        @keyframes cloudAnimation {
            0% { transform: translateX(-200px); }
            100% { transform: translateX(100vw); }
        }

        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .story {
            max-width: 800px;
            margin: 0 auto 20px;
            text-align: justify;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .door-label {
            font-size: 2em;
            margin-top: 20px;
            margin-bottom: 10px;
            animation: electricEffect 1s ease-in-out infinite;
        }


        .door-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 2vw;
            height: 80vh;
            margin-top: 20px;
        }

        .door {
            width: 25vw;
            height: 100%;
            background-size: cover;
            background-position: center;
            cursor: pointer;
            box-shadow: 0 0 15px white;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .door:hover {
            box-shadow: 0 0 30px white;
            transform: scale(1.05);
        }


        @keyframes glowingAura {
            0% { text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff; }
            33% { text-shadow: 0 0 10px #0f0, 0 0 20px #0f0, 0 0 30px #0f0; }
            66% { text-shadow: 0 0 10px #f00, 0 0 20px #f00, 0 0 30px #f00; }
            100% { text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff; }
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            animation: glowingAura 6s linear infinite;
        }

        @keyframes electricEffect {
            0% { text-shadow: 0 0 2px #fff, 0 0 4px #fff, 0 0 6px #fff, 0 0 8px #00f, 0 0 10px #00f; }
            50% { text-shadow: 0 0 4px #fff, 0 0 6px #fff, 0 0 8px #fff, 0 0 10px #00f, 0 0 12px #00f; }
            100% { text-shadow: 0 0 2px #fff, 0 0 4px #fff, 0 0 6px #fff, 0 0 8px #00f, 0 0 10px #00f; }
        }

        .door-label {
            font-size: 2em;
            margin-top: 20px;
            animation: electricEffect 1s ease-in-out infinite;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            z-index: 1000;
            display: none;
        }



@keyframes glow {
    0% {
        text-shadow: 0 0 5px rgba(255, 255, 255, 0.8), 0 0 10px rgba(255, 255, 255, 0.6);
    }
    100% {
        text-shadow: 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 0.8);
    }
}

.move {
  display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
}

.story {
            max-width: 800px;
            margin: 0 auto 40px;
            text-align: justify;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }
        
        .story p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="parallax-bg"></div>
    <div class="mist"></div>
    <div class="cloud" style="top: 20%; left: -200px;"></div>
    <div class="cloud" style="top: 40%; left: -100px; animation-delay: -10s;"></div>
    <div class="cloud" style="top: 60%; left: -150px; animation-delay: -20s;"></div>

    <div class="content">
        <h1>The Heavens, Earth & Hell</h1>
        <div class="story">
            <p>Welcome, weary traveler, to the Crossroads of Existence. You stand at the precipice of a choice that will echo through eternity. Before you lie three doors, each a gateway to realms beyond mortal comprehension. The air crackles with otherworldly energy, and the very fabric of reality seems to bend around you.</p>
            
            <p>Your journey here has been long and fraught with peril. You've traversed treacherous landscapes, outsmarted cunning adversaries, and unraveled ancient mysteries. But nothing could have prepared you for this moment – the culmination of your quest, the ultimate decision.</p>
            
            <p>To your left stands a door of radiant light, its surface shimmering with an ethereal glow. This is the gateway to the Celestial Heights of Heaven. Whispers of angelic choirs and the promise of eternal bliss emanate from beyond. But beware, for the path to paradise is not without its trials. Are you pure of heart and steadfast in spirit to face the judgement that awaits?</p>
            
            <p>In the center, a door of familiar wood and iron represents the Mortal Realm of Earth. It may seem mundane compared to its counterparts, but do not be fooled. Earth holds its own magic – the beauty of nature, the warmth of human connection, and the endless potential for growth and change. Choosing this door means embracing the known, but also accepting the challenges and joys of mortal life.</p>
            
            <p>To your right looms a door of obsidian and flame, pulsing with an ominous energy. This is the entrance to the Infernal Depths of Hell. The promise of power and forbidden knowledge beckons from the other side, but at what cost? The path through Hell is treacherous, filled with deception and torment. Only the most cunning and resilient souls dare to tread here.</p>
            
            <p>As you contemplate your choice, remember that appearances can be deceiving. Heaven may not be the paradise you envision, Earth could hold wonders beyond your wildest dreams, and Hell... well, Hell might just surprise you.</p>
            
            <p>The decision before you will shape not only your destiny but the fate of worlds unknown. Each realm holds its own trials and treasures, its own lessons and revelations. The journey ahead will test you in ways you cannot imagine, pushing you to the very limits of your being.</p>
            
            <p>But fear not, for you have come this far. Trust in your instincts, draw upon the wisdom you've gained, and let your heart guide you. For in the end, it is not the destination that defines us, but the choices we make along the way.</p>
            
            <p>Now, brave soul, the moment has come. Which door will you choose? Will you ascend to the heavens, remain on familiar ground, or descend into the depths? The choice is yours, and yours alone. Step forward, reach out your hand, and embrace your destiny.</p>
        </div>

        <div class="door-label">Take your pick:</div>
        <div class="door-container">
            <div class="door" id="heaven-door" data-target="heaven.php" data-prefix="thedoorofheaven_"></div>
            <div class="door" id="normal-door" data-target="earth.php" data-prefix="thedoor_"></div>
            <div class="door" id="hell-door" data-target="hell.php" data-prefix="thedoorofhell_"></div>
        </div>
    </div>

    <div class="loading-screen">Loading...</div>

    <script>
      const doors = document.querySelectorAll('.door');
      const loadingScreen = document.querySelector('.loading-screen');

      doors.forEach(door => {
          let frame = 0;
          let animationInterval;
          const prefix = door.dataset.prefix;

          door.style.backgroundImage = `url('${prefix}00.png')`;

          door.addEventListener('click', () => {
              loadingScreen.style.display = 'flex';
              setTimeout(() => {
                  window.location.href = door.dataset.target;
              }, 2000); // 2 seconds loading time
          });

          door.addEventListener('mouseenter', () => {
              animationInterval = setInterval(() => {
                  frame = (frame + 1) % 4; // Only animate up to frame 03
                  const frameString = frame.toString().padStart(2, '0');
                  door.style.backgroundImage = `url('${prefix}${frameString}.png')`;
                  if (frame === 3) {
                      clearInterval(animationInterval); // Stop at frame 03
                  }
              }, 50); // Change frame every 50ms
          });

          door.addEventListener('mouseleave', () => {
              clearInterval(animationInterval);
              const reverseAnimation = setInterval(() => {
                  frame = (frame - 1 + 4) % 4; // Reverse animation
                  const frameString = frame.toString().padStart(2, '0');
                  door.style.backgroundImage = `url('${prefix}${frameString}.png')`;
                  if (frame === 0) {
                      clearInterval(reverseAnimation);
                  }
              }, 50);
          });
      });

      window.addEventListener('scroll', function() {
        var scrolled = window.pageYOffset;
        var parallax = document.querySelector('.parallax-bg');
        parallax.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
    });
  </script>
</body>
</html>